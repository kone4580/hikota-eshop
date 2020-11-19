<?php

namespace Plugin\CategorySalesRankingBlock\Service;

use DateTime;
use Doctrine\ORM\EntityManager;
use Eccube\Application;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class SalesRankingService
{
    /**
     * @var Application
     */
    private $app;

    /**
     * [private description]
     * @var [type]
     */
    private $customer;

    /**
     * @var integer
     */
    private $intervalNumber = 1;

    /**
     * @var string
     */
    private $intervalUnit = 'year';

    /**
     * @var integer
     */
    private $limit = 10;

    /**
     * [private description]
     * @var string
     */
    private $aggregation_type = 'count';

    /**
     * [private description]
     * @var [type]
     */
    private $Categories = array();

    /**
     * SalesRankingService constructor
     *
     * @param [type] $app [description]
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    public function getData()
    {
        $app = $this->app;

        $exclude_order_status = array(
            $app['config']['order_processing'],
            $app['config']['order_cancel'],
            $app['config']['order_pending'],
        );

        $em = $app["orm.em"];

        $qb = $em->getRepository("Eccube\Entity\Product")
                ->createQueryBuilder("p")
                ->andWhere('p.Status = 1');

        $qb2 = $em->getRepository("Eccube\Entity\OrderDetail")
                ->createQueryBuilder("od")

                ->innerJoin("od.Order", "o")
                ->where("o.commit_date >= :interval")
                ->andWhere("od.Product = p.id")
                ->andWhere("o.OrderStatus NOT IN (:exclude_order_status)")
                ->groupBy("od.Product");

        switch($this->aggregation_type) {
            case 'count':
                $qb2->select('SUM(od.quantity)');
                break;
            case 'sales':
                $qb2->select('SUM(od.price * oi.quantity)');
                break;
            default:
                $qb2->select('SUM(od.quantity)');
        }

        $qb
                ->addSelect(sprintf('(%s) AS total', $qb2->getDql()))
                ->orderBy("total", "DESC")
                ->setMaxResults($this->limit);

        $qb
                ->setParameter('interval', $this->getInterval())
                ->setParameter('exclude_order_status', $exclude_order_status);

        if($this->getCategory()) {
            $qb
                    ->innerJoin('p.ProductCategories', 'pct')
                    ->andWhere($qb->expr()->in('pct.Category', ':Categories'))
                    ->setParameter('Categories', $this->getCategory());
        }


        $result = array();

        try {
            //dump($qb->getQuery()->getDql());
            $result = $qb
                    ->getQuery()
                    ->getResult();
            $result = array_filter($result, function($row) {
                return !is_null($row["total"]);
            });
        } catch (NoResultException $e) {
            return array();
        }

        return $result;
    }

    /**
     * [getInterval description]
     * @return [type] [description]
     */
    public function getInterval()
    {
        return new \DateTime(sprintf("- %d %s", $this->intervalNumber, $this->intervalUnit));
    }

    /**
     * [setCategory description]
     * @param EccubeEntityCategory $Category [description]
     */
    public function setCategory(\Eccube\Entity\Category $Category)
    {
        $this->Categories = $Category->getSelfAndDescendants();

        return $this;
    }

    public function getCategory()
    {
        return $this->Categories;
    }

    public function setCustomer($Customer)
    {
        $this->customer = $Customer;

        return $this;
    }

    /**
     * [setIntervalNumber description]
     * @param [type] $number [description]
     */
    public function setIntervalNumber($number)
    {
        $this->intervalNumber = $number;

        return $this;
    }

    /**
     * [setIntervalUnit description]
     * @param [type] $unit [description]
     */
    public function setIntervalUnit($unit)
    {
        $this->intervalUnit = $unit;

        return $this;
    }

    /**
     * [setLimit description]
     * @param [type] $limit [description]
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * [setAggregationType description]
     * @param [type] $aggregation_type [description]
     */
    public function setAggregationType($aggregation_type)
    {
        $this->aggregation_type = $aggregation_type;

        return $this;
    }
}
