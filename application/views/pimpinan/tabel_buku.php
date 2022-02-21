  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="m-0 font-weight-bold">Rekapan Buku</h6>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th>ISBN</th>
			<th>Judul Buku</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th>ISBN</th>
			<th>Judul Buku</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php foreach($buku as $row) : ?>
			<tr>
				<td><?= $row['id_buku'] ?></td>
				<td><?= $row['judul'] ?></td>
				<td><?= $row['penerbit'] ?></td>
				<td><?= $row['thn_terbit'] ?></td>
			</tr>
			<?php endforeach; ?>
			<!-- endfoeach -->
		</tbody>
	  </table>
	</div>
	<div class="row">
		<a href="<?= base_url('admin/cetakrekapanbuku'); ?>" class="mt-3 col-lg-12 text-center btn btn-primary">Cetak</a>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
