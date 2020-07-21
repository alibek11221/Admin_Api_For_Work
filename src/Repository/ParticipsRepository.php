<?php

namespace App\Repository;

use App\Entity\Particips;
use App\Entity\Participtests;
use App\Entity\Projecttests;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Particips|null find($id, $lockMode = null, $lockVersion = null)
 * @method Particips|null findOneBy(array $criteria, array $orderBy = null)
 * @method Particips[]    findAll()
 * @method Particips[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Particips::class);
    }

    // /**
    //  * @return Particips[] Returns an array of Particips objects
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
    public function findOneBySomeField($value): ?Particips
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    private function getCountBaseQb($id): QueryBuilder
    {
        $qb = $this->createQueryBuilder('p');
        $qb
                ->select($qb->expr()->count('p'))
                ->innerJoin(Participtests::class, 'pt', Join::WITH, $qb->expr()->eq('pt.participid', 'p.id'))
                ->innerJoin(Projecttests::class, 'proj', Join::WITH, $qb->expr()->eq('proj.id', 'pt.projecttestid'))
                ->Where('p.school != 0000')
                ->andWhere('proj.id = :id')
                ->setParameter('id', $id);
        return $qb;
    }

    /**
     * @param int $id
     * @return array
     * @throws NoResultException
     * @throws NonUniqueResultException
     */
    public function getCountOfParticipsByProjectTestId(int $id)
    {
        $qb = $this->getCountBaseQb($id);
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NoResultException $e) {
            throw $e;
        } catch (NonUniqueResultException $e) {
            throw $e;
        }
    }

    /**
     * @param int $id
     * @param int $grade5
     * @return int|mixed|string
     * @throws NoResultException
     * @throws NonUniqueResultException
     */
    public function getCountOfParticipsByProjectTestIdWithGrade5(int $id, int $grade5)
    {
        $qb = $this->getCountBaseQb($id);
        $qb
                ->andWhere($qb->expr()->eq('pt.grade5', ':grade5'))
                ->setParameter('grade5', $grade5);
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NoResultException $e) {
            throw $e;
        } catch (NonUniqueResultException $e) {
            throw $e;
        }
    }
}
