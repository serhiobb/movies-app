<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FeedbackRecord;
use AppBundle\Form\FeedbackRecordType;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @Route("/", name="app")
     */
    public function appAction(Request $request)
    {
        $react = [];
        echo 'React';
    }

    /**
     * @Route("/dot-44", name="dot44")
     */
    public function dot44Action(Request $request)
    {
        $form = $this->createForm(new FeedbackRecordType(), new FeedbackRecord());
        if($request->isMethod('POST')){
            $form->handleRequest($request);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $data = $form->getData();
            $em->persist($data);
            $em->flush();
            $data = ['message' => 'Your Message Is Sent!', 'errors' => []]; $code = 200;
        }else{
            $data = $form->getErrors(); $code = 500;
        }
        if($request->isXmlHttpRequest()){
            return new JsonResponse($data, $code);
        }
        return $this->render('dot44/index.html.twig', ['feedback_form' => $form->createView()]);
    }
}
