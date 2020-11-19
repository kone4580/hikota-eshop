<?php

namespace Plugin\CategorySalesRankingBlock\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * ConfigRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConfigRepository extends EntityRepository
{
    /**
     * 設定情報を取得
     *
     * @return [type] [description]
     */
    public function getLastInsertData()
    {
        try {
            $qb = $this->createQueryBuilder('pdr')
                ->orderBy('pdr.id', 'DESC')
                ->setMaxResults(1);

            $Config = $qb->getQuery()->getSingleResult();

            return $Config;
        } catch (NoResultException $e) {
            return null;
        }
    }
}
