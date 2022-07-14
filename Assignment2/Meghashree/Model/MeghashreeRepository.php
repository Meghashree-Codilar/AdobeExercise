<?php

namespace Assignment2\Meghashree\Model;

use Assignment2\Meghashree\Api\MeghashreeRepositoryInterface;
use Assignment2\Meghashree\Model\Meghashree as Model;
use Assignment2\Meghashree\Model\MeghashreeFactory as ModelFactory;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree as ResourceModel;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree\Collection;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree\CollectionFactory;

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
     * @var CollectionFactory
     */
    private $collectionFactory;
    /**
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        CollectionFactory $collectionFactory
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionFactory=$collectionFactory;
    }

    /**
     * GetById
     *
     * @param int $entityId
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function getDataById($entityId)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $entityId);
        return $model;
    }

//    /**
//     * Load value
//     *
//     * @param Value $value
//     * @return Model $model
//     */
//    public function load($value)
//    {
//        $model = $this->create();
//        $this->resourceModel->load($model, $value);
//        return $model->getData();
//    }

//    /**
//     * Create function
//     *
//     * @return Model $model
//     */

//    public function create()
//    {
//        return $this->modelFactory->create();
//    }

    /**
     * Collection
     *
     * @return array
     */
    public function getCollection()
    {
        $collection= $this->collectionFactory->create();
        return $collection->getData();
    }
}
