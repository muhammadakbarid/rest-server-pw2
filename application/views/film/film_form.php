<div class="card col-md-7">
    <div class="card-body">
        <h2 style="margin-top:0px">Film <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <!-- select home production -->
                    <div class="form-group">
                        <label for="int">Home Production <?php echo form_error('id_homeproduction') ?></label>
                        <select class="form-select" name="id_homeproduction" id="id_homeproduction">
                            <option value="">-- Pilih Home Production --</option>
                            <?php
                            foreach ($homeproduction as $homeproduction) {
                                echo "<option value='" . $homeproduction->id_homeproduction . "'";
                                if ($id_homeproduction == $homeproduction->id_homeproduction) {
                                    echo " selected";
                                }
                                echo ">" . $homeproduction->nama . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Judul <?php echo form_error('judul') ?></label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Producer <?php echo form_error('producer') ?></label>
                        <input type="text" class="form-control" name="producer" id="producer" placeholder="Producer" value="<?php echo $producer; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Penulis Naskah <?php echo form_error('penulis_naskah') ?></label>
                        <input type="text" class="form-control" name="penulis_naskah" id="penulis_naskah" placeholder="Penulis Naskah" value="<?php echo $penulis_naskah; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Musik <?php echo form_error('musik') ?></label>
                        <input type="text" class="form-control" name="musik" id="musik" placeholder="Musik" value="<?php echo $musik; ?>" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Cimatografi <?php echo form_error('cimatografi') ?></label>
                        <input type="text" class="form-control" name="cimatografi" id="cimatografi" placeholder="Cimatografi" value="<?php echo $cimatografi; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Editor <?php echo form_error('editor') ?></label>
                        <input type="text" class="form-control" name="editor" id="editor" placeholder="Editor" value="<?php echo $editor; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Durasi <?php echo form_error('durasi') ?></label>
                        <input type="text" class="form-control" name="durasi" id="durasi" placeholder="Durasi" value="<?php echo $durasi; ?>" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Bahasa <?php echo form_error('bahasa') ?></label>
                        <input type="text" class="form-control" name="bahasa" id="bahasa" placeholder="Bahasa" value="<?php echo $bahasa; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Negara <?php echo form_error('negara') ?></label>
                        <input type="text" class="form-control" name="negara" id="negara" placeholder="Negara" value="<?php echo $negara; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Rating <?php echo form_error('rating') ?></label>
                        <input type="text" class="form-control" name="rating" id="rating" placeholder="Rating" value="<?php echo $rating; ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="year">Tahun Rilis <?php echo form_error('tahun_rilis') ?></label>
                        <input type="text" class="form-control" name="tahun_rilis" id="tahun_rilis" placeholder="Tahun Rilis" value="<?php echo $tahun_rilis; ?>" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="varchar">Poster <?php echo form_error('poster') ?></label>
                        <!-- upload poster -->
                        <input type="file" class="form-control" name="poster" id="poster" placeholder="Poster" value="<?php echo $poster; ?>" />
                        <input type="hidden" class="form-control" name="posterbc" id="posterbc" placeholder="Poster" value="<?php echo $poster; ?>" />
                        <!-- if $poster then preview poster -->
                        <?php if ($poster) : ?>
                            <img src="<?php echo base_url('assets/img/' . $poster); ?>" class="img-thumbnail" width="80%" />
                        <?php endif; ?>


                    </div>
                </div>
            </div>
            <input type="hidden" name="id_film" value="<?php echo $id_film; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('film') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>