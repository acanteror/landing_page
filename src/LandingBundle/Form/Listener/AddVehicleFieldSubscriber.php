<?php

namespace LandingBundle\Form\Listener;

use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;

class AddVehicleFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        );
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $form->add('vehicle', null, array(
            'label' => 'Vehículo(*)',
            'placeholder' => '',
            'required' => true,
            'attr' => array(
                'class' => 'form-control', 'tabindex' => 6),
            'class' => 'LandingBundle\Entity\Vehicle',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('v')
                    ->where('v.typeVehicle = :typeVehicle')
                    ->setParameter('typeVehicle', 0);
            }
        ));
    }


    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        $this->addField($form, $data['typeVehicle']);
    }

    protected function addField(Form $form, $typeVehicle)
    {

        $form->add('vehicle', null, array(
            'class' => 'LandingBundle\Entity\Vehicle',
            'query_builder' => function(EntityRepository $er) use ($typeVehicle){
                return $er->createQueryBuilder('v')
                    ->where('v.typeVehicle = :typeVehicle')
                    ->setParameter('typeVehicle', $typeVehicle);
            }
        ));
    }
}
