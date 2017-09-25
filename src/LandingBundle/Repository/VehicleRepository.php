<?php
namespace LandingBundle\Repository;

use Doctrine\ORM\EntityRepository;

class VehicleRepository extends EntityRepository
{

    public function findById($id)
    {
        $sql = $this->createQueryBuilder('c');
        $sql
            ->andWhere('c.id = :id')
            ->setParameter('id', $id);

        $query = $sql->getQuery();
        return $query->getOneOrNullResult();
    }

    public function findByTypeVehicleId($id)
    {
        $sql = $this->createQueryBuilder('c');
        $sql
            ->innerJoin('c.typeVehicle','t')
            ->andWhere('t.id = :id')
            ->setParameter('id', $id);

        $query = $sql->getQuery();
        return $query->getResult();
    }

    public function findAll()
    {
        $sql = $this->createQueryBuilder('c');

        $query = $sql->getQuery();
        return $query->getResult();
    }

}//class