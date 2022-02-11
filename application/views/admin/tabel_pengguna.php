  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="m-0 font-weight-bold">Daftar Pengguna</h6><a href="<?= base_url('admin/tambahpengguna'); ?>">+ Tambah Pengguna</a>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Role</th>
			<th>Aksi</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Role</th>
			<th>Aksi</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php foreach($pengguna as $row) : ?>
			<tr>
				<td><?= $row['id_pengguna'] ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['username'] ?></td>
				<td>
					<?php if($row['tipe_user'] == 1) : ?>
						Admin
						<?php endif; ?>
					<?php if($row['tipe_user'] == 2) : ?>
						Pengunjung
						<?php endif; ?>
					<?php if($row['tipe_user'] == 3) : ?>
						Kepala Sekolah
						<?php endif; ?>
				</td>
				<td><a href="<?= base_url('admin/hapuspengguna'); ?>?id=<?= $row['id_pengguna']; ?>" class="badge badge-danger" onclick="return confirm('Sudah Oke ingin menghapus pengguna ini?')">Hapus</a></td>
			</tr>
			<?php endforeach; ?>
			<!-- endfoeach -->
		</tbody>
	  </table>
	</div>
	<div class="row">
		<a href="<?= base_url('admin/cetakdaftarpengguna'); ?>" class="mt-3 col-lg-12 text-center btn btn-primary">Cetak</a>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
