<?php

class Cltvo_Page_Lax extends Cltvo_Page
{
    public $lax_link;

    function __construct(){
        parent::__construct(
            get_post( $GLOBALS['special_pages_ids']['lax'])
        );
    }


    public function setMetas()
    {
        $this->lax_link = Cltvo_Lax_Link::getMetaValue($this->post);
    }

}
