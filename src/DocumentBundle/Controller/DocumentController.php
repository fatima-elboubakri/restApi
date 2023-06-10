<?php
namespace DocumentBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use DocumentBundle\Entity\Document;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle

use DocumentBundle\Form\DocumentType;

class DocumentController extends Controller
{

    /**
     * @Get("/documents")
     * @Rest\View()
     */
    public function getDocumentsAction()
    {
        $Documents = $this->get('doctrine.orm.entity_manager')
            ->getRepository('DocumentBundle:Document')
            ->findAll();

        /* @var $Documents Document[] */

        if (empty($Documents)) {
            return new JsonResponse(['message' => ' OOPS Object not found'], Response::HTTP_NOT_FOUND);
        }else{
            return $Documents;
        }

    }

    /**
     * @Get("/documents/{id}")
     * @Rest\View()
     * @param Request $request
     * @return Document|JsonResponse
     */
    public function getDocumentAction(Request $request)
    {
        $Document = $this->get('doctrine.orm.entity_manager')
            ->getRepository('DocumentBundle:Document')
            ->find($request->get('id'));
        /* @var $Document Document */

        return empty($Document) ? new JsonResponse(['message' => ' OOPS Object not found'], Response::HTTP_NOT_FOUND) : $Document;

    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/documents")
     */
    public function postDocumentsAction(Request $request)
    {
        $Document = new Document();

        $Document
            ->setTitre($request-> get('titre'))
            ->setObj($request-> get('obj'))
            ->setDateCreation($request->get('date_creation'))
            ->setCorps($request-> get('corps'))
            ->setKeywords($request-> get('keywords'))
            ->setDescp($request-> get('descp'))
            ->setSignature($request-> get('signature'));


        $em = $this->get('doctrine.orm.entity_manager');
        $em->persist($Document);
        $em->flush();

        return $Document;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/documents/{id}")
     */
    public function removeDocumentAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $Document = $em->getRepository('DocumentBundle:Document')
            ->find($request->get('id'));
        /* @var $Document Document */

        if ($Document) {
            $em->remove($Document);
            $em->flush();
        }
        return new JsonResponse(['message' => ' bien supprimé'], Response::HTTP_NOT_FOUND);
    }


    /**
     * @Rest\View()
     * @Rest\Put("/documents/{id}")
     */
    public function updateDocAction($id, Request $request)
    {
        $titre = $request -> get('titre');
        $obj = $request -> get('obj');
        $date_Creation = $request -> get('date_creation');
        $corps = $request -> get('corps');
        $keywords = $request -> get('keywords');
        $descp = $request -> get('descp');
        $signature = $request -> get('signature');

        $sn = $this->getDoctrine()->getManager();
        $doc = $this->getDoctrine()->getRepository('DocumentBundle:Document')
            ->find($id);

        if (empty($doc)) {
            return new View("Docuement not found", Response::HTTP_NOT_FOUND);
        } elseif (!empty($titre) && !empty($obj) && !empty($date_Creation) && !empty($corps) && !empty($keywords) && !empty($descp) && !empty($signature)) {
            $doc->settitre($titre);
            $doc->setObj($obj);
            $doc->setDateCreation($date_Creation);
            $doc->setCorps($corps);
            $doc->setKeywords($keywords);
            $doc->setDescp($descp);
            $doc->setSignature($signature);
            $sn->flush();
            return new View("Document Updated Successfully", Response::HTTP_OK);
        } elseif (!empty($titre) && empty($obj) && empty($date_Creation) && empty($corps) && empty($keywords) && empty($descp) && empty($signature)) {
            $doc->setLogin($titre);
            $sn->flush();
            return new View("Titre Updated Successfully", Response::HTTP_OK);
        } elseif (empty($titre) && !empty($obj) && empty($date_Creation) && empty($corps) && empty($keywords) && empty($descp) && empty($signature)) {
            $doc->setobj($obj);
            $sn->flush();
            return new View("Objet Updated Successfully", Response::HTTP_OK);
        } elseif (empty($titre) && empty($obj) && !empty($date_Creation) && empty($corps) && empty($keywords) && empty($descp) && empty($signature)) {
            $doc->setLogin($date_Creation);
            $sn->flush();
            return new View("date_Creation Updated Successfully", Response::HTTP_OK);
        } elseif (empty($titre) && empty($obj) && empty($date_Creation) && !empty($corps) && empty($keywords) && empty($descp) && empty($signature)) {
            $doc->setobj($obj);
            $sn->flush();
            return new View("Corps Updated Successfully", Response::HTTP_OK);
        } elseif (empty($titre) && empty($obj) && empty($date_Creation) && empty($corps) && !empty($keywords) && empty($descp) && empty($signature)) {
            $doc->setLogin($keywords);
            $sn->flush();
            return new View("Mot-clé Updated Successfully", Response::HTTP_OK);
        } elseif (empty($titre) && empty($obj) && empty($date_Creation) && empty($corps) && empty($keywords) && !empty($descp) && empty($signature)) {
            $doc->setobj($descp);
            $sn->flush();
            return new View("Déscription Updated Successfully", Response::HTTP_OK);
        } elseif (empty($titre) && empty($obj) && empty($date_Creation) && empty($corps) && empty($keywords) && empty($descp) && !empty($signature)) {
            $doc->setobj($signature);
            $sn->flush();
            return new View("Signature Updated Successfully", Response::HTTP_OK);
        } else return new View("Document cannot be empty", Response::HTTP_NOT_ACCEPTABLE);
    }

    /**
     * @Rest\View()
     * @Rest\Patch("/document/{id}")
     */
    public function patchDocumentAction(Request $request)
    {
        return $this->updateDocument($request, false);
    }

    private function updateDocument(Request $request, $clearMissing)
    {
     
        $Document = $this->get('doctrine.orm.entity_manager')
            ->getRepository('DocumentBundle:Document')
            ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $Document Document */

        if (empty($Document)) {
            return new JsonResponse(['message' => 'Document not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(DocumentType::class, $Document);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($Document);
            $em->flush();
            return $Document;
        } else {
            return $form;
        }
    }
}