<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ForwardController extends Controller{
    public function indexAction() {
        $responde = $this->forward('AppBundle:Forward:finish', array('test' => true));
        return $responde;
    }

    public function finishAction($test) {
        if($test) {
            return new Response('Redirection done receving the parameter successfully');
        } else {
            return new Response('Parameter was not receveid successfully');
        }
    }
}
