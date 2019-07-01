<?php

class Cltvo_Page_Peinados extends Cltvo_Page
{
    public $caracts;
    public $tipo_peinado;

    function __construct(){
        parent::__construct(
            specialPage(
                'peinados'
            ,true)
        );
    }

    public function setMetas()
    {
      $this->caracts = Cltvo_Features::getMetaValue($this->post);
      $this->tipo_peinado = Cltvo_Peinado_Tipo::getMetaValue($this->post);
    }

}
