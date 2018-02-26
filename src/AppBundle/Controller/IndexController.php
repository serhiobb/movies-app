<?php

namespace AppBundle\Controller;

use AppBundle\Form\FeedbackType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormView;

class IndexController extends Controller
{
    /**
     * @Route("/main")
     */
    public function mainAction()
    {
        $feedbackType = new FormView();
        $feedbackType->vars = ['_token' => '%token%'];
        return $this->render('AppBundle:Index:main.html.twig', array(
            'feedback_form' => $feedbackType
        ));
    }

    /**
     * @Route(path="/current-form", name="current-form")
     */
    public function processFormAction()
    {
        //process form
        //...
        //redirect to redults
        redirect('/main');
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
