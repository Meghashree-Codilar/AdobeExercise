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
interface AddressInterface extends ExtensibleDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const ID = 'id';
    const MEGHA_ID='megha_id';
    const STREET_ADDRESS='street_address';
    const CITY='city';
    const AREA='area';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    /**#@-*/

    /**
     * Get employee id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set employee id
     *
     * @param int $id
     * @return $int
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getMeghaId();

    /**
     * Set megha_id
     *
     * @param $megha_id
     */
    public function setMeghaId($megha_id);

    /**
     * @return string
     */
    public function getStreetAddress();

    /**
     * @param $street_address
     */
    public function setStreetAddress($street_address);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param $city
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getArea();

    /**
     * @param $area
     * @return mixed
     */
    public function setArea($area);

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
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Assignment2\Meghashree\Api\Data\AddressExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Assignment2\Meghashree\Api\Data\AddressExtensionInterface $dataAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Assignment2\Meghashree\Api\Data\AddressExtensionInterface $dataAttributes);
}
