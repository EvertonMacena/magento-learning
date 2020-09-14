<?php

namespace Webjump\HelloWorld\Logger;

use Monolog\Handler\StreamHandler;
use Webjump\HelloWorld\Api\CustomLoggerInterface;

class CustomLogger implements CustomLoggerInterface
{
    /**
     * @var \Monolog\Logger
     */
    private $logger;

    public function __construct(
        \Monolog\Logger $logger
    ) {
        $this->logger = $logger;
    }

    public function debug($message, array $context = array())
    {
//        $this->logger->pushHandler(new StreamHandler('/var/log/custom-debug.log', $this->logger::DEBUG));
        $this->logger->debug($message, $context);
//        var_dump($this->logger);
//        $this->logger->popHandler();
    }

    public function critical($message, array $context = array())
    {
//        $this->logger->pushHandler(new StreamHandler('/var/log/custom-critical.log', $this->logger::CRITICAL));
        $this->logger->critical($message, $context);
//        $this->logger->popHandler();
    }
}
