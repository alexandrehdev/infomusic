<?php
namespace App\Music\Controller;
use App\Music\Controller\Builder;
use App\Music\Controller\Api;

class Result{

    const resultPage = "resources/elements/result.html";

    public static function replaceContent(){
       $api = new Api();
       $builder = new Builder();
       $search = strtolower($builder->getSearch());
       $apiContent = $api->buildUrlResponse($search);
       $resultPage = file_get_contents(self::resultPage);

       return str_replace("__nameArtist__", $search , $resultPage);

    }

}
