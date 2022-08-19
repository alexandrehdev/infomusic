 <?php
 require "vendor/autoload.php"; 
 use App\Music\Controller\Service;
 use App\Music\Utils\Route;

 Route::redirect("/", function(){
    Service::callHome();
 });

 Route::redirect("/search", function(){
     echo "procurando musica ou artista :)";
 });



  




