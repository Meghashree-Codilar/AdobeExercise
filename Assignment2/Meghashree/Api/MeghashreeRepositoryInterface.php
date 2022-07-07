<?php

namespace Assignment2\Meghashree\Api;

interface MeghashreeRepositoryInterface
{
    /**
     * GetById
     *
     * @param Id $id
     * @return Model $model
     */
    public function getDataBYId($id);

    /**
     * Load value
     *
     * @param Value $value
     * @return Model $model
     */
    public function load($value);

    /**
     * Function create
     *
     * @return Model $model
     */
    public function create();
}
