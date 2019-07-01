<?php

class Cltvo_Sucursal extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Sucursal";
    protected $post_type = "cltvo_sucursales";


    /**
     * proiedades de esta clase
     */

    protected static $expertos = [
            'direccion'     =>  'Direccion: ',
            'phone'         =>  'Teléfono: ',
            'google_maps'   =>  'Google Maps: ',
    ];

    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){
        $meta = is_array($meta) ? $meta : [] ;

        foreach (self::$expertos as $red => $imagen) {
    			$meta[$red] = isset($meta[$red]) ? $meta[$red] :  "";
    		}

        return $meta;
    }


	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
    public function CltvoDisplayMetabox( $object )
    {
        ?>

    		<table class="form-table">
                <tr>
                    <th>
                        <label>Dirección:</label>
                    </th>
                    <td>
                        <textarea rows="3" cols="80" placeholder="Direccion" name="<?php echo  $this->meta_key; ?>[direccion]" id="<?php echo  $this->meta_key; ?>[direccion]" ><?php echo $this->meta_value['direccion']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label>Teléfono:</label>
                    </th>
                    <td>
                        <input style="min-width: 590px;" type="text" placeholder="T:"  name="<?php echo  $this->meta_key; ?>[phone]" id="<?php echo  $this->meta_key; ?>[phone]" value="<?php echo $this->meta_value['phone']; ?>" />
                    </td>
                </tr>
                <tr>
                    <th>
                        <label>Google Maps:</label>
                    </th>
                    <td>
                        <input style="min-width: 590px;" type="text" placeholder="Google Maps"  name="<?php echo  $this->meta_key; ?>[google_maps]" id="<?php echo  $this->meta_key; ?>[google_maps]" value="<?php echo $this->meta_value['google_maps']; ?>" />
                    </td>
                </tr>
            </table>

        <?php
	}

}
