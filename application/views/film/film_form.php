<h2 style="margin-top:0px">Film <?php echo $button ?></h2>
<form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label for="int">Id Homeproduction <?php echo form_error('id_homeproduction') ?></label>
        <input type="text" class="form-control" name="id_homeproduction" id="id_homeproduction" placeholder="Id Homeproduction" value="<?php echo $id_homeproduction; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Judul <?php echo form_error('judul') ?></label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Producer <?php echo form_error('producer') ?></label>
        <input type="text" class="form-control" name="producer" id="producer" placeholder="Producer" value="<?php echo $producer; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Penulis Naskah <?php echo form_error('penulis_naskah') ?></label>
        <input type="text" class="form-control" name="penulis_naskah" id="penulis_naskah" placeholder="Penulis Naskah" value="<?php echo $penulis_naskah; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Musik <?php echo form_error('musik') ?></label>
        <input type="text" class="form-control" name="musik" id="musik" placeholder="Musik" value="<?php echo $musik; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Cimatografi <?php echo form_error('cimatografi') ?></label>
        <input type="text" class="form-control" name="cimatografi" id="cimatografi" placeholder="Cimatografi" value="<?php echo $cimatografi; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Editor <?php echo form_error('editor') ?></label>
        <input type="text" class="form-control" name="editor" id="editor" placeholder="Editor" value="<?php echo $editor; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Durasi <?php echo form_error('durasi') ?></label>
        <input type="text" class="form-control" name="durasi" id="durasi" placeholder="Durasi" value="<?php echo $durasi; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Poster <?php echo form_error('poster') ?></label>
        <input type="text" class="form-control" name="poster" id="poster" placeholder="Poster" value="<?php echo $poster; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Bahasa <?php echo form_error('bahasa') ?></label>
        <input type="text" class="form-control" name="bahasa" id="bahasa" placeholder="Bahasa" value="<?php echo $bahasa; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Negara <?php echo form_error('negara') ?></label>
        <input type="text" class="form-control" name="negara" id="negara" placeholder="Negara" value="<?php echo $negara; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Rating <?php echo form_error('rating') ?></label>
        <input type="text" class="form-control" name="rating" id="rating" placeholder="Rating" value="<?php echo $rating; ?>" />
    </div>
    <div class="form-group">
        <label for="year">Tahun Rilis <?php echo form_error('tahun_rilis') ?></label>
        <input type="text" class="form-control" name="tahun_rilis" id="tahun_rilis" placeholder="Tahun Rilis" value="<?php echo $tahun_rilis; ?>" />
    </div>
    <input type="hidden" name="id_film" value="<?php echo $id_film; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('film') ?>" class="btn btn-default">Cancel</a>
</form>