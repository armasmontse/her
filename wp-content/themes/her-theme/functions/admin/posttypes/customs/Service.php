<?php

class Service extends Cltvo_PostTypeCustom_Master
{

    const nombre_plural = 'Tipos de servicio';
    const nombre_singular = 'tipo de servicio';
    const slug = 'servicios';

    protected static $supports = array('title', 'editor', 'thumbnail');
    protected static $menu_icon = 'dashicons-forms';

    public function setMetas()
    {

    }

}
