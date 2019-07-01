<?php

class Cltvo_Page_Sucursales extends Cltvo_Page
{
    public $sucursales;
    public $description;
    public $types;

    function __construct(){
        parent::__construct( specialPage( 'sucursales' , true) );
    }

    public function setMetas()
    {

    }

}
