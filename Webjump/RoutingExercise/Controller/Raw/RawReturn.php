<?php


namespace Webjump\RoutingExercise\Controller\Raw;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;

class RawReturn extends Action
{

    /**
     * @var RawFactory
     */
    private $resultRawFactory;

    /**
     * RawReturn constructor.
     * @param Context $context
     * @param RawFactory $resultRawFactory
     */
    public function __construct(
        Context $context,
        RawFactory $resultRawFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;

        parent::__construct($context);
    }


    /**
     * @return ResponseInterface|\Magento\Framework\Controller\Result\Raw|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $result = $this->resultRawFactory->create();

        $result->setContents('<user>
                                <name>Mukesh Chapagain</name>
                                <country>Nepal</country>
                            </user>');

        return $result;
    }
}
