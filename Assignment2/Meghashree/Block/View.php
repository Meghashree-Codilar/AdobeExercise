<?php

namespace Assignment2\Meghashree\Block;

use Magento\Framework\View\Element\Template;
use Assignment2\Meghashree\Model\Meghashree;
use Assignment2\Meghashree\Api\MeghashreeRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree\CollectionFactory;

class View extends Template
{
    /**
     * @var CollectionFactory
     */
    protected CollectionFactory $collectionFactory;
    /**
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $searchCriteriaBuilder;
    /**
     * @var MeghashreeRepositoryInterface
     */
    private MeghashreeRepositoryInterface $meghashreeRepositoryInterface;


    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        MeghashreeRepositoryInterface $meghashreeRepositoryInterface,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
        $this->searchCriteriaBuilder=$searchCriteriaBuilder;
        $this->meghashreeRepositoryInterface=$meghashreeRepositoryInterface;
    }

    /**
     * @return employee[]
     */
    public function getAllEmployees()
    {
        $collection = $this->meghashreeRepositoryInterface->getList($this->searchCriteriaBuilder->create());
        return $collection->getItems();
    }
    public function getAddUrl()
    {
        return $this->getUrl('meghashree/test/Add');
    }
    public function getEditUrl()
    {
        return $this->getUrl('meghashree/test/form');
    }

    public function getUpdateValues()
    {
        $id=$this->getRequest()->getParam('entity_id');
        $collection = $this->meghashreeRepositoryInterface->getDataBYId($id);
        return $collection;
    }
}

