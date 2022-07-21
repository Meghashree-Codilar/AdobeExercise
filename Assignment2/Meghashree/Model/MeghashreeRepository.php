<?php

namespace Assignment2\Meghashree\Model;

use Assignment2\Meghashree\Api\MeghashreeRepositoryInterface;
use Assignment2\Meghashree\Model\Meghashree as Model;
use Assignment2\Meghashree\Model\MeghashreeFactory as ModelFactory;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree as ResourceModel;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree\Collection;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchCriteria;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Assignment2\Meghashree\Api\Data\DataSearchResultInterfaceFactory;

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
     * @param int $entityId
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function getDataById($entityId)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $entityId);
        return $model;
    }

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

    /**
     * GetId
     *
     * @param int $id
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function getId($id)
    {
        $model=$this->modelFactory->create();
        $collection=$model->getCollection();
        $collection->addFieldToFilter('id', $id);
        return $collection->getData();
    }

    /**
     * Getlist function
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

    /**
     * Save function
     *
     * @param string $data
     * @inerhitDoc
     */
    public function saveData($data)
    {
        $model = $this->modelFactory->create();
        $model->setName($data['name'] ?? null);
        $model->setEmail($data['email'] ?? null);
        $model->setDate($data['date'] ?? null);
        $model->setContact($data['contact'] ?? null);
        $model->setCountry($data['country'] ?? null);
        $model->setEmployeeSalary($data['employee_salary'] ?? null);
        $this->resourceModel->save($model);
        return "success";
    }
}
