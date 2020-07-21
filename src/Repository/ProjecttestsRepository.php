<?php

namespace App\Repository;

use App\Entity\Projecttests;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Projecttests|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projecttests|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projecttests[]    findAll()
 * @method Projecttests[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjecttestsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projecttests::class);
    }

    // /**
    //  * @return Projecttests[] Returns an array of Projecttests objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Projecttests
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function getProjectTestsByProjectId(int $projectId)
    {
        $qb = $this->createQueryBuilder('pt');
        $qb
            ->andWhere($qb->expr()->eq('pt.projectid', ':projId'))
            ->setParameter('projId', $projectId);
        return $qb->getQuery()->getResult();
    }
}
