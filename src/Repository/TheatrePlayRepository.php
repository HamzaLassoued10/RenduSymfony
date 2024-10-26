<?php

namespace App\Repository;

use App\Entity\TheatrePlay;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TheatrePlay>
 */
class TheatrePlayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TheatrePlay::class);
    }
    public function findAllOrderedByTitleDesc()
    {
        return $this->createQueryBuilder('tp')
            ->orderBy('tp.title', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // Method to get theatre plays ordered by duration in descending order
    public function findAllOrderedByDurationDesc()
    {
        return $this->createQueryBuilder('tp')
            ->orderBy('tp.duration', 'DESC')
            ->getQuery()
            ->getResult();
    }


    //    /**
    //     * @return TheatrePlay[] Returns an array of TheatrePlay objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TheatrePlay
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
