<?php

namespace LandingBundle\Manager;

use LandingBundle\Entity\Vehicle;
use Doctrine\ORM\EntityManagerInterface;

class VehicleManager {

    /** @var  \LandingBundle\Repository\VehicleRepository */
    private $repository;

    /** @var  EntityManagerInterface */
    private $entityManager;

    function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository("LandingBundle:Vehicle");
        $this->entityManager = $entityManager;
    }

    public function add(Vehicle $new){
        $this->entityManager->persist($new);
    }

    public function update(Vehicle $new){
        $this->entityManager->persist($new);
    }

    public function findById($id){
        return $this->repository->findById($id);
    }

    public function findByTypeVehicleId($id){
        return $this->repository->findByTypeVehicleId($id);
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function applyChanges(){
        $this->entityManager->flush();
    }

}