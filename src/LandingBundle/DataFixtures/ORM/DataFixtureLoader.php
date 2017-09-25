<?php

use Doctrine\Common\Persistence\ObjectManager;
use LandingBundle\Repository\TypeVehicleRepository;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Doctrine\Common\DataFixtures\FixtureInterface;
use LandingBundle\Entity\TypeVehicle;
use LandingBundle\Entity\Vehicle;
use LandingBundle\Entity\Preference;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DataFixtureLoader implements FixtureInterface, ContainerAwareInterface
{

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $typeVehicleArray = ['turismo', 'todoterreno', 'comercial'];
        $tcVehiclesArray = ['corsa', 'astra'];
        $atVehiclesArray = ['mokka', 'crossland'];
        $preferencesArray = ['mañana', 'tarde', 'noche'];

        foreach ($typeVehicleArray as $indexType => $nameType){
            $typeVehicle = '$typeVehicle'.$indexType;
            $typeVehicle = new TypeVehicle();
            $typeVehicle->setName($nameType);
            $manager->persist($typeVehicle);
            if ($indexType == 0 or $indexType == 2){
                $this->createVehicles($tcVehiclesArray, $typeVehicle, $manager);
            } elseif ($indexType == 1){
                $this->createVehicles($atVehiclesArray, $typeVehicle, $manager);
            } else {

            }
        }

        foreach ($preferencesArray as $indexPreference => $namePreference) {
            $preference = '$preference' . $indexPreference;
            $preference = new Preference();
            $preference->setName($namePreference);
            $manager->persist($preference);
        }

        $manager->flush();

    }

    public function createVehicles ($array, $typeVehicle, $manager){
        foreach ($array as $indexVehicle => $nameVehicle ){
            $vehicle = '$vehicle'.$indexVehicle;
            $vehicle = new Vehicle();
            $vehicle->setName($nameVehicle);
            $vehicle->setTypeVehicle($typeVehicle);
            $manager->persist($vehicle);
        }
    }

}