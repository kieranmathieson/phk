<?php

namespace AppBundle\Controller;

use AppBundle\Form\FeedbackFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FeedbackController extends Controller
{
    /**
     * @Route("/feedback", name="feedback_home")
     */
    public function indexAction()
    {
        return new Response('<h1>Here</h1>');
//        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/feedback/new", name="feedback_new")
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(FeedbackFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $feedback = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($feedback);
            $em->flush();
            $this->addFlash('success', 'Thank you. Feedback saved.');
            return $this->redirectToRoute('app_diagnosisstate_show');
        }
        return $this->render('feedback/new.html.twig', [
            'feedbackForm' => $form->createView(),
        ]);

    }
}
