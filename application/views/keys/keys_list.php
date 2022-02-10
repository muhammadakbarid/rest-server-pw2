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
        <h2 style="margin-top:0px">Keys List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('keys/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('keys/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('keys'); ?>" class="btn btn-default">Reset</a>
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
		<th>User Id</th>
		<th>Key</th>
		<th>Level</th>
		<th>Ignore Limits</th>
		<th>Is Private Key</th>
		<th>Ip Addresses</th>
		<th>Date Created</th>
		<th>Action</th>
            </tr><?php
            foreach ($keys_data as $keys)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $keys->user_id ?></td>
			<td><?php echo $keys->key ?></td>
			<td><?php echo $keys->level ?></td>
			<td><?php echo $keys->ignore_limits ?></td>
			<td><?php echo $keys->is_private_key ?></td>
			<td><?php echo $keys->ip_addresses ?></td>
			<td><?php echo $keys->date_created ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('keys/read/'.$keys->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('keys/update/'.$keys->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('keys/delete/'.$keys->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
    </body>
</html>