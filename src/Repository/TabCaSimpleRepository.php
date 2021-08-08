<?php

namespace App\Repository;

use App\Entity\TabCaSimple;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TabCaSimple|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabCaSimple|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabCaSimple[]    findAll()
 * @method TabCaSimple[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabCaSimpleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabCaSimple::class);
    }

    // /**
    //  * @return TabCaSimple[] Returns an array of TabCaSimple objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TabCaSimple
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
