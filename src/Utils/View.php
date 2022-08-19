<?php
namespace App\Music\Utils;

class View{
    
    const pathToElements = "resources/screens/";

    private static function getContentView(string $view) :string{

        $file = __DIR__ . "/../../resources/screens/{$view}.html";

        return file_exists($file) ? file_get_contents($file) : '';
    }

    public static function getView(string $view) :string{

        return self::getContentView($view);

    }

    
}

