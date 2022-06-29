<?php

namespace Meghashree\Assignment1\Plugin;

use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Customer\Model\Data\Customer as Subject;

class Customer
{
    /**
     * @var DateTime $dateTime
     */
    public DateTime $dateTime;

    /**
     * @param DateTime $dateTime
     * @return void
     */
    public function __construct(DateTime $dateTime)
    {
        $this->dateTime=$dateTime;
    }

    /**
     * After Get Method
     *
     * @param Subject $subject
     * @param $middlename
     * @return string
     */
    public function afterGetMiddlename(Subject $subject, $middlename)
    {
        $dateOfBirth=$subject->getDob();
        $now = time();
        $your_date = $this->dateTime->gmtTimestamp($dateOfBirth);
        $datediff = $now - $your_date;
        $resultOfDays=round($datediff / (60 * 60 * 24));
        $age= round($resultOfDays/365);
        return (string)$age;
    }
}
