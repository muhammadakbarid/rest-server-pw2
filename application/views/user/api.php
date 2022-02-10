<div class="card">
  <div class="card-body">
    <h2 style="margin-top:0px">Api Key</h2>
    <table class="table">
      <tr>
        <td>WMM-KEY</td>
        <td><?php
            echo $key; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <a href="<?= base_url('user/apigenerate'); ?>" class="btn btn-danger">Generate Api Key</a>
        </td>
      </tr>
    </table>
  </div>
</div>