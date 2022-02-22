  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="font-weight-bold">Rekapan Peminjaman</h6>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th class="text-center">Nama Peminjam</th>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Tgl Pengembalian</th>
			<th class="text-center">Keterangan</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th class="text-center">Nama Peminjam</th>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Tgl Pengembalian</th>
			<th class="text-center">Keterangan</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php foreach($rekapan_peminjaman as $row) : ?>
			<tr>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['judul']; ?></td>
				<td><?= $row['tgl_peminjaman']; ?></td>
				<td><?= $row['tgl_pengembalian']; ?></td>
				<td>
					<a style="color: white" 
						href="<?= base_url('admin/cetakpeminjamansatuan'); ?>?id=<?= $row['id_peminjaman']; ?>" 
						class="btn btn-primary" >Cetak</a>
				</td>
			</tr>
			<!-- endfoeach -->
			<?php endforeach; ?>
		</tbody>
	  </table>
	</div>

	<div class="row">
		<a href="<?= base_url('admin/cetakrekapanpinjaman'); ?>" class="mt-3 col-lg-12 text-center btn btn-primary">Cetak</a>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
