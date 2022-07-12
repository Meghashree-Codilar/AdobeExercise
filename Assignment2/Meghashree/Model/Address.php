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
    public function getId(): int
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
    public function getMeghaId(): int
    {
        return $this->getData(self::MEGHAID);
    }

    /**
     * @param int $id
     * @return AddressInterface
     */
    public function setMeghaId($meghaid): AddressInterface
    {
        return $this->setData(self::MEGHAID, $meghaid);
    }


    public function getStreetAddress(): string
    {
        return $this->getData(self::STREET_ADDRESS);
    }

    public function setStreetAddress(string $street_address): AddressInterface
    {
        return $this->setData(self::STREET_ADDRESS, $street_address);
    }
    public function getArea(): string
    {
        return $this->getData(self::AREA);
    }

    public function setArea(string $area): AddressInterface
    {
        return $this->setData(self::AREA, $area);
    }
    public function getCity(): string
    {
        return $this->getData(self::CITY);
    }

    public function setCity(string $city): AddressInterface
    {
        return $this->setData(self::CITY, $city);
    }


    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt): AddressInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): string
    {
        return $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt): AddressInterface
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
