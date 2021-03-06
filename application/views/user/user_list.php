<div class="card">
    <div class="card-body">
        <h2 style="margin-top:0px">User List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('user/create'), 'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="text-center col-md-4">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->flashdata('message') <> '' ? $this->session->flashdata('message') : ''; ?>
                </div>
            </div>
            <div class="text-right col-md-1">
            </div>
            <div class="text-right col-md-3">
                <form action="<?php echo site_url('user/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                            if ($q <> '') {
                            ?>
                                <a href="<?php echo site_url('user'); ?>" class="btn btn-default">Reset</a>
                            <?php
                            }
                            ?>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
                <!-- <th>Password</th> -->
                <th>Action</th>
            </tr><?php
                    foreach ($user_data as $user) {
                    ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $user->nama ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->hak_akses ?></td>
                    <td style="text-align:center" width="200px">
                        <?php
                        echo anchor(site_url('user/read/' . $user->id_user), 'Read');
                        echo ' | ';
                        echo anchor(site_url('user/update/' . $user->id_user), 'Update');
                        echo ' | ';
                        echo anchor(site_url('user/delete/' . $user->id_user), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                        ?>
                    </td>
                </tr>
            <?php
                    }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
            </div>
            <div class="text-right col-md-6">
                <?php echo $pagination ?>
            </div>
        </div>
    </div>
</div>