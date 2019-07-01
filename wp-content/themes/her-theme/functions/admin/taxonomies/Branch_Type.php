<?php

class branch_type extends Cltvo_Taxonomy_Master
{

    const nombre_plural = 'Tipos';
    const nombre_singular = 'Tipo';
    const slug = 'tipo';

    protected static $postypes = array('cltvo_sucursales');

    protected static $initialTerms = array(
        'barra-de-peinados' => 'Barra de peinados',
        'bx' => 'BX',
        'lax' => 'LAX',
    );

}
