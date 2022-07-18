<?php

namespace Assignment2\Meghashree\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Assignment2\Meghashree\Api\MeghashreeRepositoryInterface;

class Test extends Action
{
    /**
     * @var JsonFactory
     */
    private $jsonFactory;

    /**
     * @var MeghashreeRepositoryInterface
     */

    protected MeghashreeRepositoryInterface $meghashreeRepositoryInterface;

    /**
     * Test constructor.
     * @param Context $context
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        MeghashreeRepositoryInterface $meghashreeRepositoryInterface
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->meghashreeRepositoryInterface=$meghashreeRepositoryInterface;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result=$this->jsonFactory->create();
        $data = $this->meghashreeRepositoryInterface->getDataById(1);
//        echo "<pre>";
//        var_dump($data->getData());die();
        return $result->setData(['success'=>true,'data'=>$data]);
    }
}
