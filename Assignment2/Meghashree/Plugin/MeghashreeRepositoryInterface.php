<?php

namespace Assignment2\Meghashree\Plugin;

use Assignment2\Meghashree\Api\Data\DataExtension;
use Assignment2\Meghashree\Api\Data\DataExtensionFactory;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree\CollectionFactory;
use Assignment2\Meghashree\Model\AddressRepository;
use Magento\Framework\Api\SearchCriteriaBuilder;

class MeghashreeRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    /**
     * @var AddressRepository
     */
    private AddressRepository $addressRepository;
    /**
     * @var DataExtensionFactory
     */
    private DataExtensionFactory $dataExtensionFactory;

    /**
     * @var DataExtension
     */
    private DataExtension $dataExtension;
    /**
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $searchCriteriaBuilder;

    /**
     * AddressGet constructor.
     * @param CollectionFactory $collectionFactory
     * @param AddressRepository $addressRepository
     * @param DataExtensionFactory $dataExtensionFactory
     * @param DataExtension $dataExtension
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        AddressRepository $addressRepository,
        DataExtensionFactory $dataExtensionFactory,
        DataExtension $dataExtension,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->addressRepository = $addressRepository;
        $this->dataExtensionFactory=$dataExtensionFactory;
        $this->dataExtension = $dataExtension;
        $this->searchCriteriaBuilder=$searchCriteriaBuilder;
    }

    /**
     * Adding extension attribute first_name to getById
     *
     * @param \Assignment2\Meghashree\Api\MeghashreeRepositoryInterface $subject
     * @param \Assignment2\Meghashree\Api\Data\DataInterface $data
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function afterGetDataById(
        \Assignment2\Meghashree\Api\MeghashreeRepositoryInterface $subject,
        \Assignment2\Meghashree\Api\Data\DataInterface $data
    ) {
        $filters = $this->searchCriteriaBuilder->addFilter('megha_id', $data->getEntityId());
        $Data=$this->addressRepository->getList($filters->create())->getItems();
        $extensionAttributes= $data->getExtensionAttributes();
        $EmployeeExtension = $extensionAttributes ? $extensionAttributes : $this->dataExtensionFactory->create();
        $EmployeeExtension->setMeghaAddress($Data);
        $data->setExtensionAttributes($EmployeeExtension);
        return $data;
    }
}
