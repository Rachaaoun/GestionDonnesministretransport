<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Session;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Session|null find($id, $lockMode = null, $lockVersion = null)
 * @method Session|null findOneBy(array $criteria, array $orderBy = null)
 * @method Session[]    findAll()
 * @method Session[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Session::class);
    }

    // /**
    //  * @return Session[] Returns an array of Session objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Session
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function SessionParDate(array $filters = [])
    {
        $queryBuilder = $this->createQueryBuilder('s');

        if (isset($filters['year'])) {
            $queryBuilder
                ->addSelect('DATE_FORMAT(e.date, \'%Y\') as date')
                ->addGroupBy('date')
                ->andWhere('YEAR(e.date) = :year')->setParameter('year', $filters['year']);
        }

        if (isset($filters['month'])) {
            $queryBuilder
                ->addSelect('DATE_FORMAT(e.date, \'%m-%Y\') as dateM')
                ->addGroupBy('dateM')
                ->andWhere('MONTH(e.date) = :month')->setParameter('month', $filters['month']);
        }

        if (isset($filters['day'])) {
            $queryBuilder
                ->addSelect('DATE_FORMAT(e.date, \'%d-%m-%Y\') as dateD')
                ->addGroupBy('dateD')
                ->andWhere('DAY(e.date) = :day')->setParameter('day', $filters['day']);
        }

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }


    /**
     * @return Session[]
     */
    public function findSearch(SearchData $search):array
    {
        $query= $this->createQueryBuilder('s')
        ->select('s');

        if($search->q){
            $query =
                $query
                    ->where('s.fichier LIKE :q')
                    ->setParameter('q', '%'.$search->q.'%');
        }

        if($search->qproprietaireaccord){
            $query =
                $query
                    ->where('s.proprietaireaccord LIKE :q')
                    ->setParameter('q', '%'.$search->qproprietaireaccord.'%');
        }

        //dd($query->getQuery()->getResult());
        return $query->getQuery()->getResult();
    }

}
