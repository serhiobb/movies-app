<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FeedbackRecord;
use AppBundle\Form\FeedbackRecordType;
use FOS\RestBundle\Controller\FOSRestController as BaseController;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class FeedbackController extends BaseController
{
    /**
     * @Post("/feedback/create", name="feedback.create", defaults={ "_format" = "json" })
     * @View
     */
    public function createAction(Request $request)
    {
        $form = $this->createForm(new FeedbackRecordType(), new FeedbackRecord());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $data = $form->getData();
            $em->persist($data);
            $em->flush();
            return $this->handleView($this->view(['message'=>'Done'], 200));
        }else{
            return $this->handleView($this->view($form->getErrors(), 200));
        }
    }
}