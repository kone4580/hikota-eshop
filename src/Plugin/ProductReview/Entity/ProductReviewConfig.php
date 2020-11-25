<?php

namespace Plugin\ProductReview\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductReviewConfig
 */
class ProductReviewConfig extends \Eccube\Entity\AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $review_max = '5';

    /**
     * @var \DateTime
     */
    private $create_date;

    /**
     * @var \DateTime
     */
    private $update_date;

    /**
     * @var \Eccube\Entity\Master\CsvType
     */
    private $CsvType;


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
     * Set review_max
     *
     * @param integer $reviewMax
     * @return ProductReviewConfig
     */
    public function setReviewMax($reviewMax)
    {
        $this->review_max = $reviewMax;

        return $this;
    }

    /**
     * Get review_max
     *
     * @return integer 
     */
    public function getReviewMax()
    {
        return $this->review_max;
    }

    /**
     * Set create_date
     *
     * @param \DateTime $createDate
     * @return ProductReviewConfig
     */
    public function setCreateDate($createDate)
    {
        $this->create_date = $createDate;

        return $this;
    }

    /**
     * Get create_date
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set update_date
     *
     * @param \DateTime $updateDate
     * @return ProductReviewConfig
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;

        return $this;
    }

    /**
     * Get update_date
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Set CsvType
     *
     * @param \Eccube\Entity\Master\CsvType $csvType
     * @return ProductReviewConfig
     */
    public function setCsvType(\Eccube\Entity\Master\CsvType $csvType = null)
    {
        $this->CsvType = $csvType;

        return $this;
    }

    /**
     * Get CsvType
     *
     * @return \Eccube\Entity\Master\CsvType 
     */
    public function getCsvType()
    {
        return $this->CsvType;
    }
}
