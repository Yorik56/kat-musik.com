<?php

namespace App\Repository;

use App\Entity\CommentaireArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommentaireArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentaireArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentaireArticle[]    findAll()
 * @method CommentaireArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentaireArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentaireArticle::class);
    }

    // /**
    //  * @return CommentaireArticle[] Returns an array of CommentaireArticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommentaireArticle
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
