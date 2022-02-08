<h2 style="margin-top:0px">User Read</h2>
<table class="table">
    <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><?php echo $password; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a></td>
    </tr>
</table>