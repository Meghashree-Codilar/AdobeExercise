<?php

namespace Assignment2\Meghashree\Model\ResourceModel\Meghashree;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Assignment2\Meghashree\Model\Meghashree as Model;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
    public function _initSelect()
    {
        $this->getSelect()
            ->from(
                ['main_table' => $this->getMainTable()]
            )
            ->join(
                'meghashree_employee',
                'main_table.entity_id = meghashree_employee.megha_id',
            array('*')
        );
//        var_dump($this->getMainTable());
//        die();
        return $this;
    }
}
