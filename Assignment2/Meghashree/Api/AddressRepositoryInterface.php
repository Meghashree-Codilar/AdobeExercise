<?php

namespace Assignment2\Meghashree\Api;


interface AddressRepositoryInterface
{
    /**
     * @return string
     */
    public function getDataById($id);

    /**
     * @param value $value
     * @return bool true on success
     */
    public function load($value);

    /**
     * GET for Post api
     * @param string $data
     * @return string
     */
    public function getPost($data);
}
