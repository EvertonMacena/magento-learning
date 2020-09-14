<?php


namespace Webjump\RoutingExercise\Controller\Redirect;


use Magento\Backend\Model\View\Result\RedirectFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class RedirectReturn extends Action
{

    /**
     * @var RedirectFactory
     */
    protected $resultRedirectFactory;

    /**
     * ForwardReturn constructor.
     * @param Context $context
     * @param RedirectFactory $resultRedirectFactory
     */
    public function __construct(
        Context $context,
        RedirectFactory $resultRedirectFactory
    ) {
        $this->resultRedirectFactory = $resultRedirectFactory;

        parent::__construct($context);
    }


    /**
     * @return \Magento\Backend\Model\View\Result\Redirect|ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $result = $this->resultRedirectFactory->create();

        $result->setPath('*/index/');

        return $result;
    }
}
