<?php

class Cltvo_Page_Glow extends Cltvo_Page
{
  public $caracts;
  public $tipo_glow;

  public $instagram;
  public $subtitle;

    function __construct(){
        parent::__construct(
            get_post( $GLOBALS['special_pages_ids']['glow'])
        );
    }

    public function setMetas()
    {
      $this->caracts = Cltvo_Glow_Caracts::getMetaValue($this->post);
      $this->tipo_glow = Cltvo_Glow_Tipo::getMetaValue($this->post);

      $this->instagram = Cltvo_Glow_Instagram::getMetaValue($this->post);
      $this->subtitle = Cltvo_Glow_Subtitle::getMetaValue($this->post);
    }

}
