  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="m-0 font-weight-bold">Rekapan Denda</h6>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th>Tgl Pengembalian</th>
			<th>Jumlah Denda</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th>Tgl Pengembalian</th>
			<th>Jumlah Denda</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php foreach($denda as $row): ?>
			<tr>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['judul']; ?></td>
				<td><?= $row['tgl_bayar']; ?></td>
				<td>Rp.<?= $row['jlh_denda']; ?></td>
			</tr>
			<?php endforeach; ?>
			<!-- endfoeach -->
		</tbody>
	  </table>
	</div>
	<div class="row">
		<a href="<?= base_url('admin/cetakrekapandenda'); ?>" class="mt-3 col-lg-12 text-center btn btn-primary">Cetak</a>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
