<div class="card">
    <div class="card-body">
        <h2 style="margin-top:0px">Film List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('film/create'), 'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="text-center col-md-4">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="text-right col-md-1">
            </div>
            <div class="text-right col-md-3">
                <form action="<?php echo site_url('film/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                            if ($q <> '') {
                            ?>
                                <a href="<?php echo site_url('film'); ?>" class="btn btn-default">Reset</a>
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
                <th>Poster</th>
                <th>Judul</th>
                <th>Producer</th>
                <th>Home Production</th>
                <th>Tahun Rilis</th>
                <th>Durasi</th>
                <th>Action</th>
            </tr><?php
                    foreach ($film_data as $film) {
                    ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><img src="<?= base_url('/assets/img/') . $film->poster; ?>" alt="" class="img img-responsive" width="150"></td>
                    <td><?php echo $film->judul ?></td>
                    <td><?php echo $film->producer ?></td>
                    <?php
                        // id_home_production to home_production name
                        $home_production = $this->db->get_where('homeproduction', ['id_homeproduction' => $film->id_homeproduction])->row();


                    ?>
                    <td><?php echo $home_production->nama ?></td>
                    <td><?php echo $film->tahun_rilis ?></td>
                    <td><?php echo $film->durasi ?></td>
                    <td style="text-align:center" width="200px">
                        <?php
                        echo anchor(site_url('film/read/' . $film->id_film), 'Read');
                        echo ' | ';
                        echo anchor(site_url('film/update/' . $film->id_film), 'Update');
                        echo ' | ';
                        echo anchor(site_url('film/delete/' . $film->id_film), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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