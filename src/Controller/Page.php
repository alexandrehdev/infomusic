<?php
namespace App\Music\Controller;
use App\Music\Utils\View;

class Page{
    
    const resultPage = "resources/elements/result.html";


    public static function nameElements() :array{
	    $elements = View::getNameElements();
	    $elements = array_map(function($item){
           return basename($item,'.html');
	    },$elements);

	    rsort($elements);

        return $elements;
    }


    public static function getSearchPage(){
       $nameElements = self::nameElements(); 
       $contentElements = View::getElements();
       
       return View::render("index", [
            $nameElements[1] => $contentElements[1],
            $nameElements[3] => $contentElements[3],
            $nameElements[2] => $contentElements[2]
       ]);
    }


    public static function getResultPage(){

        $keys = [
            "_artistName_",
            "_artistBio_",
            "_artistGenre_",
            "_artistThumb_",
            "_artistCountry_"
        ];

       $nameElements = self::nameElements(); 
       $contentElements = View::getElements();

       $search = self::contentFromSearch();
       $contentElements[0] = str_replace($keys, $search, $contentElements[0]);

       return View::render("index", [
            $nameElements[1] => $contentElements[1],
            $nameElements[3] => $contentElements[0],
            $nameElements[2] => $contentElements[2],
       ]);

    }


    public static function contentFromSearch():array{

        return Result::replaceContent();
    }


  }
