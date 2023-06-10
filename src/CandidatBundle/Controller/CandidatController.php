<?php
namespace CandidatBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use CandidatBundle\Entity\Candidat;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use CandidatBundle\Service\Validate;
use CandidatBundle\Form\CandidatType;

class CandidatController extends Controller
{

    /**
     * @Get("/candidats")
     * @Rest\View()
     */
    public function getCandidatsAction()
    {
        $Candidats = $this->get('doctrine.orm.entity_manager')
            ->getRepository('CandidatBundle:Candidat')
           ->findBy(array(), array('id' => 'desc'));

        /* @var $Candidats Candidat[] */

        return empty($Candidats) ?
            new JsonResponse(['message' => ' OOPS Object not found'], Response::HTTP_NOT_FOUND) : $Candidats;

    }

    /**
     * @Get("/candidat/{id}")
     * @Rest\View()
     */
    public function getCandidatAction(Request $request)
    {
        $candidat = $this->get('doctrine.orm.entity_manager')
            ->getRepository('CandidatBundle:Candidat')
            ->find($request->get('id'));
        /* @var $candidat Candidat */

        if (empty($candidat)) {
            return new JsonResponse(['message' => ' OOPS Object not found'], Response::HTTP_NOT_FOUND);
        }
        else{


            return $candidat;
        }

    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/candidat")
     * @param Request $request
     * @return Candidat|JsonResponse
     */
    public function postCandidatsAction(Request $request)
    {
        $candidat = new Candidat();


        // @var Symfony\Component\HttpFoundation\File\UploadedFile $file
        $image = $request->files->get('photo_can');
        $cv = $request->files->get('cv_can');


        // Generate a unique name for the file before saving it
        $imageName = md5(uniqid()).'.'.$image->guessExtension();
        $cvName = md5(uniqid()).'.'.$cv->guessExtension();

        // Move the file to the directory where brochures are stored
        $image->move(
            $this->container->getParameter('kernel.root_dir').'/../web/bundles/profiles',
            $imageName
        );

        $cv->move(
            $this->container->getParameter('kernel.root_dir').'/../web/bundles/fichiers',
            $cvName
        );


            $candidat
                ->setNomCan($request->get('nom_can'))
                ->setPrenomCan($request->get('prenom_can'))
                ->setDnCan($request->get('dn_can'))
                ->setGenre($request->get('genre'))
                ->setPhotoCan('profiles/'.$imageName)
                ->setAdrCan($request->get('adr_can'))
                ->setTelCan($request->get('tel_can'))
                ->setEmailCan($request->get('email_can'))
                ->setTitreCan($request->get('titre_can'))
                ->setNetudeCan($request->get('netude_can'))
                ->setExpCan($request->get('exp_can'))
                ->setCompCan($request->get('comp_can'))
                ->setDescCam($request->get('desc_cam'))
                ->setCvCan('fichiers'.$cvName)
                ->setEtatCan($request->get('etat_can'));

            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($candidat);
            $em->flush();

            return $candidat;
        }
    /**
        $status = array('status' => "failure","fileUploaded" => false);
        
          return new JsonResponse($status);
        }
**/


    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/candidat/{id}")
     */
    public function deleteCandidatAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $candidat = $em->getRepository('CandidatBundle:Candidat')
            ->find($request->get('id'));
        /* @var $candidat Candidat */

        if ($candidat) {
            $em->remove($candidat);
            $em->flush();
        }
        return new JsonResponse(['message' => ' bien supprimé'], Response::HTTP_NOT_FOUND);
    }

    /**
     * @Rest\Put("/candidat/{id}")
     * @Rest\View()
     * @param Request $request
     * @return null|object
     */
    public function updateAction(Request $request){

        //$data = new Candidat;

        $em = $this->getDoctrine()->getManager();
        $candidat = $em->getRepository('CandidatBundle:Candidat')
            ->find($request->get('id'));


        $candidat ->setNomCan($request->get('nom_can'));
        $candidat ->setPrenomCan($request->get('prenom_can'));
        $candidat ->setDnCan($request->get('dn_can'));
        $candidat  ->setGenre($request->get('genre'));
        $candidat ->setPhotoCan("aucun.jpg");
        $candidat  ->setAdrCan($request->get('adr_can'));
        $candidat  ->setTelCan($request->get('tel_can'));
        $candidat  ->setEmailCan($request->get('email_can'));
        $candidat ->setTitreCan($request->get('titre_can'));
        $candidat ->setNetudeCan($request->get('netude_can'));
        $candidat ->setExpCan($request->get('exp_can'));
        $candidat ->setCompCan($request->get('comp_can'));
        $candidat ->setDescCam($request->get('desc_cam'));
        $candidat ->setCvCan("aucun.pdf");
        $candidat ->setEtatCan($request->get('etat_can'));

        $em->flush();

        return $candidat;
    }

    /**
     * @Rest\View()
     * @Rest\Put("/candidat/{id}")
     * @param Request $request
     * @return JsonResponse
     * @internal param $id
     * @internal param Validate $validate
     */
    public function putCandidatAction(Request $request)
    {
        $candidat = $this->get('doctrine.orm.entity_manager')
            ->getRepository('CandidatBundle:Candidat')
            ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $candidat Candidat */

        if (empty($candidat)) {
            return new JsonResponse(['message' => 'Candidat not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CandidatType::class, $candidat);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($candidat);
            $em->flush();
            return $candidat;
        } else {
            return $form;
        }
    }
    /**
     * @Rest\View()
     * @Rest\Patch("/candidat/{id}")
     */
    public function patchCandidatAction(Request $request)
    {
        return $this->updateCandidat($request, false);
    }

    private function updateCandidat(Request $request, $clearMissing)
    {
        /** @var TYPE_NAME $candidat */
        $candidat = $this->get('doctrine.orm.entity_manager')
            ->getRepository('CandidatBundle:Candidat')
            ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $candidat Candidat */

        if (empty($candidat)) {
            return new JsonResponse(['message' => 'Candidat not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CandidatType::class, $candidat);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($candidat);
            $em->flush();
            return $candidat;
        } else {
            return $form;
        }
    }


}