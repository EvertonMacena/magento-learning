<?php


namespace Webjump\HelloWorld\Api;


interface CustomLoggerInterface
{
    public function debug($message, array $context = array());
    public function critical($message, array $context = array());
}
