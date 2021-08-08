<?php

namespace App\Repository;

use App\Entity\DateAnneePourForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DateAnneePourForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method DateAnneePourForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method DateAnneePourForm[]    findAll()
 * @method DateAnneePourForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DateAnneePourFormRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DateAnneePourForm::class);
    }

    // /**
    //  * @return DateAnneePourForm[] Returns an array of DateAnneePourForm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DateAnneePourForm
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
