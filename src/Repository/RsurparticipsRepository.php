<?php

namespace App\Repository;

use App\Entity\Rsurparticips;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use function Doctrine\ORM\QueryBuilder;

/**
 * @method Rsurparticips|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rsurparticips|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rsurparticips[]    findAll()
 * @method Rsurparticips[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RsurparticipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rsurparticips::class);
    }

    // /**
    //  * @return Rsurparticips[] Returns an array of Rsurparticips objects
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
    public function findOneBySomeField($value): ?Rsurparticips
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findByNameParts($surname = '', $name = '', $secondName = ''): ?array
    {
        $qb = $this->createQueryBuilder('r');
        if ($name != '') {
            $qb->Where($qb->expr()->like('r.name', ':name'))
                ->setParameter('name', "%$name%");
        }
        if ($surname != '') {
            $qb->andWhere($qb->expr()->like('r.surname', ':surname'))
                ->setParameter('surname', "%$surname%");
        }
        if ($secondName != '') {
            $qb->andWhere($qb->expr()->like('r.secondname', ':secondname'))
                ->setParameter('secondname', "%$secondName%");
        }
        return $qb->getQuery()->getResult();
    }

    public function findBySchoolId($schoolId): ?array
    {
        return $this->createQueryBuilder('r')
            ->where('r.school=:school')
            ->setParameter('school', $schoolId)
            ->getQuery()->getResult();
    }
}
