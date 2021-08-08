<?php

namespace App\Repository;

use App\Entity\Carte2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Carte2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carte2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carte2[]    findAll()
 * @method Carte2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Carte2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carte2::class);
    }

    // /**
    //  * @return Carte2[] Returns an array of Carte2 objects
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
    public function findOneBySomeField($value): ?Carte2
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
