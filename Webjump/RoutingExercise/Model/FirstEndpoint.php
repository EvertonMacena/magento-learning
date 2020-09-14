<?php


namespace Webjump\RoutingExercise\Model;


use Webjump\RoutingExercise\Api\FirstEndpointInterface;

class FirstEndpoint implements FirstEndpointInterface
{

    public function getDataUrl(string $data)
    {
        $data = strtoupper($data);

        $response = [
            'success' => true,
            'message' => 'success webApi: ' . $data
        ];

        return json_encode($response);
    }
}
