<div class="card">
    <div class="card-body">
        <h2 style="margin-top:0px">My Profile</h2>
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
                <td>Hak Akses</td>
                <td><?php echo $hak_akses; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="<?php echo site_url('user/edit_profile/') . $id_user ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo site_url('user/profile') ?>" class="btn btn-secondary">Cancel</a>
                </td>
            </tr>
        </table>
    </div>
</div>