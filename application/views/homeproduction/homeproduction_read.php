<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Homeproduction Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Pemilik</td><td><?php echo $pemilik; ?></td></tr>
	    <tr><td>Tahun Berdiri</td><td><?php echo $tahun_berdiri; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>No Tlp</td><td><?php echo $no_tlp; ?></td></tr>
	    <tr><td>Logo</td><td><?php echo $logo; ?></td></tr>
	    <tr><td>Website</td><td><?php echo $website; ?></td></tr>
	    <tr><td>Instagram</td><td><?php echo $instagram; ?></td></tr>
	    <tr><td>Facebook</td><td><?php echo $facebook; ?></td></tr>
	    <tr><td>Twitter</td><td><?php echo $twitter; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('homeproduction') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>