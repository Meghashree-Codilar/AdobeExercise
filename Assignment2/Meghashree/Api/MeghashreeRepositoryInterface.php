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

    /**
     * @param $id
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function getId($id);

    /**
     * Function getCollection
     *
     * @return array
     */

    public function getCollection();
}
