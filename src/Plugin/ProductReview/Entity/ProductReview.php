<?php

namespace Plugin\ProductReview\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductReview
 */
class ProductReview extends \Eccube\Entity\AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $reviewer_name;

    /**
     * @var string
     */
    private $reviewer_url;

    /**
     * @var integer
     */
    private $recommend_level;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $del_flg = '0';

    /**
     * @var \DateTime
     */
    private $create_date;

    /**
     * @var \DateTime
     */
    private $update_date;

    /**
     * @var \Eccube\Entity\Product
     */
    private $Product;

    /**
     * @var \Eccube\Entity\Master\Sex
     */
    private $Sex;

    /**
     * @var \Eccube\Entity\Customer
     */
    private $Customer;

    /**
     * @var \Eccube\Entity\Master\Disp
     */
    private $Status;


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
     * Set reviewer_name
     *
     * @param string $reviewerName
     * @return ProductReview
     */
    public function setReviewerName($reviewerName)
    {
        $this->reviewer_name = $reviewerName;

        return $this;
    }

    /**
     * Get reviewer_name
     *
     * @return string 
     */
    public function getReviewerName()
    {
        return $this->reviewer_name;
    }

    /**
     * Set reviewer_url
     *
     * @param string $reviewerUrl
     * @return ProductReview
     */
    public function setReviewerUrl($reviewerUrl)
    {
        $this->reviewer_url = $reviewerUrl;

        return $this;
    }

    /**
     * Get reviewer_url
     *
     * @return string 
     */
    public function getReviewerUrl()
    {
        return $this->reviewer_url;
    }

    /**
     * Set recommend_level
     *
     * @param integer $recommendLevel
     * @return ProductReview
     */
    public function setRecommendLevel($recommendLevel)
    {
        $this->recommend_level = $recommendLevel;

        return $this;
    }

    /**
     * Get recommend_level
     *
     * @return integer 
     */
    public function getRecommendLevel()
    {
        return $this->recommend_level;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ProductReview
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return ProductReview
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set del_flg
     *
     * @param integer $delFlg
     * @return ProductReview
     */
    public function setDelFlg($delFlg)
    {
        $this->del_flg = $delFlg;

        return $this;
    }

    /**
     * Get del_flg
     *
     * @return integer 
     */
    public function getDelFlg()
    {
        return $this->del_flg;
    }

    /**
     * Set create_date
     *
     * @param \DateTime $createDate
     * @return ProductReview
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
     * @return ProductReview
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
     * Set Product
     *
     * @param \Eccube\Entity\Product $product
     * @return ProductReview
     */
    public function setProduct(\Eccube\Entity\Product $product)
    {
        $this->Product = $product;

        return $this;
    }

    /**
     * Get Product
     *
     * @return \Eccube\Entity\Product 
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set Sex
     *
     * @param \Eccube\Entity\Master\Sex $sex
     * @return ProductReview
     */
    public function setSex(\Eccube\Entity\Master\Sex $sex = null)
    {
        $this->Sex = $sex;

        return $this;
    }

    /**
     * Get Sex
     *
     * @return \Eccube\Entity\Master\Sex 
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Set Customer
     *
     * @param \Eccube\Entity\Customer $customer
     * @return ProductReview
     */
    public function setCustomer(\Eccube\Entity\Customer $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * Get Customer
     *
     * @return \Eccube\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * Set Status
     *
     * @param \Eccube\Entity\Master\Disp $status
     * @return ProductReview
     */
    public function setStatus(\Eccube\Entity\Master\Disp $status = null)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * Get Status
     *
     * @return \Eccube\Entity\Master\Disp 
     */
    public function getStatus()
    {
        return $this->Status;
    }
}
