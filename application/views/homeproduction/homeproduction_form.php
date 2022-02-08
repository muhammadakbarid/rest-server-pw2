<h2 style="margin-top:0px">Homeproduction <?php echo $button ?></h2>
<form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label for="varchar">Nama <?php echo form_error('nama') ?></label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Pemilik <?php echo form_error('pemilik') ?></label>
        <input type="text" class="form-control" name="pemilik" id="pemilik" placeholder="Pemilik" value="<?php echo $pemilik; ?>" />
    </div>
    <div class="form-group">
        <label for="year">Tahun Berdiri <?php echo form_error('tahun_berdiri') ?></label>
        <input type="text" class="form-control" name="tahun_berdiri" id="tahun_berdiri" placeholder="Tahun Berdiri" value="<?php echo $tahun_berdiri; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Email <?php echo form_error('email') ?></label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
    </div>
    <div class="form-group">
        <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
        <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
    </div>
    <div class="form-group">
        <label for="varchar">No Tlp <?php echo form_error('no_tlp') ?></label>
        <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Tlp" value="<?php echo $no_tlp; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Logo <?php echo form_error('logo') ?></label>
        <input type="text" class="form-control" name="logo" id="logo" placeholder="Logo" value="<?php echo $logo; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Website <?php echo form_error('website') ?></label>
        <input type="text" class="form-control" name="website" id="website" placeholder="Website" value="<?php echo $website; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Instagram <?php echo form_error('instagram') ?></label>
        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram" value="<?php echo $instagram; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Facebook <?php echo form_error('facebook') ?></label>
        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $facebook; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Twitter <?php echo form_error('twitter') ?></label>
        <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $twitter; ?>" />
    </div>
    <input type="hidden" name="id_homeproduction" value="<?php echo $id_homeproduction; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('homeproduction') ?>" class="btn btn-default">Cancel</a>
</form>