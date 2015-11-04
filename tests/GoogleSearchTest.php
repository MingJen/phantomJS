<?php
use Behat\Mink\Driver\Selenium2Driver;
use Behat\Mink\Session;

class GoogleSearchTest extends PHPUnit_Framework_TestCase
{
    public function testSearchWithKeyword()
    {
        // 使用 Selenium2Driver 來操作 PhantomJS
        $driver = new Selenium2Driver('phantomjs');

        // 建立一個 Session 物件來控制瀏覧器
        $session = new Session($driver);
        $session->start();

        // 瀏覽 Google 首頁
        $session->visit('https://www.google.com');

        // 操作頁面物件來搜尋關鍵字
        $page = $session->getPage();
        $page->fillField('q', 'Jace Ju');
        $page->find('css', 'form')->submit();

        // 得到搜尋結果後驗證是否包含預期中的文字
        $text = $page->getText();
        $this->assertContains('網站製作學習誌', $text);
    }
}