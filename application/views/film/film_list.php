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
        <th>Id Homeproduction</th>
        <th>Judul</th>
        <th>Producer</th>
        <th>Penulis Naskah</th>
        <th>Musik</th>
        <th>Cimatografi</th>
        <th>Editor</th>
        <th>Durasi</th>
        <th>Poster</th>
        <th>Bahasa</th>
        <th>Negara</th>
        <th>Rating</th>
        <th>Tahun Rilis</th>
        <th>Action</th>
    </tr><?php
            foreach ($film_data as $film) {
            ?>
        <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $film->id_homeproduction ?></td>
            <td><?php echo $film->judul ?></td>
            <td><?php echo $film->producer ?></td>
            <td><?php echo $film->penulis_naskah ?></td>
            <td><?php echo $film->musik ?></td>
            <td><?php echo $film->cimatografi ?></td>
            <td><?php echo $film->editor ?></td>
            <td><?php echo $film->durasi ?></td>
            <td><?php echo $film->poster ?></td>
            <td><?php echo $film->bahasa ?></td>
            <td><?php echo $film->negara ?></td>
            <td><?php echo $film->rating ?></td>
            <td><?php echo $film->tahun_rilis ?></td>
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