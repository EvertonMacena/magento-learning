<?php
namespace FirstCron\TestCron\Cron;

use Psr\Log\LoggerInterface;

/**
 * Class Test
 * @package Magento\SampleMinimal\Cron
 */
class Test {
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Test constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * Write to system.log
     *
     * @return void
     */
    public function execute() {
        $this->logger->info('Cron Works');
    }
}
