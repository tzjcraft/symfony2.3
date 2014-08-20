<?php
namespace Acme\StudyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RandomController extends Controller {
    public function indexAction($limit)
    {
        $number = rand(1, $limit);

//        return new Response('<html><body>Number: ' . rand(1, $limit) . '</body></html>');
        return $this->render('AcmeStudyBundle:Random:index.html.twig', array('number' => $number));
    }

}
