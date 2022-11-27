<?php

namespace App\Controller;

use App\Controller\AppController;



class HomepageController extends AppController

{
    [Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render(view:'homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}


?>