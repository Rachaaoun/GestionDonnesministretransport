<?php

namespace App\Repository;

use App\Entity\TabCA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TabCA|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabCA|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabCA[]    findAll()
 * @method TabCA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabCARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabCA::class);
    }

    // /**
    //  * @return TabCA[] Returns an array of TabCA objects
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
    public function findOneBySomeField($value): ?TabCA
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
