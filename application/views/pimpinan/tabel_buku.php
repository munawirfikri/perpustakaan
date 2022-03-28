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
			<th class="text-center">ISBN</th>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Penerbit</th>
			<th class="text-center">Tahun Terbit</th>
			<th class="text-center">Status</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th class="text-center">ISBN</th>
			<th class="text-center">Judul Buku</th>
			<th class="text-center">Penerbit</th>
			<th class="text-center">Tahun Terbit</th>
			<th class="text-center">Status</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php foreach($buku as $row) : ?>
			<tr>
				<td><?= $row['id_buku'] ?></td>
				<td><?= $row['judul'] ?></td>
				<td><?= $row['penerbit'] ?></td>
				<td class="text-center"><?= $row['thn_terbit'] ?></td>
				<?php if($row['tersedia'] == 0): ?>
					<td class="text-center">Dipinjam</td>
					<?php endif; ?>
				<?php if($row['tersedia'] != 0): ?>
					<td class="text-center">Ada</td>
					<?php endif; ?>
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
