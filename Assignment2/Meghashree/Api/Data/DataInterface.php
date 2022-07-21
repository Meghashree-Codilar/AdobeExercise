<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Assignment2\Meghashree\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Customer entity interface for API handling.
 *
 * @api
 * @since 100.0.2
 */
interface DataInterface extends ExtensibleDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    public const ENTITY_ID = 'entity_id';
    public const IS_ACTIVE  = 'is_active';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const DOB = 'date';
    public const EMAIL = 'email';
    public const NAME = 'name';
    public const COUNTRY='country';
    public const CONTACT='contact';
    public const EMPLOYEESALARY='employee_salary';
    /**
     * Get employee id
     *
     * @return int
     */
    public function getEntityId():int;

    /**
     * Set employee id
     *
     * @param int $entityId
     * @return DataInterface
     */
    public function setEntityId($entityId):DataInterface;

    /**
     * Function Isactive
     *
     * @return bool
     */
    public function getIsActive();

    /**
     * Set IsActive
     *
     * @param bool $value
     * @return DataInterface
     */
    public function setIsActive(bool $value):DataInterface;
    /**
     * Get created at time
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Set created at time
     *
     * @param string $createdAt
     * @return DataInterface
     */
    public function setCreatedAt($createdAt):DataInterface;

    /**
     * Get updated at time
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * Set updated at time
     *
     * @param  string $updatedAt
     * @return DataInterface
     */
    public function setUpdatedAt($updatedAt):DataInterface;
    /**
     * Get date of birth
     *
     * @return string
     */
    public function getDate();

    /**
     * Set date of birth
     *
     * @param string $dob
     * @return DataInterface
     */
    public function setDate($dob):DataInterface;

    /**
     * Get email address
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set email address
     *
     * @param string $email
     * @return DataInterface
     */
    public function setEmail($email):DataInterface;

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set name
     *
     * @param string $name
     * @return DataInterface
     */
    public function setName($name):DataInterface;

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set country
     *
     * @param string $country
     * @return DataInterface
     */
    public function setCountry($country):DataInterface;

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact();

    /**
     * Set contact
     *
     * @param string $contact
     * @return DataInterface
     */
    public function setContact($contact):DataInterface;

    /**
     * Get salary
     *
     * @return float
     */
    public function getEmployeeSalary();

    /**
     * Set employeesalary
     *
     * @param float $employeesalary
     * @return DataInterface
     */
    public function setEmployeeSalary($employeesalary):DataInterface;

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Assignment2\Meghashree\Api\Data\DataExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Assignment2\Meghashree\Api\Data\DataExtensionInterface $dataAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Assignment2\Meghashree\Api\Data\DataExtensionInterface $dataAttributes);
}
