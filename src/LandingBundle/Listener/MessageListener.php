<?php

namespace LandingBundle\Listener;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Event\PostFlushEventArgs;
use Doctrine\ORM\Mapping\PreRemove;
use LandingBundle\Entity\Message;
use LandingBundle\Form\MessageType;
use LandingBundle\Manager\Mailer;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MessageListener
{
    public $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Message) {
            /** @var Mailer $manager */
            $manager = $this->container->get("landing.manager.mailer");
            $manager->sendMessageReceivedEmail($entity);
        }
    }

}