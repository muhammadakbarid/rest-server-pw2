<div class="card">
    <div class="card-body">
        <h2 style="margin-top:0px">Homeproduction List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('homeproduction/create'), 'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('homeproduction/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                            if ($q <> '') {
                            ?>
                                <a href="<?php echo site_url('homeproduction'); ?>" class="btn btn-default">Reset</a>
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
                <th>Logo</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr><?php
                    foreach ($homeproduction_data as $homeproduction) {
                    ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><img src="<?php echo base_url('assets/img/logo/') . $homeproduction->logo ?>" width="100px" alt=""></td>
                    <td><?php echo $homeproduction->nama ?></td>
                    <td><?php echo $homeproduction->alamat ?></td>
                    <td style="text-align:center" width="200px">
                        <?php
                        echo anchor(site_url('homeproduction/read/' . $homeproduction->id_homeproduction), 'Read');
                        echo ' | ';
                        echo anchor(site_url('homeproduction/update/' . $homeproduction->id_homeproduction), 'Update');
                        echo ' | ';
                        echo anchor(site_url('homeproduction/delete/' . $homeproduction->id_homeproduction), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </div>
</div>