<?php
namespace LandingBundle\Form;

use LandingBundle\Form\Listener\AddPreferenceFieldSubscriber;
use LandingBundle\Form\Listener\AddVehicleFieldSubscriber;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use LandingBundle\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {


        $builder->add('id', TextType::class, array(
            'label' => 'id',
            'required' => false,
            'attr' => array('placeholder' => 'Id','class' => 'form-control input-circle')
        ))
            ->add('id',HiddenType::class)


            ->add('name', TextType::class, array(
                'label' => 'Nombre(*)',
                'required' => true,
                'attr' => array('placeholder'=> 'Nombre', 'class' => 'form-control', 'tabindex' => 1)
            ))

            ->add('surname', TextType::class, array(
                'label' => 'Apellidos(*)',
                'required' => true,
                'attr' => array('placeholder'=> 'Apellidos', 'class' => 'form-control', 'tabindex' => 2)
            ))

            ->add('phone', TextType::class, array(
                'label' => 'Teléfono',
                'required' => false,
                'attr' => array('placeholder' => 'Teléfono', 'class' => 'form-control', 'tabindex' => 3)
            ))

            ->add('email', EmailType::class, array(
                'label' => 'Email(*)',
                'required' => true,
                'attr' => array('placeholder' => 'Email', 'class' => 'form-control', 'tabindex' => 4)
            ))

            ->add('typeVehicle', null, array(
                'label' => 'Tipo de vehículo(*)',
                'placeholder' => 'Selecciona...',
                'class' => 'LandingBundle:TypeVehicle',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control', 'tabindex' => 5)
            ))

        ;

        $builder->addEventSubscriber(new AddVehicleFieldSubscriber());

        $builder->addEventSubscriber(new AddPreferenceFieldSubscriber());

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => Message::class,

            )
        );
    }

    public function getName() {
        return 'message';
    }

}//class