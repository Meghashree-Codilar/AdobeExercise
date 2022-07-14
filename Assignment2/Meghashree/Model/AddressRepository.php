<?php

namespace Assignment2\Meghashree\Model;

use Assignment2\Meghashree\Api\AddressRepositoryInterface;
use Assignment2\Meghashree\Model\Address as Model;
use Assignment2\Meghashree\Model\AddressFactory as ModelFactory;
use Assignment2\Meghashree\Model\ResourceModel\Address as ResourceModel;
use Assignment2\Meghashree\Model\ResourceModel\Address\Collection;
use Assignment2\Meghashree\Model\ResourceModel\Address\CollectionFactory;

class AddressRepository implements AddressRepositoryInterface
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
     * @param Id $id
     * @return int
     */
    public function getId($id)
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
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $value);
        return $model;
    }
    public function getByMeghaId($meghaId)
    {
        $object=$this->modelFactory->create();
        $collection=$object->getCollection();
        $collection->addFieldToFilter('megha_id', $meghaId);
        return $collection->getData();
    }



//    public function create()
//    {
//        return $this->modelFactory->create();
//    }
    public function getCollection()
    {
        return $this->collectionFactory->create();
    }
}
