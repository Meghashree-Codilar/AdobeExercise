<?php

namespace Assignment2\Meghashree\Controller\Test;

use Magento\Framework\App\Action\Action;
use Assignment2\Meghashree\Model\MeghashreeFactory as ModelFactory;
use Assignment2\Meghashree\Model\ResourceModel\Meghashree as ResourceModel;
use Magento\Framework\App\Action\Context;

class Add extends Action
{
    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    /**
     * @var ResourceModel
     */
    protected $resourceModel;

    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    )
    {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
    }

    public function execute()
    {
        $dataEmployee = $this->modelFactory->create();
        $data = $this->getRequest()->getParams();
        $datamodel=$dataEmployee->load($data['entity_id']);
        $dataEmployee->setName($data['name'] ?? null);
        $dataEmployee->setEmail($data['email'] ?? null);
        $dataEmployee->setIsActive($data['is_active'] ?? 0);
        $dataEmployee->setContact($data['contact'] ?? null);
        $dataEmployee->setCountry($data['country'] ?? null);
        $dataEmployee->setDate($data['date'] ?? null);
        $dataEmployee->setEmployeeSalary($data['employee salary'] ?? null);
        $this->resourceModel->save($dataEmployee);
        $this->messageManager->addSuccessMessage(__('Employee %1 saved successfully', $dataEmployee->getName()));
        return $this->resultRedirectFactory->create()->setPath('meghashree/test/view');
    }
}
