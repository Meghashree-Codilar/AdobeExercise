<?php

namespace Assignment2\Meghashree\Model;

use Assignment2\Meghashree\Api\AddressRepositoryInterface;
use Assignment2\Meghashree\Api\Data\AddressInterface;
use Assignment2\Meghashree\Api\Data\AddressExtensionInterface;
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

    public function setAddressId(AddressInterface $address)
    {
        $dataAttributes = $address->getDataAttributes();
        $dataAttributes = $dataAttributes ? $dataAttributes : $this->dataFactory->create();
    }
}
