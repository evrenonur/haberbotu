<?php

require_once "vendor/autoload.php";

$sondakika = new \Evren\Haberler\Siteler\SonDakikaCom();
echo "<pre>";
print_r($sondakika->getCategoryNews(\Evren\Haberler\Kategoriler\SonDakikaComKategoriler::DUNYA));
echo "</pre>";