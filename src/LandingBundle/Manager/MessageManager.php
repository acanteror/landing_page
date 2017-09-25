<?php

namespace LandingBundle\Manager;

use LandingBundle\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;

class MessageManager {

    /** @var  \LandingBundle\Repository\MessageRepository */
    private $repository;

    /** @var  EntityManagerInterface */
    private $entityManager;


    function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository("LandingBundle:Message");
        $this->entityManager = $entityManager;
    }

    public function add(Message $new){
        $this->entityManager->persist($new);
    }

    public function update(Message $new){
        $this->entityManager->persist($new);
    }

    public function findById($id){
        return $this->repository->findById($id);
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function applyChanges(){
        $this->entityManager->flush();
    }

}