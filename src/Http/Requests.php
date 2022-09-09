<?php

namespace Haberler\Http;
use GuzzleHttp\Client;
class  Requests {

    private $client;
    public function __construct($baseURI = "")
    {
        $this->client = new Client([
            'base_uri' => $baseURI
        ]);
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param $url
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getResponse($url)
    {
        return $this->client->get($url)->getBody()->getContents();
    }
}
