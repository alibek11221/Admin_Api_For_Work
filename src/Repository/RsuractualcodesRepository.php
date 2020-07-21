<?php

namespace App\Repository;

use App\Entity\Rsuractualcodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rsuractualcodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rsuractualcodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rsuractualcodes[]    findAll()
 * @method Rsuractualcodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RsuractualcodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rsuractualcodes::class);
    }

    // /**
    //  * @return Rsuractualcodes[] Returns an array of Rsuractualcodes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rsuractualcodes
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
