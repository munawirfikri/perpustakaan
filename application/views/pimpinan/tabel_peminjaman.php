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
			<th class="text-center">No</th>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Batas Waktu</th>
			<th class="text-center">Pengembalian</th>
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
			</tr>
			<!-- endfoeach -->
			<?php $i++; endforeach;  ?>
		</tbody>
	  </table>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
