<?php

namespace LandingBundle\Controller;

use LandingBundle\Entity\Message;
use LandingBundle\Entity\Preference;
use LandingBundle\Form\MessageType;
use LandingBundle\Manager\MessageManager;
use LandingBundle\Manager\PreferenceManager;
use LandingBundle\Manager\VehicleManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/promocion")
 */
class LandingController extends Controller
{

    /**
     * @Route("/", name="promotion_new")
     */
    public function indexAction(Request $request)
    {

        $request = $this->getRequest();
        $preferenceParam = $request->get('preference');
        /** @var PreferenceManager $preferenceManager */
        $preferenceManager = $this->get("landing.manager.preference");
        /** @var Preference $preference */
        $preference = $preferenceManager->findByName(ucfirst($preferenceParam));

        /** @var Message $message */
        $message = new Message();
        $message->setPreference($preference);

        $form = $this->createForm(new MessageType(), $message);
        $form->handleRequest($request);

        return $this->render('LandingBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/save",name="save-message")
     *
     */
    public function saveMessageAction(Request $request)
    {

        $request = $this->getRequest();
        $session = $request->getSession();

        $message = new Message();

        $form = $this->createForm(new MessageType(), $message);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid() ) {
            /** @var MessageManager $messageManager */
            $messageManager = $this->get('landing.manager.message');
            $messageManager->update($message);
            $messageManager->applyChanges();

            $session->set('submitted', true);
            return $this->redirect($this->generateUrl('promotion_thanks'));

        }

        return $this->redirect($this->generateUrl('promotion_new'));

    }

    /**
     * @Route("/gracias-promocion", name="promotion_thanks")
     */
    public function thanksAction(Request $request)
    {

        $request = $this->getRequest();
        $session = $request->getSession();
        $submitted = $session->get('submitted');
        if ($submitted){
            $session->remove('submitted');
            return $this->render('LandingBundle:Default:thanks-promotion.html.twig', array());
        }

        return $this->redirect($this->generateUrl('promotion_new'));

    }

    /**
     * @Route("/vehicles", name="select_vehicles", condition="request.headers.get('X-Requested-With') == 'XMLHttpRequest'")
     */
    public function vehiclesAction(Request $request)
    {
        $typeVehicle_id = $request->request->get('typeVehicle_id');
        /** @var VehicleManager $vehicleManager */
        $vehicleManager = $this->get("landing.manager.vehicle");
        $vehicles = $vehicleManager->findByTypeVehicleId($typeVehicle_id);

        $html = $this->renderView('LandingBundle:Default:_vehicles_select.html.twig', array('vehicles' => $vehicles));

        return new JsonResponse($html, 200);

     }


}


