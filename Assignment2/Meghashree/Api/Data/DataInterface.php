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
    const ENTITY_ID = 'entity_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DOB = 'dob';
    const EMAIL = 'email';
    const NAME = 'name';
    const COUNTRY='country';
    const CONTACT='contact';
    const SALARY='employee salary';

    /**#@-*/

    /**
     * Get employee id
     *
     * @return int|null
     */
    public function getEntityId();

    /**
     * Set employee id
     *
     * @param int $id
     * @return $this
     */
    public function setEntityId($entity_id);
    /**
     * Get created at time
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created at time
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at time
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated at time
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);


    /**
     * Get date of birth
     */
    public function getDob();

    /**
     * Set date of birth
     *
     * @param string $dob
     * @return $date
     */
    public function setDob($dob);

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
     * @return $this
     */
    public function setEmail($email);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set name
     *
     * @param $name
     * @return string
     */
    public function setName($name);

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set country
     * @param $country
     * @return mixed
     */
    public function setCountry($country);

    /**
     * Get contact
     *
     * @return text
     */
    public function getContact();

    /**
     * Set contact
     *
     * @param $contact
     * @return text
     */
    public function setContact($contact);

    /**
     * Get salary
     * @return decimal
     */
    public function getEmployeeSalary();

    /**
     * @param $employeesalary
     * @return decimal
     */
    public function setEmployeeSalary($employeesalary);
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Assignment2\Meghashree\Api\Data\DataExtensionInterface|null
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
