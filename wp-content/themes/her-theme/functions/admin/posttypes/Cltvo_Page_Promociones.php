<?php

class Cltvo_Page_Promociones extends Cltvo_Page
{
    function __construct(){
        parent::__construct(
            specialPage(
                'promociones'
            ,true)
        );
    }

    public function setMetas()
    {
      
    }

}
