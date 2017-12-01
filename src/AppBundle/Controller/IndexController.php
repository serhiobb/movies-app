<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller
{
    /**
     * @Route("/main")
     */
    public function mainAction()
    {
        return $this->render('AppBundle:Index:main.html.twig', array(
            // ...
        ));
    }
}
