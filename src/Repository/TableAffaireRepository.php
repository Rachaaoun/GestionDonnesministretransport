<?php

namespace App\Repository;

use App\Entity\TableAffaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TableAffaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method TableAffaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method TableAffaire[]    findAll()
 * @method TableAffaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableAffaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TableAffaire::class);
    }

    // /**
    //  * @return TableAffaire[] Returns an array of TableAffaire objects
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
    public function findOneBySomeField($value): ?TableAffaire
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
