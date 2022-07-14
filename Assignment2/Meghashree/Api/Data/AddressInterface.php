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
    public const ID = 'id';
    public const MEGHA_ID='megha_id';
    public const STREET_ADDRESS='street_address';
    public const CITY='city';
    public const AREA='area';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * Get megha id
     *
     * @return int
     */
    public function getId();

    /**
     * Set megha id
     *
     * @param int $id
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function setId($id):AddressInterface;

    /**
     * @return int
     */
    public function getMeghaId();

    /**
     * Set megha_id
     *
     * @param int $meghaId
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function setMeghaId($meghaId):AddressInterface;

    /**
     * @return string
     */
    public function getStreetAddress();

    /**
     * @param string $streetaddress
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function setStreetAddress($streetaddress):AddressInterface;

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function setCity($city):AddressInterface;

    /**
     * @return string
     */
    public function getArea();

    /**
     * @param string $area
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function setArea($area):AddressInterface;

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
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function setCreatedAt($createdAt):AddressInterface;

    /**
     * Get updated at time
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * Set updated at time
     *
     * @param string $updatedAt
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function setUpdatedAt($updatedAt):AddressInterface;
}
