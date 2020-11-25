<?php

namespace Plugin\Maker\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductMaker
 */
class ProductMaker extends \Eccube\Entity\AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $maker_url;

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
     * @var \Plugin\Maker\Entity\Maker
     */
    private $Maker;


    /**
     * Set id
     *
     * @param integer $id
     * @return ProductMaker
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set maker_url
     *
     * @param string $makerUrl
     * @return ProductMaker
     */
    public function setMakerUrl($makerUrl)
    {
        $this->maker_url = $makerUrl;

        return $this;
    }

    /**
     * Get maker_url
     *
     * @return string 
     */
    public function getMakerUrl()
    {
        return $this->maker_url;
    }

    /**
     * Set del_flg
     *
     * @param integer $delFlg
     * @return ProductMaker
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
     * @return ProductMaker
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
     * @return ProductMaker
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
     * Set Maker
     *
     * @param \Plugin\Maker\Entity\Maker $maker
     * @return ProductMaker
     */
    public function setMaker(\Plugin\Maker\Entity\Maker $maker = null)
    {
        $this->Maker = $maker;

        return $this;
    }

    /**
     * Get Maker
     *
     * @return \Plugin\Maker\Entity\Maker 
     */
    public function getMaker()
    {
        return $this->Maker;
    }
}
