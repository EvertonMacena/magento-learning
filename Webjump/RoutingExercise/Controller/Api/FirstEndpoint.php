<?php


namespace Webjump\RoutingExercise\Controller\Api;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class FirstEndpoint extends \Magento\Framework\App\Action\Action
{
    /**
     * @var JsonFactory
     */
    private $resultJsonFactory;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory
    ) {
        $this->resultJsonFactory = $resultJsonFactory;

        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $data = [
            'success' => true,
            'message' => 'success webApi: ' . $this->getRequest()->getParam('data')
        ];

        return $this->resultJsonFactory->create($data);
    }
}
