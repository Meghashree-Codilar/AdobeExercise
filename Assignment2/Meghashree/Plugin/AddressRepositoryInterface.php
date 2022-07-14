<?php
namespace Assignment2\Meghashree\Plugin;

use Assignment2\Meghashree\Model\MeghashreeRepository;
use Assignment2\Meghashree\Api\Data\DataExtensionFactory;

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
     * MeghashreeRepositoryInterface constructor.
     *
     * @param MeghashreeRepository $meghashreeRepository
     * @param DataExtensionFactory $dataExtensionFactory
     */

    public function __construct(
        MeghashreeRepository $meghashreeRepository,
        DataExtensionFactory $dataExtensionFactory
    ) {
        $this->meghashreeRepository=$meghashreeRepository;
        $this->dataExtensionFactory=$dataExtensionFactory;
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
        $Data=$this->meghashreeRepository->getId($data->getMeghaId());
        $extensionAttributes= $data->getExtensionAttributes();
        $AddressExtension = $extensionAttributes ? $extensionAttributes : $this->dataExtensionFactory->create();
        $AddressExtension->setMeghaId($Data);
        $data->setExtensionAttributes($AddressExtension);
        return $data;
    }
}
