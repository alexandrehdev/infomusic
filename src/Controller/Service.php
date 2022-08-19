<?php
namespace App\Music\Controller;
use App\Music\Utils\View;

class Service{

    public static function callHome(){
       echo View::getView("principal");        
    } 

}
