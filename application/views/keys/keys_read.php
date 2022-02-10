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
        <h2 style="margin-top:0px">Keys Read</h2>
        <table class="table">
	    <tr><td>User Id</td><td><?php echo $user_id; ?></td></tr>
	    <tr><td>Key</td><td><?php echo $key; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $level; ?></td></tr>
	    <tr><td>Ignore Limits</td><td><?php echo $ignore_limits; ?></td></tr>
	    <tr><td>Is Private Key</td><td><?php echo $is_private_key; ?></td></tr>
	    <tr><td>Ip Addresses</td><td><?php echo $ip_addresses; ?></td></tr>
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('keys') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>