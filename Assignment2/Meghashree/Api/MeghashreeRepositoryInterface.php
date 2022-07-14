<?php

namespace Assignment2\Meghashree\Api;

interface MeghashreeRepositoryInterface
{
    /**
     * GetById
     *
     * @param int $entityId
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function getDataById($entityId);

//    /**
//     * Load value
//     *
//     * @param Value $value
//     * @return Model $model
//     */
//    public function load($value);
//
//    /**
//     * Function create
//     *
//     * @return Model $model
//     */
//    public function create();

    /**
     * Function getCollection
     *
     * @return array
     */

    public function getCollection();
}
