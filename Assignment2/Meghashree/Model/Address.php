<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Assignment2\Meghashree\Model;

use Magento\Framework\Model\AbstractModel;
use Assignment2\Meghashree\Api\Data\AddressInterface;
use Assignment2\Meghashree\Model\ResourceModel\Address as ResourceModel;
use Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Class Address extends AbstractModel
 */
class Address extends AbstractExtensibleModel implements AddressInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inerhitDoc
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $id
     * @return AddressInterface
     */
    public function setId($id): AddressInterface
    {
        return $this->setData(self::ID, $id);
    }
    /**
     * @inerhitDoc
     * @return int
     */
    public function getMeghaId()
    {
        return $this->getData(self::MEGHA_ID);
    }

    /**
     * @param int $id
     * @return AddressInterface
     */
    public function setMeghaId($meghaId): AddressInterface
    {
        return $this->setData(self::MEGHA_ID, $meghaId);
    }

    /**
     * @return string
     */

    public function getStreetAddress()
    {
        return $this->getData(self::STREET_ADDRESS);
    }

    /**
     * @param string $streetaddress
     * @return AddressInterface
     */

    public function setStreetAddress($streetaddress): AddressInterface
    {
        return $this->setData(self::STREET_ADDRESS, $streetaddress);
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->getData(self::AREA);
    }

    /**
     * @param $area
     * @return AddressInterface
     */

    public function setArea($area): AddressInterface
    {
        return $this->setData(self::AREA, $area);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getData(self::CITY);
    }

    /**
     * @param $city
     * @return AddressInterface
     */

    public function setCity($city): AddressInterface
    {
        return $this->setData(self::CITY, $city);
    }

    /**
     * @return string
     */

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @param string $createdAt
     * @return AddressInterface
     */

    public function setCreatedAt($createdAt): AddressInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * @param string $updatedAt
     * @return AddressInterface
     */
    public function setUpdatedAt($updatedAt): AddressInterface
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inerhitDoc
     */
    public function setExtensionAttributes(\Assignment2\Meghashree\Api\Data\AddressExtensionInterface $dataAttributes)
    {
        return $this->_setExtensionAttributes($dataAttributes);
    }
}
