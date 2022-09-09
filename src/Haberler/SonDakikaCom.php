<?php

namespace Haberler;
use Haberler\Http\Requests;
use Haberler\Kategoriler\SonDakikaComKategori;
use PHPHtmlParser\Dom;

class SonDakikaCom
{
    private $client;
    private $dom;
    public function __construct()
    {
        $this->client = new Requests("https://www.sondakika.com/");
        $this->dom = new Dom();
    }

    public function getCategoryNews(SonDakikaComKategori $category){
        $response = $this->client->getResponse($category::DUNYA);
        echo $response;
    }


}