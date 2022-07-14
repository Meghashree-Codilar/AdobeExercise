<?php

namespace Assignment2\Meghashree\Api;

interface AddressRepositoryInterface
{
    /**
     * @param int $id
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function getId($id);

    /**
     * @param $meghaId
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function getByMeghaId($meghaId);

//    /**
//     * Function getCollection
//     *
//     * @return array
//     */
//
//   public function getCollection();

//    /**
//     * GET for Post api
//     * @param string $data
//     * @return string
//     */
//    public function getPost($data);
}
