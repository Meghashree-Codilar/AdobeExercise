<?php
namespace Assignment2\Meghashree\Plugin;

use Assignment2\Meghashree\Model\MeghashreeRepository;
use Assignment2\Meghashree\Api\Data\DataExtensionFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;

class AddressRepositoryInterface
{
    /**
     * @var MeghashreeRepository
     */
    private MeghashreeRepository $meghashreeRepository;

    /**
     * @var DataExtensionFactory
     */
    private DataExtensionFactory $dataExtensionFactory;
    /**
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $searchCriteriaBuilder;

    /**
     * MeghashreeRepositoryInterface constructor.
     *
     * @param MeghashreeRepository $meghashreeRepository
     * @param DataExtensionFactory $dataExtensionFactory
     * @param  SearchCriteriaBuilder $searchCriteriaBuilder
     */

    public function __construct(
        MeghashreeRepository $meghashreeRepository,
        DataExtensionFactory $dataExtensionFactory,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->meghashreeRepository=$meghashreeRepository;
        $this->dataExtensionFactory=$dataExtensionFactory;
        $this->searchCriteriaBuilder=$searchCriteriaBuilder;
    }
    /**
     * Adding extension attribute first_name to getById
     * @param \Assignment2\Meghashree\Api\AddressRepositoryInterface $subject
     * @param \Assignment2\Meghashree\Api\Data\AddressInterface $data
     * @return \Assignment2\Meghashree\Api\Data\AddressInterface
     */
    public function afterGetId(
        \Assignment2\Meghashree\Api\AddressRepositoryInterface $subject,
        \Assignment2\Meghashree\Api\Data\AddressInterface $data
    ) {
        $filters = $this->searchCriteriaBuilder->addFilter('entity_id', $data->getMeghaId());
        $Data=$this->meghashreeRepository->getList($filters->create())->getItems();
        $extensionAttributes= $data->getExtensionAttributes();
        $AddressExtension = $extensionAttributes ? $extensionAttributes : $this->dataExtensionFactory->create();
        $AddressExtension->setMeghaId($Data);
        $data->setExtensionAttributes($AddressExtension);
        return $data;
    }
}
