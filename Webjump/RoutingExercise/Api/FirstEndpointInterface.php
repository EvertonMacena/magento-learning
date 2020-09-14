<?php


namespace Webjump\RoutingExercise\Api;


interface FirstEndpointInterface
{
    /**
     * @param string $data
     * @return string
     * @api
     */
    public function getDataUrl(string $data);
}
