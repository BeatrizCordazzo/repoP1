<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends Controller {

    public function indexAction($age): Response{
        $currentYear = date(format: "Y");
        $year = $currentYear - $age;

        return $this->render('calculator/index.html.twig', array('year' => $year));
    }

}
