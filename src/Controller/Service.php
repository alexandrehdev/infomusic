<?php
namespace App\Music\Controller;
use App\Music\Controller\Builder;
use App\Music\Utils\View;

class Service{

    public static function callHome(){
       echo View::getView("principal");        
    } 

    public static function testingSearch(){
        $builder = new Builder;
        $search = $builder->getSearch();
        echo "
            Você procurou por <strong>{$search} </strong> :)
         ";
    }

}
