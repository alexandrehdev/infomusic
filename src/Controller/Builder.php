<?php
namespace App\Music\Controller;

class Builder{

    private $search;

    function __construct(){
        $this->setInputValue($_REQUEST["search"]);
    }

    public function getInputValue() :string{
        return $this->search;
    }

    public function setInputValue($search) :void{
        $this->search = $search;
    }
}
