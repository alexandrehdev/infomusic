<?php
namespace App\Music\Controller;

class Builder{

    private $search;

    function __construct(){
        $this->setSearch($_REQUEST["search"]);
    }

    public function getSearch() :string{
        return $this->search;
    }

    public function setSearch($search) :void{
        $this->search = $search;
    }
}
