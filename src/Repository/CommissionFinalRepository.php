<?php

namespace App\Repository;

use App\Entity\CommissionFinal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommissionFinal|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommissionFinal|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommissionFinal[]    findAll()
 * @method CommissionFinal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommissionFinalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommissionFinal::class);
    }

    // /**
    //  * @return CommissionFinal[] Returns an array of CommissionFinal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommissionFinal
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
