<?php


namespace Webjump\RoutingExercise\Controller\Json;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class JsonReturn extends Action
{

    /**
     * @var JsonFactory
     */
    private $resultJsonFactory;

    /**
     * JsonReturn constructor.
     * @param Context $context
     * @param JsonFactory $resultJsonFactory
     */
    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory
    ) {
        $this->resultJsonFactory = $resultJsonFactory;

        parent::__construct($context);
    }


    /**
     * @return ResponseInterface|\Magento\Framework\Controller\Result\Json|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = [
            "name" => "Everton Macena",
            "companny" => "Webjump"
        ];

        $resultJson = $this->resultJsonFactory->create();
        return $resultJson->setData([
            'success' => true,
            'message' => __('Your message here'),
            'data' => $data
        ]);
    }
}
