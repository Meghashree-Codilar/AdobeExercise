<?php

namespace Assignment2\Meghashree\Model;

use Assignment2\Meghashree\Api\AddressRepositoryInterface;
use Assignment2\Meghashree\Model\Address as Model;
use Assignment2\Meghashree\Model\AddressFactory as ModelFactory;
use Assignment2\Meghashree\Model\ResourceModel\Address as ResourceModel;
use Assignment2\Meghashree\Model\ResourceModel\Address\Collection;
use Assignment2\Meghashree\Model\ResourceModel\Address\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchCriteria;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Assignment2\Meghashree\Api\Data\DataSearchResultInterfaceFactory;

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
     * @var CollectionProcessor
     */
    private $collectionProcessor;
    /**
     * @var DataSearchResultInterfaceFactory
     */
    private $dataSearchResultInterfaceFactory;
    /**
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param CollectionFactory $collectionFactory
     * @param CollectionProcessor $collectionProcessor
     * @param DataSearchResultInterfaceFactory $dataSearchResultInterfaceFactory
     */
    public function __construct(
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        CollectionFactory $collectionFactory,
        CollectionProcessor $collectionProcessor,
        DataSearchResultInterfaceFactory $dataSearchResultInterfaceFactory
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionFactory=$collectionFactory;
        $this->collectionProcessor=$collectionProcessor;
        $this->dataSearchResultInterfaceFactory=$dataSearchResultInterfaceFactory;
    }

    /**
     * GetById
     *
     * @param int $id
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function getId($id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id);
        return $model;
    }

    /**
     * GetMeghaId
     *
     * @param int $meghaId
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */

    public function getByMeghaId($meghaId)
    {
        $object=$this->modelFactory->create();
        $collection=$object->getCollection();
        $collection->addFieldToFilter('megha_id', $meghaId);
        return $collection->getData();
    }

    /**
     * Get collection
     *
     * @return Collection
     */
    public function getCollection()
    {
        return $this->collectionFactory->create();
    }

    /**
     * Getlist
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection= $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, ($collection));
        $searchResult=$this->dataSearchResultInterfaceFactory->create();
        $searchResult->setItems($collection->getItems());
        $searchResult->setTotalCount($collection->getSize());
        $searchResult->setSearchCriteria($searchCriteria);
        return $searchResult;
    }
}
