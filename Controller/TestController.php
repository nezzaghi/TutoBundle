<?php

namespace Ump\TutoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class TestController extends Controller
{
    /**
     * @EXT\Route("/hello", name="ump_hello")
     */
    public function helloAction() 
    
    {
    $name = 'mostafa et amine';
        return $this->render('UmpTutoBundle::index.html.twig', array('name'=>$name));
    }
}

