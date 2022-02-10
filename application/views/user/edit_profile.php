<div class="card">
    <div class="card-body">
        <h2 style="margin-top:0px">User <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
            <!-- tampilkan flasdata -->
            <?php echo $this->session->flashdata('message') ?>
            <div class="form-group">
                <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Email <?php echo form_error('email') ?></label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Password <?php echo form_error('password') ?></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Confirm Password <?php echo form_error('confirm_password') ?></label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm Password" />
                    </div>
                </div>
            </div>

            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('user') ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>