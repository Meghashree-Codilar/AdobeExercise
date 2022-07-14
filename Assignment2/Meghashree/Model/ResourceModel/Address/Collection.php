<?php

namespace Assignment2\Meghashree\Model\ResourceModel\Address;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Assignment2\Meghashree\Model\Address as Model;
use Assignment2\Meghashree\Model\ResourceModel\Address as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
