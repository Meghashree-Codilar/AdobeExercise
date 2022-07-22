<?php

namespace Assignment6\Customer\CustomerData;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Element\Template;
use Magento\Customer\CustomerData\SectionSourceInterface;

class CustomerSection implements SectionSourceInterface
{
    /**
     * @var Session
     */
    private Session $session;

    /**
     * CustomerSection constructor.
     *
     * @param Session $session
     */

    public function __construct(
        Session $session
    ) {
        $this->session=$session;
    }
    /**
     * Get data
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getSectionData()
    {
        return [
            "msg" => $this->session->getCustomer()->getName(),
        ];
    }
}
