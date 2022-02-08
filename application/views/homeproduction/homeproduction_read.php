<div class="card">
    <div class="card-body">
        <h2 style="margin-top:0px">Homeproduction Read</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo base_url('assets/img/logo/') . $logo; ?>" alt="">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Pemilik</td>
                        <td><?php echo $pemilik; ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri</td>
                        <td><?php echo $tahun_berdiri; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $alamat; ?></td>
                    </tr>
                    <tr>
                        <td>No Tlp</td>
                        <td><?php echo $no_tlp; ?></td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td><?php echo $website; ?></td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td><?php echo $instagram; ?></td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td><?php echo $facebook; ?></td>
                    </tr>
                    <tr>
                        <td>Twitter</td>
                        <td><?php echo $twitter; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="<?php echo site_url('homeproduction') ?>" class="btn btn-secondary">Cancel</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>