<?php

namespace AppBundle\Controller;

use AppBundle\Form\DiagnosisSelectionFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DiagnosisStateController extends Controller
{
    /**
     * @Route("/diagnosis/{stateId}")
     * @param int $stateId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($stateId=0)
    {
        $em = $this->getDoctrine()->getManager();
        //Get diagnosis state id to show, if there is one.
        if ( $stateId == 0 ) {
            $selectedDiagnosisState = '';
        }
        else {
            $selectedDiagnosisState = $em->getRepository('AppBundle:DiagnosisState')
                ->findOneBy(['id' => $stateId]);
            if (!$selectedDiagnosisState) {
                throw $this->createNotFoundException('Diagnosis state not found');
            }
        }
        //Lookup the states for the select widget.
        $diagnosisStates = $em->getRepository('AppBundle:DiagnosisState')
            ->findAllOrderedByDiagnosis();
        $options = [];
        foreach ($diagnosisStates as $diagnosisState) {
            $options[$diagnosisState->getStateName()] = $diagnosisState->getId();
        }


        $form = $this->createForm(DiagnosisSelectionFormType::class, ['options' => $options]);


        return $this->render('diagnosis_state/diagnosis_state.html.twig', array(
            'selectedDiagnosisState' => $selectedDiagnosisState,
            'diagnosisStatesForm' => $form->createView(),
        ));
    }
}
