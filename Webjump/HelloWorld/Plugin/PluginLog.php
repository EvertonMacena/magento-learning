<?php

namespace Webjump\HelloWorld\Plugin;

use Magento\Framework\App\Action\Action;
use Webjump\HelloWorld\Api\CustomLoggerInterface;

class PluginLog
{
    /**
     * @var CustomLoggerInterface
     */
    private $logger;

    public function __construct(
        CustomLoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function beforeDispatch(Action $subject)
    {
        $this->logger->debug("aqui esyou antes e debungando");
//        echo "<br/>estou aqui befoere";
    }

    public function afterDispatch(Action $subject)
    {
        $this->logger->critical("aqui estou after e criticando");
//        echo "<br/>estou aqui after";
    }

//    public function aroundDispatch(Action $subject, \Closure $proceed)
//    {
//
//    }

}
