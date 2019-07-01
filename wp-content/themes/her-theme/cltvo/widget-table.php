<div class="widget__table--container">
    <table class="widget__table">
      <tr class="widget__table--line">
        <th class="widget__table--arrow">
            Widget Title
            <i class="fa fa-caret-up" aria-hidden="true"></i>
        </th>
        <th class="widget__table--type">
            Type
            <i class="fa fa-caret-down" aria-hidden="true"></i>
        </th>
        <th>Actions</th>
      </tr>
      <?php for ($i = 1; $i <= 5; $i++) {?>
          <tr class="widget__table--line">
            <td class="widget__table--item">Appointments 01</td>
            <td class="widget__table--item">Appointment</td>
            <td class="widget__table--item">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </td>
          </tr>
      <?php } ?>
    </table>
</div>
