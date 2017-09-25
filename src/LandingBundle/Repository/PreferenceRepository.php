<?php
namespace LandingBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PreferenceRepository extends EntityRepository
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

    public function findByName($name)
    {
        $sql = $this->createQueryBuilder('c');
        $sql
            ->andWhere('c.name = :name')
            ->setParameter('name', $name);

        $query = $sql->getQuery();
        return $query->getOneOrNullResult();
    }

    public function findAll()
    {
        $sql = $this->createQueryBuilder('c');

        $query = $sql->getQuery();
        return $query->getResult();
    }

}//class