<?php

namespace Assignment2\Meghashree\Plugin;

use Assignment2\Meghashree\Api\Data\DataExtension;
use Assignment2\Meghashree\Api\Data\DataExtensionFactory;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree\CollectionFactory;
use Assignment2\Meghashree\Model\AddressRepository;

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
     * AddressGet constructor.
     * @param CollectionFactory $collectionFactory
     * @param AddressRepository $addressRepository
     * @param DataExtensionFactory $dataExtensionFactory
     * @param DataExtension $dataExtension
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        AddressRepository $addressRepository,
        DataExtensionFactory $dataExtensionFactory,
        DataExtension $dataExtension
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->addressRepository = $addressRepository;
        $this->dataExtensionFactory=$dataExtensionFactory;
        $this->dataExtension = $dataExtension;
    }

    /**
     * Adding extension attribute first_name to getById
     * @param \Assignment2\Meghashree\Api\MeghashreeRepositoryInterface $subject
     * @param \Assignment2\Meghashree\Api\Data\DataInterface $data
     * @return \Assignment2\Meghashree\Api\Data\DataInterface
     */
    public function afterGetDataById(
        \Assignment2\Meghashree\Api\MeghashreeRepositoryInterface $subject,
        \Assignment2\Meghashree\Api\Data\DataInterface $data
    ) {
        $addressData=$this->addressRepository->getByMeghaId($data->getEntityId());
        $extensionAttributes= $data->getExtensionAttributes();
        $EmployeeExtension = $extensionAttributes ? $extensionAttributes : $this->dataExtensionFactory->create();
        $EmployeeExtension->setMeghaAddress($addressData);
        $data->setExtensionAttributes($EmployeeExtension);
        return $data;
    }
}
