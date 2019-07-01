<?php

class Cltvo_Sucursales extends Cltvo_PostTypeCustom_Master
{

    const nombre_plural = 'Sucursales';
    const nombre_singular = 'Sucursal';
    const slug = 'sucursales';

    protected static $supports = array( 'title' , 'thumbnail');
    protected static $menu_icon = 'dashicons-store';

    public $sucursal;
    public $servicios;

    public function setMetas()
    {
      $this->sucursal = Cltvo_Sucursal::getMetaValue($this->post);
      $this->servicios = Cltvo_Servicios::getMetaValue($this->post);
    }

}
