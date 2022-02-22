  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="font-weight-bold">Rekapan Peminjaman</h6><a href="<?= base_url('admin/tambahpeminjaman'); ?>">+ Tambah Data</a>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th class="text-center">No</th>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Batas Waktu</th>
			<th class="text-center">Pengembalian</th>
			<th class="text-center">Keterangan</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th class="text-center">No</th>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Batas Waktu</th>
			<th class="text-center">Pengembalian</th>
			<th class="text-center">Keterangan</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php $i=1; foreach($rekapan_peminjaman as $row) : ?>
			<tr>
				<td class="text-center"><?= $i; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['judul']; ?></td>
				<td class="text-center"><?= $row['tgl_peminjaman']; ?></td>
				<td class="text-center"><?= $row['batas_waktu']; ?></td>
				<?php if($row['tgl_pengembalian'] == NULL) : ?>
						<td class="text-center">Belum</td>
						<?php endif; ?>
				<?php if($row['tgl_pengembalian'] != NULL) : ?>
						<td style="text-align: center"><?= $row['tgl_pengembalian']; ?></td>
					<?php endif; ?>
				<td class="text-center">
					<a style="color: black" href="<?= base_url('admin/notifikasipeminjaman'); ?>?id=<?= $row['id_peminjaman']; ?>" class="badge badge-warning" >Notifikasi</a> |
					<a style="color: white" 
						href="<?= base_url('admin/cetakpeminjamansatuan'); ?>?id=<?= $row['id_peminjaman']; ?>" 
						class="badge badge-primary" >Cetak</a> |
					<a style="color: white" 
						href="<?= base_url('admin/hapuspeminjaman'); ?>?id=<?= $row['id_peminjaman']; ?>" 
						class="badge badge-danger"
						onclick="return confirm('Sudah Oke ingin menghapus data ini?')" >Hapus</a>
				</td>
			</tr>
			<!-- endfoeach -->
			<?php $i++; endforeach;  ?>
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
