<?php
namespace App\Music\Controller;
use App\Music\Controller\Result;
use App\Music\Utils\View;
use App\Music\Controller\Api;

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
       $nameElements = self::nameElements(); 
       $contentElements = View::getElements();
       $builder = new Builder();
       $api = new Api();
       $data = $api->buildUrlResponse($builder->getSearch());
       $response = file_get_contents($data);
       $x = json_decode($response, true);

       $contentElements[0] = str_replace("__nameArtist__", $x["artists"][0]["strBiographyPT"] , $contentElements[0]);

       return View::render("index", [
            $nameElements[1] => $contentElements[1],
            $nameElements[3] => $contentElements[0],
            $nameElements[2] => $contentElements[2],
       ]);

    }


  }
