<?php

namespace App\Repository;

use App\Entity\Carte5;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Carte5|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carte5|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carte5[]    findAll()
 * @method Carte5[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Carte5Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carte5::class);
    }

    // /**
    //  * @return Carte5[] Returns an array of Carte5 objects
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
    public function findOneBySomeField($value): ?Carte5
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
