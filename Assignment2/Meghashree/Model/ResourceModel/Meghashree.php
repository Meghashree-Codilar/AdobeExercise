<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Assignment2\Meghashree\Model\ResourceModel;

/**
 * Class Meghashree extends AbstractDb
 */
class Meghashree extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init('Assignment2_Meghashree', 'entity_id');
    }
}
