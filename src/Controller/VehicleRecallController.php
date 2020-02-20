<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehicleRecallController
{

    /**
     * @Route("/nhtsa-recall/vehicle/details")
     */
    public function recallVehicle()
        {
            return new Response('Recalled Vehicle Details');

        }
}