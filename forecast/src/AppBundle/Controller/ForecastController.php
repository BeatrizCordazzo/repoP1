<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ForecastController extends Controller{
    public function indexAction() {
        return new Response('Hace un frio que pela');
    }

    public function indexParamAction($weather){
        return new Response('<html><body>Informacion del tiempo: Hace ' . $weather . '</body></html>');
    }

    public function index2ParamsAction($weather, $temperature) {
        return new Response('<html><body>Weather info: It\'s ' . $weather . ' and the current temperature is: ' . $temperature . 'ºC</body></html>');
    }

    public function indexRequestAction($weather, $temperature, Request $request) {
        return new Response('<html><body>Weather info in ' . $request->query->get("city") . ': It\'s ' . $weather . ' and the current temperature is: ' . $temperature . 'ºC</body></html>');
    }
}
