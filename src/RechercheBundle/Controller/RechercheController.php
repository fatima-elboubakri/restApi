<?php

namespace RechercheBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle


class RechercheController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\get("/search_result/{q}")
     */
    public function getSearchresultAction()
    {

        //liste des critere

        //les resultat de recherche
        $json_string = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyDCXykU8gT5SCMFCBp6PZAM4dvqes0PGME&cx=004681564711251150295:d-_vw4klvjg&q=';





        $jsondata = file_get_contents($json_string . urlencode('q'));
        $obj = json_decode($jsondata, true);
        $result = array();
        foreach ($obj["items"] as $value) {
            $myarray = array(
                'nom' => $value['title'],
                'domaine' => $value['htmlTitle'],
                'link' => $value['link'],
                'url' => $value['pagemap']['cse_image']
            );
            array_push($result, $myarray);
        }
       // $reponse = json_encode(array("result" => $result));

        if (empty($result)) {
            return new JsonResponse(['message' => 'no result'], Response::HTTP_NOT_FOUND);
        } else {
            return $result;
        }


    }


    //search with linkdin

    /**
     * @Rest\View()
     * @Rest\get("/search_linkedin/{code}")
     */
    public function getSearchlinkedinAction()
    {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.linkedin.com/oauth/v2/accessToken");
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=authorization_code&code=" . 'code' . "&redirect_uri=http://localhost:80/google_search/result_link.php&client_id=86yl9kzokqkkrs&client_secret=winS3hTuexM1a07b");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            curl_close($ch);


        if (isset($_GET['code']) && json_decode($server_output)->access_token != '') {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.linkedin.com/v1/people/~?oauth2_access_token=" . json_decode($server_output)->access_token . "&format=json");
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output2 = curl_exec($ch);
            curl_close($ch);

            $user_data = json_decode($server_output2);

            print_r($user_data);


        return $server_output2;
        }

    }
}