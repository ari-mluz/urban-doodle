<?php

namespace App\Controller\Ocorrencia;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OcorrenciaAnimalController extends AbstractController{

    public function index(){
        
        return $this->render('ocorrencia/ocorrenciaAnimalIndex.html.twig');
    }

    public function novoRegistro(){

        return $this->render('ocorrencia/ocorrenciaAnimalRegistrar.html.twig');
    }




}