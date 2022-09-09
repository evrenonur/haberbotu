<?php

namespace Evren\Haberler\Siteler;

use Evren\Haberler\Http\Requests;
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

    public function getCategoryNews($category)
    {
        $news = array();
        $response = $this->client->getResponse($category);
        $this->dom->loadStr($response);
        $urls = $this->dom->find('li[class="nws"] a[class="fr"]');
        foreach ($urls as $url) {
            $news[] = $this->getNews($url->href);
        }
        return $news;
    }


    public function getNews($url)
    {
        $response = $this->client->getResponse($url);
        $this->dom->loadStr($response);
        $title = $this->dom->find('h1[class="haber_baslik"]')->count() > 0 ? $this->dom->find('h1[class="haber_baslik"]')->text : null;
        $publishDate = $this->dom->find('div[class="hbptDate"]')->count() > 0 ? $this->dom->find('div[class="hbptDate"]')->text : null;
        $thumbnail = $this->dom->find('div[class="RenderVideoOrImage"] div[class="haberResim"] img[id="haberResim"]')->count() > 0 ? $this->dom->find('div[class="RenderVideoOrImage"] div[class="haberResim"] img[id="haberResim"]')->src : null;
        $summary = $this->dom->find('h2[id="spot"]')->count() > 0 ? $this->dom->find('h2[id="spot"]')->text : null;
        $content = $this->dom->find('div[class="wrapper detay-v3_3 haber_metni pad-bot-20"]')->count() > 0 ? $this->dom->find('div[class="wrapper detay-v3_3 haber_metni pad-bot-20"]')->innerHtml : null;
        return array(
            'title' => $title,
            'thumbnail' => $thumbnail,
            'summary' => $summary,
            'content' => $content,
            'publishDate' => $publishDate
        );

    }
}