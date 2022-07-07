<?php

namespace Assignment2\Meghashree\Model;

use Assignment2\Meghashree\Api\MeghashreeRepositoryInterface;
use Assignment2\Meghashree\Model\Meghashree as Model;
use Assignment2\Meghashree\Model\MeghashreeFactory as ModelFactory;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree as ResourceModel;

class MeghashreeRepository implements MeghashreeRepositoryInterface
{
    /**
     * @var ModelFactory
     */
    private $modelFactory;
    /**
     * @var ResourceModel
     */
    private $resourceModel;
    /**
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     */
    public function __construct(
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
    }

    /**
     * GetById
     *
     * @param Id $id
     * @return Model $model
     */
    public function getDataBYId($id)
    {
        return $this->load($id);
    }

    /**
     * Load value
     *
     * @param Value $value
     * @return Model $model
     */
    public function load($value)
    {
        $model = $this->create();
        $this->resourceModel->load($model, $value);
        return $model->getData();
    }

    /**
     * Create function
     *
     * @return Model $model
     */

    public function create()
    {
        return $this->modelFactory->create();
    }
}
