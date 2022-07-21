<?php

namespace Assignment2\Meghashree\Api;

use Assignment2\Meghashree\Api\Data\DataInterface;

interface MeghashreeRepositoryInterface
{
    /**
     * GetById
     *
     * @param int $entityId
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function getDataById($entityId);

    /**
     * GetId
     *
     * @param int $id
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function getId($id);

    /**
     * Function getCollection
     *
     * @return array
     */
    public function getCollection();

    /**
     * Getlist
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return mixed
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * SaveFunction
     *
     * @param \Assignment2\Meghashree\Api\Data\DataInterface $data
     * @return string
     */
    public function saveData($data);
}
//{
//    "data":{
//    "is_active": false,
//        "date": "1999-09-09",
//        "email": "ulla",
//        "name": "yench",
//        "country": "kerala",
//        "contact": "8548811598",
//        "employee_salary": 999.9
//    }
//}
