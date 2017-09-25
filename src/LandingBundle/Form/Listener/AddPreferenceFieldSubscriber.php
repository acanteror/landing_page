<?php

namespace LandingBundle\Form\Listener;

use Doctrine\ORM\EntityManager;
use LandingBundle\Entity\Preference;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;

class AddPreferenceFieldSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
        );
    }

    private function addPreferencefield($form, $preference_id)
    {

        if ($preference_id){

            $formOptions = array(
                'label' => 'Preferencia(*)',
                'attr' => array(
                    'class' => 'form-control', 'tabindex' => 7),
                'class' => 'LandingBundle:Preference',
                'query_builder' => function (EntityRepository $repository) use ($preference_id) {
                    $qb = $repository->createQueryBuilder('m')
                        ->where('m.id = :preference_id')
                        ->setParameter('preference_id', $preference_id)
                    ;
                    return $qb;}

            );
        } else {
            $formOptions = array(
                'placeholder' => 'Selecciona...',
                'label' => 'Preferencia(*)',
                'attr' => array('class' => 'form-control'),
                'class' => 'LandingBundle:Preference',
            );
        }

        $form->add('preference', null, $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }
        /** @var Preference $preference */
        $preference = $data->getPreference();
        $preference_id = ($preference) ? $preference->getId() : null;

        $this->addPreferenceField($form, $preference_id);
    }

}