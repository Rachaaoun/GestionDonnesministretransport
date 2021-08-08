<?php

namespace App\Repository;

use App\Entity\Observatoire3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Observatoire3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Observatoire3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Observatoire3[]    findAll()
 * @method Observatoire3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Observatoire3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Observatoire3::class);
    }

    // /**
    //  * @return Observatoire3[] Returns an array of Observatoire3 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Observatoire3
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
