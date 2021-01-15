<?php

namespace App\Repository;

use App\Entity\Ex2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ex2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ex2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ex2[]    findAll()
 * @method Ex2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Ex2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ex2::class);
    }

    // /**
    //  * @return Ex2[] Returns an array of Ex2 objects
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
    public function findOneBySomeField($value): ?Ex2
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
