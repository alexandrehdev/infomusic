<?php
namespace App\Music\Controller;
use App\Music\Controller\Page;


class Service{

    public static function searchPage(){
        echo Page::getSearchPage();
    }
        
    public static function showResultPage(){
        echo Page::getResultPage();
    }

}
