<?php

namespace App\Repository;

use App\Entity\UrlConversion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UrlConversion|null find($id, $lockMode = null, $lockVersion = null)
 * @method UrlConversion|null findOneBy(array $criteria, array $orderBy = null)
 * @method UrlConversion[]    findAll()
 * @method UrlConversion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UrlConversionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UrlConversion::class);
    }

    // /**
    //  * @return UrlConversion[] Returns an array of UrlConversion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UrlConversion
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
