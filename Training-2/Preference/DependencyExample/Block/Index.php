<?php

namespace Preference\DependencyExample\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Preference\DependencyExample\Model\Example;

class Index extends Template
{
    protected Example $example;

    public function __construct(Template\Context $context,
                                Example $example,
                                array $data = []
    ) {
        parent::__construct($context, $data);
        $this->example=$example;
    }
    public function getExample():Example
    {
        return $this->example;
    }
}

