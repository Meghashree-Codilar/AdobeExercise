<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Assignment2\Meghashree\Model;

use Magento\Framework\Model\AbstractModel;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree as MeghashreeResourceModel;

/**
 * Class Meghashree extends AbstractModel
 */
class Meghashree extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(MeghashreeResourceModel::class);
    }
}
