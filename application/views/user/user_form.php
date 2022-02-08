<div class="card">
    <div class="card-body">
        <h2 style="margin-top:0px">User <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
            <div class="form-group">
                <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Email <?php echo form_error('email') ?></label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Password <?php echo form_error('password') ?></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
            </div>
            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('user') ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>