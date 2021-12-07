<?php

namespace App\Repository;

use App\Entity\Workspaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Workspaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method Workspaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method Workspaces[]    findAll()
 * @method Workspaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkspacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Workspaces::class);
    }

    // /**
    //  * @return Workspaces[] Returns an array of Workspaces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Workspaces
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
