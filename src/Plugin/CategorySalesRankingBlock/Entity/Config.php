<?php

namespace Plugin\CategorySalesRankingBlock\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 */
class Config extends \Eccube\Entity\AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $interval_number;

    /**
     * @var string
     */
    private $interval_unit;

    /**
     * @var integer
     */
    private $num_items;

    /**
     * @var string
     */
    private $aggregation_type;

    /**
     * @var \Eccube\Entity\Category
     */
    private $Category;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set interval_number
     *
     * @param integer $intervalNumber
     * @return Config
     */
    public function setIntervalNumber($intervalNumber)
    {
        $this->interval_number = $intervalNumber;

        return $this;
    }

    /**
     * Get interval_number
     *
     * @return integer 
     */
    public function getIntervalNumber()
    {
        return $this->interval_number;
    }

    /**
     * Set interval_unit
     *
     * @param string $intervalUnit
     * @return Config
     */
    public function setIntervalUnit($intervalUnit)
    {
        $this->interval_unit = $intervalUnit;

        return $this;
    }

    /**
     * Get interval_unit
     *
     * @return string 
     */
    public function getIntervalUnit()
    {
        return $this->interval_unit;
    }

    /**
     * Set num_items
     *
     * @param integer $numItems
     * @return Config
     */
    public function setNumItems($numItems)
    {
        $this->num_items = $numItems;

        return $this;
    }

    /**
     * Get num_items
     *
     * @return integer 
     */
    public function getNumItems()
    {
        return $this->num_items;
    }

    /**
     * Set aggregation_type
     *
     * @param string $aggregationType
     * @return Config
     */
    public function setAggregationType($aggregationType)
    {
        $this->aggregation_type = $aggregationType;

        return $this;
    }

    /**
     * Get aggregation_type
     *
     * @return string 
     */
    public function getAggregationType()
    {
        return $this->aggregation_type;
    }

    /**
     * Set Category
     *
     * @param \Eccube\Entity\Category $category
     * @return Config
     */
    public function setCategory(\Eccube\Entity\Category $category = null)
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * Get Category
     *
     * @return \Eccube\Entity\Category 
     */
    public function getCategory()
    {
        return $this->Category;
    }
}
