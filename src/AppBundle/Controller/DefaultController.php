<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $movies = $this->container->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle\Entity\Movie')->findAll();
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'movies' => $movies
        ));
    }

    /**
     * @Route ("/dot-44", name="dot44")
     */
    public function dot44Action(Request $request)
    {
        return $this->render('dot44/index.html.twig');
    }
}
