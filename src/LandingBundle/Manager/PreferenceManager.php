<?php

namespace LandingBundle\Manager;

use LandingBundle\Entity\Preference;
use Doctrine\ORM\EntityManagerInterface;

class PreferenceManager {

    /** @var  \LandingBundle\Repository\PreferenceRepository */
    private $repository;

    /** @var  EntityManagerInterface */
    private $entityManager;

    const MORNING_PREFERENCE_ID = 1;
    const EVENING_PREFERENCE_ID = 2;
    const NIGHT_PREFERENCE_ID = 3;

    function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository("LandingBundle:Preference");
        $this->entityManager = $entityManager;
    }

    public function add(Preference $new){
        $this->entityManager->persist($new);
    }

    public function update(Preference $new){
        $this->entityManager->persist($new);
    }

    public function findById($id){
        return $this->repository->findById($id);
    }

    public function findByName($name){
        return $this->repository->findByName($name);
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function applyChanges(){
        $this->entityManager->flush();
    }

}