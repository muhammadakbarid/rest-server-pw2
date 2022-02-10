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
        <h2 style="margin-top:0px">Keys <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">User Id <?php echo form_error('user_id') ?></label>
            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User Id" value="<?php echo $user_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Key <?php echo form_error('key') ?></label>
            <input type="text" class="form-control" name="key" id="key" placeholder="Key" value="<?php echo $key; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Level <?php echo form_error('level') ?></label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Ignore Limits <?php echo form_error('ignore_limits') ?></label>
            <input type="text" class="form-control" name="ignore_limits" id="ignore_limits" placeholder="Ignore Limits" value="<?php echo $ignore_limits; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Is Private Key <?php echo form_error('is_private_key') ?></label>
            <input type="text" class="form-control" name="is_private_key" id="is_private_key" placeholder="Is Private Key" value="<?php echo $is_private_key; ?>" />
        </div>
	    <div class="form-group">
            <label for="ip_addresses">Ip Addresses <?php echo form_error('ip_addresses') ?></label>
            <textarea class="form-control" rows="3" name="ip_addresses" id="ip_addresses" placeholder="Ip Addresses"><?php echo $ip_addresses; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Date Created <?php echo form_error('date_created') ?></label>
            <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('keys') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>