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

    /**
     * Select function
     *
     * @return $this
     */
    public function _initSelect()
    {
        $this->getSelect()
            ->from(
                ['main_table' => $this->getMainTable()]
            )->join(
                'meghashree_employee',
                'main_table.entity_id = meghashree_employee.megha_id',
                ['*']
            );
//        var_dump($this->getMainTable());
//        die();
        return $this;
    }
}
