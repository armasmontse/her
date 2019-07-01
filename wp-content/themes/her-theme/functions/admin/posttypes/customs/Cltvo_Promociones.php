<?php

class Cltvo_Promociones extends Cltvo_PostTypeCustom_Master
{

    const nombre_plural = 'Promociones';
    const nombre_singular = 'Promocion';
    const slug = 'promocion';

    protected static $supports = array( 'title' , 'thumbnail', 'editor');
    protected static $menu_icon = 'dashicons-tag';

    public function setMetas()
    {

    }

}
