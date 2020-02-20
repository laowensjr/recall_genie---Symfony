<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class VehicleRecallController
{

    /**
     * @Route("/nhtsa-recall")
     */
    public function recallVehicle()
    {
        return new Response('Welcome to the Recall Genie');

    }

    /**
     * @Route("/nhtsa-recall/vehicle/details/")
     */
     public function show()
        {
            $postdata = null;
            $opts = array('http' =>
                array(
                    'method' => 'GET',
                    'content' => $postdata
                )
            );

            $apiURL = "https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeId/440?format=json";
            $context = stream_context_create($opts);
            $fp = fopen($apiURL, 'rb', false, $context);
            if(!$fp)
            {
                echo "in first if";
            }
            $myresponse = @stream_get_contents($fp);
            if($myresponse == false)
            {
                echo "in second if";
            }
           // echo $myresponse;
return new JsonResponse(json_decode($myresponse));
    }
}