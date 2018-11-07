<?php

namespace Asana\Resources\Gen;


/**
 *  Batch API
 *
*/
class BatchBase
{
    /**
     * @param Asana/Client client  The client instance
     */
    public function __construct($client)
    {
        $this->client = $client;
    }
    /**
     * Send batch request to Asana API. All actions processed synchronously, limited to 10 actions per request.
     * @param array $actions Single 'actions' field containing action objects
     * @return mixed
     */
    public function actions($actions = array())
    {
        $path = "/batch";
        return $this->client->post($path, $actions);
    }
}