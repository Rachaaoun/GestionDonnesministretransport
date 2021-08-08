<?php

namespace App\Repository;

use App\Entity\Form5Trimestre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Form5Trimestre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Form5Trimestre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Form5Trimestre[]    findAll()
 * @method Form5Trimestre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Form5TrimestreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Form5Trimestre::class);
    }

    // /**
    //  * @return Form5Trimestre[] Returns an array of Form5Trimestre objects
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
    public function findOneBySomeField($value): ?Form5Trimestre
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
