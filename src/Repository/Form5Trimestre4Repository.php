<?php

namespace App\Repository;

use App\Entity\Form5Trimestre4;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Form5Trimestre4|null find($id, $lockMode = null, $lockVersion = null)
 * @method Form5Trimestre4|null findOneBy(array $criteria, array $orderBy = null)
 * @method Form5Trimestre4[]    findAll()
 * @method Form5Trimestre4[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Form5Trimestre4Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Form5Trimestre4::class);
    }

    // /**
    //  * @return Form5Trimestre4[] Returns an array of Form5Trimestre4 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Form5Trimestre4
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
