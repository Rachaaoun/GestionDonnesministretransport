<?php

namespace App\Repository;

use App\Entity\Maquette3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Maquette3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maquette3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maquette3[]    findAll()
 * @method Maquette3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Maquette3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maquette3::class);
    }

    // /**
    //  * @return Maquette3[] Returns an array of Maquette3 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Maquette3
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
