<?php

namespace Evren\Haberler\Siteler;

use Evren\Haberler\Http\Requests;
use PHPHtmlParser\Dom;

class TrtHaberCom
{
    private $client;
    private $dom;

    public function __construct()
    {
        $this->client = new Requests("https://www.trthaber.com/");
        $this->dom = new Dom();
    }

    public function getCategoryNews($category)
    {
        $news = array();
        $response = $this->client->getResponse($category);
        $this->dom->loadStr($response);
        $urls = $this->dom->find('div[class="katListe2"] div[class="row"] a[class="cat-page-small-item"]');
        foreach ($urls as $url) {
            $this->getNews($url->href);
            $news[] = $this->getNews($url->href);
        }
        return $news;

    }


    private function getNews($url)
    {
        $response = $this->client->getResponse($url);
        $this->dom->loadStr($response);
        $title = $this->dom->find('div[class="news-detail-header"] h1')->count() > 0 ? $this->dom->find('div[class="news-detail-header"] h1')->text : null;
        $publishDate = $this->dom->find('span[class="detTarih"] span')->count() > 0 ? str_replace("Haber Giriş: ","", $this->dom->find('span[class="detTarih"] span')->text ): null;
        $thumbnail = $this->dom->find('div[class="detRes"] img')->count() > 0 ? $this->dom->find('div[class="detRes"] img')->src : null;
        $summary = $this->dom->find('h2[class="detOzet"]')->count() > 0 ? $this->dom->find('h2[class="detOzet"]')->text : null;
        $content = $this->dom->find('div[class="editorPart blackle"]')->count() > 0 ? $this->dom->find('div[class="related-news-container"]')->count() > 0 ? str_replace('<div class="related-news-container">'.$this->dom->find('div[class="related-news-container"]')->innerHtml.'</div>',"",$this->dom->find('div[class="editorPart blackle"]')->innerHTML) : $this->dom->find('div[class="editorPart blackle"]')->innerHTML
        : null;
        return array(
            'title' => $title,
            'thumbnail' => $thumbnail,
            'summary' => $summary,
            'content' => $content,
            'publishDate' => $publishDate
        );
    }

}