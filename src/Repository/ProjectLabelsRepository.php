<?php

namespace App\Repository;

use App\Entity\ProjectLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectLabels[]    findAll()
 * @method ProjectLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectLabels::class);
    }

    // /**
    //  * @return ProjectLabels[] Returns an array of ProjectLabels objects
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
    public function findOneBySomeField($value): ?ProjectLabels
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
