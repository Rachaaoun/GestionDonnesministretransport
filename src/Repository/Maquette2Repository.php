<?php

namespace App\Repository;

use App\Entity\Maquette2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Maquette2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maquette2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maquette2[]    findAll()
 * @method Maquette2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Maquette2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maquette2::class);
    }

    // /**
    //  * @return Maquette2[] Returns an array of Maquette2 objects
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
    public function findOneBySomeField($value): ?Maquette2
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
