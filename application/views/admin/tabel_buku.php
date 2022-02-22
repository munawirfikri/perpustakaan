  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="m-0 font-weight-bold">Rekapan Buku</h6><a href="<?= base_url('admin/tambahbuku'); ?>">+ Tambah Buku</a>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th class="text-center">ISBN</th>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Penerbit</th>
			<th class="text-center">Tahun Terbit</th>
			<th class="text-center">Status</th>
			<th class="text-center">Aksi</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th class="text-center">ISBN</th>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Penerbit</th>
			<th class="text-center">Tahun Terbit</th>
			<th class="text-center">Status</th>
			<th class="text-center">Aksi</th>
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
				<?php if($row['tersedia'] == 0): ?>
					<td>Dipinjam</td>
					<td class="text-center">-</td>
					<?php endif; ?>
				<?php if($row['tersedia'] == 1): ?>
					<td>Ada</td>
					<td><a href="<?= base_url('admin/hapusbuku'); ?>?id=<?= $row['id_buku']; ?>" class="badge badge-danger" onclick="return confirm('Sudah Oke ingin menghapus buku ini?')">Hapus</a></td>
					<?php endif; ?>
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
