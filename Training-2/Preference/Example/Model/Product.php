<?php

namespace Preference\Example\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        $changeName = $this->getData('name') . ' PreferenceName ';
        return  $changeName;
    }

}
