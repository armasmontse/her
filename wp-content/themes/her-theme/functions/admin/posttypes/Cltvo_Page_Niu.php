<?php

class Cltvo_Page_Niu extends Cltvo_Page
{
  public $caracts;
  public $tipo_niu;

  public $subtitle;
  public $intro;
  public $instagram;
  public $facebook;

    function __construct(){
        parent::__construct(
            get_post( $GLOBALS['special_pages_ids']['niu'])
        );
    }

    public function setMetas()
    {
      $this->caracts = Cltvo_Niu_Caracts::getMetaValue($this->post);
      $this->tipo_niu = Cltvo_Niu_Tipo::getMetaValue($this->post);

      $this->subtitle = Cltvo_Niu_Subtitle::getMetaValue($this->post);
      $this->intro = Cltvo_Niu_Intro::getMetaValue($this->post);

      $this->facebook = Cltvo_Niu_FB::getMetaValue($this->post);
      $this->instagram = Cltvo_Niu_Instagram::getMetaValue($this->post);
    }

}
