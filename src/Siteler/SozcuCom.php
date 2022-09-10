<?php

namespace Evren\Haberler\Siteler;

use Evren\Haberler\Http\Requests;
use PHPHtmlParser\Dom;

class SozcuCom
{
    private $client;
    private $dom;
    public function __construct()
    {
        $this->client = new Requests("https://www.sozcu.com.tr/");
        $this->dom = new Dom();
    }

    public function getCategoryNews($category)
    {
        $news = array();
        $response = $this->client->getResponse($category);
        $this->dom->loadStr($response);
        $urls = $this->dom->find('a[class="news-item-title"]');
        foreach ($urls as $url) {
            $news[] = $this->getNews(str_replace("https://www.sozcu.com.tr/","",$url->href));
        }
        return $news;
    }


    private function getNews($url)
    {
        $response = $this->client->getResponse($url);
        $this->dom->loadStr($response);
        $thumbnail = $this->dom->find('link[rel="image_src"]')->count() > 0 ? $this->dom->find('link[rel="image_src"]')->href : null;
        $title = $this->dom->find('meta[property="og:title"]')->count() > 0 ? $this->dom->find('meta[property="og:title"]')->content : null;
        $summary = $this->dom->find('meta[name="sgm:newsDesc"]')->count() > 0 ? $this->dom->find('meta[name="sgm:newsDesc"]')->content : null;
        $publishDate = $this->dom->find('span[class="content-meta-date"] time')->count() > 0 ? $this->dom->find('span[class="content-meta-date"] time')->text : null;
        $content = "";
        if ($this->dom->find('div[class="col-lg-8 content mb-4"]')->count() > 0){
            foreach ($this->dom->find('div[class="col-lg-8 content mb-4"] p') as $item){
               $content = $content.$item->innerHtml."\n";
            }
        }
        return array(
            'title' => $title,
            'thumbnail' => $thumbnail,
            'summary' => $summary,
            'content' => $content,
            'publishDate' => $publishDate
        );
    }
}