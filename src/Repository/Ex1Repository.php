<?php

namespace App\Repository;

use App\Entity\Ex1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ex1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ex1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ex1[]    findAll()
 * @method Ex1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Ex1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ex1::class);
    }

    // /**
    //  * @return Ex1[] Returns an array of Ex1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ex1
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
