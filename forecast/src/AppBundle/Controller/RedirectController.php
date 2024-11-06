<?php
 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
 
class RedirectController extends Controller {
    
    public function internaRedirectAction() {
        return $this->redirectToRoute("redirect_index");
    }

    public function indexAction(){
        return new Response('Redireccion satisfactoria');
    }

    public function internalRedirectPermanentAction() {
        return $this->redirectToRoute("redirect_index", array(), 301);
    }

    public function externalRedirectAction() {
        return $this->redirect("http://youtube.com");
    }
}