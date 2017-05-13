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

    /**
     * @Route("/store")
     */
    public function storeAction()
    {
        return $this->render('AppBundle:Index:store.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/checkout")
     */
    public function checkoutAction()
    {
        return $this->render('AppBundle:Index:checkout.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cart")
     */
    public function cartAction()
    {
        return $this->render('AppBundle:Index:cart.html.twig', array(
            // ...
        ));
    }

}
