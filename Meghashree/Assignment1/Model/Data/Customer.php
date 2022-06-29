<?php

namespace Meghashree\Assignment1\Model\Data;

use Magento\Customer\Api\CustomerMetadataInterface;
use Magento\Framework\Api\AttributeValueFactory;
use Magento\Framework\Api\ExtensionAttributesFactory;
use Magento\Framework\Stdlib\DateTime\DateTime;

class Customer extends \Magento\Customer\Model\Data\Customer
{
    /**
     * @var DateTime $dateTime
     */
    public DateTime $dateTime;

    /**
     * Customer constructor.
     * @param AttributeValueFactory $attributeValueFactory
     * @param CustomerMetadataInterface $metadataService
     * @param ExtensionAttributesFactory $extensionFactory
     * @param DateTime $dateTime
     * @param array $data
     */


    public function __construct(
        AttributeValueFactory $attributeValueFactory,
        CustomerMetadataInterface $metadataService,
        ExtensionAttributesFactory $extensionFactory,
        DateTime $dateTime,
        $data = []
    )
    {
        $this->dateTime = $dateTime;
        parent::__construct($extensionFactory, $attributeValueFactory, $metadataService, $data);
    }


    /**
     * GetMiddleName
     * @return int|string|null
     */

    public function getMiddlename()
    {
        return $this->age();
    }


    public function age(): int
    {
        $dob=$this->getDob();
        $now = time();
        $your_date = $this->dateTime->gmtTimestamp($dob);
        $datediff = $now - $your_date;
        $result=round($datediff / (60 * 60 * 24));
        return round($result/365);
    }
}

