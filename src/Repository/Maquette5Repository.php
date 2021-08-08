<?php

namespace App\Repository;

use App\Entity\Maquette5;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Maquette5|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maquette5|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maquette5[]    findAll()
 * @method Maquette5[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Maquette5Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maquette5::class);
    }

    // /**
    //  * @return Maquette5[] Returns an array of Maquette5 objects
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
    public function findOneBySomeField($value): ?Maquette5
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
