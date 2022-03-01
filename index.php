<?php
require "vendor/autoload.php";


use Behat\Mink\Mink;
use Behat\Mink\Session;
use DMore\ChromeDriver\ChromeDriver;
use Symfony\Component\DomCrawler\Crawler;



$mink = new Mink(array(
    'browser' => new Session(new ChromeDriver('http://localhost:4545', null, null))
));

$session = $mink->getSession("browser");


$session->visit("http://tsetmc.com/Loader.aspx?ParTree=151311&i=65883838195688438");

$session->getDriver()->click(".//ul[contains(concat(' ',normalize-space(@class),' '),' menu2 ')]//li[(count(preceding-sibling::*)+1) = 3]");

dump($session->getDriver()->getHtml('.//*[@id="HistoryContent"]//*[@id="trade"]//*[@class="objbox"]//table'));



      // $crawler = new Crawler($session->getDriver()->getContent());



//$a = $session->getPage()->find("xpath", ".//*[@id='HistoryContent']//*[@id='trade']//*[@class='objbox']//table//tbody");


// $a->getSession()->getDriver()->getContent()




       //

/* $table = $crawler->filterXPath("//DIV[@id='trade']/DIV[2]/TABLE[1]/TBODY[1]");

$t = $table->filterXPath(".//tbody[(count(preceding-sibling::*)+1) = 1]");

       dump($t->html());
 */