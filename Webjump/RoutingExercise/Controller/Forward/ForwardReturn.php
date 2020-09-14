<?php


namespace Webjump\RoutingExercise\Controller\Forward;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\ForwardFactory;

class ForwardReturn extends Action
{

    /**
     * @var ForwardFactory
     */
    private $resultForwardFactory;

    /**
     * ForwardReturn constructor.
     * @param Context $context
     * @param ForwardFactory $resultForwardFactory
     */
    public function __construct(
        Context $context,
        ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;

        parent::__construct($context);
    }


    /**
     * @return ResponseInterface|\Magento\Framework\Controller\Result\Forward|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $result = $this->resultForwardFactory->create();

        $result->forward('JsonReturn');

        return $result;
    }
}
