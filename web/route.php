 <?php
 require "vendor/autoload.php"; 
 use App\Music\Controller\Service;
 use App\Music\Utils\Route;

 Route::redirect("/", function(){
      Service::searchPage();
 });

 Route::redirect("/result", function(){
     Service::showResultPage();
 });



  




