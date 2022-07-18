<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Assignment2\Meghashree\Model;

use Assignment2\Meghashree\Api\Data\DataExtensionInterface;
use Assignment2\Meghashree\Api\Data\DataInterface;
use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Framework\Model\AbstractModel;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree as MeghashreeResourceModel;

/**
 * Class Meghashree extends AbstractModel
 */
class Meghashree extends AbstractExtensibleModel implements DataInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(MeghashreeResourceModel::class);
    }
    /**
     * @inerhitDoc
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @param int $entityId
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setEntityId($entityId): DataInterface
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }
    /**
     * @return mixed|null
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * @param bool $value
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setIsActive(bool $value): DataInterface
    {
        return $this->setData(self::IS_ACTIVE, $value);
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->getData(self::DOB);
    }

    /**
     * Set date of birth
     *
     * @param string $dob
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setDate($dob): DataInterface
    {
        return $this->setData(self::DOB, $dob);
    }
    /**
     * Get email address
     *
     * @return string
     */
    public function getEmail():string
    {
        return $this->getData(self::EMAIL);
    }
    /**
     * Set email address
     *
     * @param string $email
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setEmail($email):DataInterface
    {
        return $this->setData(self::EMAIL, $email);
    }
    /**
     * Get name
     *
     * @return string
     */
    public function getName():string
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set name
     *
     * @param $name
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setName($name):DataInterface
    {
        return $this->setData(self::NAME, $name);
    }
    /**
     * Get country
     *
     * @return string
     */
    public function getCountry():string
    {
        return $this->getData(self::COUNTRY);
    }

    /**
     * Set country
     * @param $country
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setCountry($country):DataInterface
    {
        return $this->setData(self::COUNTRY, $country);
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->getData(self::CONTACT);
    }
    /**
     * Set contact
     *
     * @param $contact
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setContact($contact):DataInterface
    {
        return $this->setData(self::CONTACT, $contact);
    }
    /**
     * Get salary
     * @return float
     */
    public function getEmployeeSalary()
    {
        return $this->getData(self::EMPLOYEESALARY);
    }

    /**
     * @param $employeesalary
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setEmployeeSalary($employeesalary):DataInterface
    {
        return $this->setData(self::EMPLOYEESALARY, $employeesalary);
    }
    /**
     * @return DataInterface
     */
    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @param $date
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setCreatedAt($date): DataInterface
    {
        return $this->setData(self::CREATED_AT, $date);
    }
    /**
     * @return DataInterface
     */
    public function getUpdatedAt(): string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * @param $date
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function setUpdatedAt($date): DataInterface
    {
        return $this->setData(self::UPDATED_AT, $date);
    }

/**
 * @inheritDoc
 */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

/**
 * @inheritDoc
 *
 * @return $this
 */
    public function setExtensionAttributes(\Assignment2\Meghashree\Api\Data\DataExtensionInterface $dataAttributes)
    {
        return $this->_setExtensionAttributes($dataAttributes);
    }
}
