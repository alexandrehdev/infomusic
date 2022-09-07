<?php
namespace App\Music\Controller;

class Api{


    public function buildUrlResponse(string $search){
        return "https://theaudiodb.com/api/v1/json/2/search.php?s={$search}";
    }
}
