<?php

namespace Webjump\HelloWorld\Logger;

use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    protected $fileName = 'var/log/default.log';
    protected $loggerType = Logger::ALERT;
}
