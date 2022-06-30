<?php

namespace Meghashree\Assignment1\Plugin;

use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Customer\Api\Data\CustomerInterface as Subject;

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
     * @param String $middlename
     * @return string
     */
    public function afterGetMiddlename(Subject $subject, $middlename)
    {
        $dob=$subject->getDob();
        $current = time();
        $birth_date = $this->dateTime->gmtTimestamp($dob);
        $diff = $current - $birth_date;
        $result=(int)($diff / (60 * 60 * 24));
        return (int)($result/365);
    }

    /**
     *
     * @param \Magento\Customer\Api\Data\CustomerInterface $subject
     * @param string $middlename
     * @return array
     */
    public function beforeSetMiddlename(\Magento\Customer\Api\Data\CustomerInterface $subject, $middlename)
    {
        $dob=$subject->getDob();
        $current = time();
        $birth_date = $this->dateTime->gmtTimestamp($dob);
        $diff = $current - $birth_date;
        $result=(int)($diff / (60 * 60 * 24));
        $middlename=(int)($result/365);
        return [$middlename];
    }
}
