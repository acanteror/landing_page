<?php

namespace LandingBundle\Manager;

use LandingBundle\Entity\TypeVehicle;
use Doctrine\ORM\EntityManagerInterface;

class TypeVehicleManager {

    /** @var  \LandingBundle\Repository\TypeVehicleRepository*/
    private $repository;

    /** @var  EntityManagerInterface */
    private $entityManager;

    function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository("LandingBundle:TypeVehicle");
        $this->entityManager = $entityManager;
    }

    public function add(TypeVehicle $new){
        $this->entityManager->persist($new);
    }

    public function update(TypeVehicle $new){
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