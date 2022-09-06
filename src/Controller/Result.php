<?php
namespace App\Music\Controller;
use App\Music\Controller\Builder;
use App\Music\Controller\Api;

class Result{
     
    public static function buildContent(array $content) :array{

        $apiContent = [
           "artistName" => $content["artists"][0]["strArtist"],
           "artistBio" => $content["artists"][0]["strBiographyEN"],
           "artistGenre" => $content["artists"][0]["strGenre"],
           "artistThumb" => $content["artists"][0]["strArtistThumb"],
           "artistCountry" => $content["artists"][0]["strCountry"]
        ];

        return $apiContent;
    }


    public static function replaceContent() :array{
       
       $builder = new Builder();
       $input = $builder->getInputValue();
       $api = new Api();
       $response = $api->buildUrlResponse($input);
       $contentResult = file_get_contents($response);
       $jsonContent = json_decode($contentResult, true);
        
       return self::buildContent($jsonContent);
    }
}
