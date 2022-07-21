<?php

namespace Assignment2\Meghashree\Api;

interface AddressRepositoryInterface
{
    /**
     * Getid
     *
     * @param int $id
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function getId($id);

    /**
     * GetMeghaId
     *
     * @param int $meghaId
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function getByMeghaId($meghaId);

    /**
     * FUnction Getlist
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return mixed
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
