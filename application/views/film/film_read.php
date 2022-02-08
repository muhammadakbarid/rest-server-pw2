<div class="card col-md-8">
	<div class="card-header">
		<h2 style="margin-top:0px">Film Read</h2>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col">
				<img src="<?= base_url('assets/img/') . $poster; ?>" alt="" class="img img-responsive" width="100%">
			</div>
			<div class="col">
				<table class="table table-light">
					<tr>
						<!-- $id_homeproduction to name -->
						<th>Home Production</th>
						<td><?= $homeproduction; ?></td>
					</tr>
					</tr>
					<tr>
						<th>Judul</th>
						<td><?php echo $judul; ?></td>
					</tr>
					<tr>
						<th>Producer</th>
						<td><?php echo $producer; ?></td>
					</tr>
					<tr>
						<th>Penulis Naskah</th>
						<td><?php echo $penulis_naskah; ?></td>
					</tr>
					<tr>
						<th>Musik</th>
						<td><?php echo $musik; ?></td>
					</tr>
					<tr>
						<th>Cimatografi</th>
						<td><?php echo $cimatografi; ?></td>
					</tr>
					<tr>
						<th>Editor</th>
						<td><?php echo $editor; ?></td>
					</tr>
					<tr>
						<th>Durasi</th>
						<td><?php echo $durasi; ?></td>
					</tr>

					<tr>
						<th>Bahasa</th>
						<td><?php echo $bahasa; ?></td>
					</tr>
					<tr>
						<th>Negara</th>
						<td><?php echo $negara; ?></td>
					</tr>
					<tr>
						<th>Rating</th>
						<td><?php echo $rating; ?></td>
					</tr>
					<tr>
						<th>Tahun Rilis</th>
						<td><?php echo $tahun_rilis; ?></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="<?php echo site_url('film') ?>" class="btn btn-default">Cancel</a></td>
					</tr>
				</table>
			</div>
		</div>

	</div>
</div>