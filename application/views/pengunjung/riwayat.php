  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="m-0 font-weight-bold">Riwayat Peminjaman</h6>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Status</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Tgl Pengembalian</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Status</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Tgl Pengembalian</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php foreach($riwayat as $row) : ?>
			<tr>
				<td><?= $row['judul'] ?></td>
				<td class="text-center">
				<?php if($row['status'] == 1){
					echo "Selesai";
				}else{
					echo "Belum";
				} ?>
				</td>
				<td class="text-center"><?= $row['tgl_peminjaman'] ?></td>
				<td class="text-center"><?= $row['tgl_pengembalian'] ?></td>
			</tr>
			<?php endforeach; ?>
			<!-- endfoeach -->
		</tbody>
	  </table>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
