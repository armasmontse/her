<!-- table  for season-->
<table class="niu__main--table">
    <tr>
        <th>PRECIOS POR SESIÓN</th>
        <th>desde</th>
    </tr>
    <?php foreach($precio as $attr){?>
      <tr>
        <td><?php echo $attr->caracts['descripcion'] ?> </td>
        <td><?php echo $attr->caracts['precio'] ?> </td>
      </tr>
    <?php }?>
</table>
<!--  massages table -->
<table class="niu__main--table niu__main--gray-table">
    <tr>
        <th>MASAJES</th>
        <th>desde</th>
    </tr>
    <?php foreach($masajes as $attr){?>
      <tr>
        <td><?php echo $attr->caracts['descripcion'] ?> </td>
        <td><?php echo $attr->caracts['precio'] ?> </td>
      </tr>
    <?php }?>
</table>
