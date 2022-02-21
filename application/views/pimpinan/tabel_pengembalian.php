  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 style="color: maroon;" class="m-0 font-weight-bold">Pengembalian</h6>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" style="color: black;" id="dataTable" width="100%" cellspacing="0">
	  	<thead>
		  <tr>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th>Tgl Peminjaman</th>
			<th>Tgl Pengembalian</th>
			<th>Status</th>
			<th>Denda</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th>Tgl Peminjaman</th>
			<th>Tgl Pengembalian</th>
			<th>Status</th>
			<th>Denda</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php foreach($pengembalian as $row) : ?>
			<tr>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['judul']; ?></td>
				<td><?= $row['tgl_peminjaman']; ?></td>
				<td><?= $row['tgl_pengembalian']; ?></td>
				<?php if($row['status'] == 0) : ?>
						<td>Belum Selesai</td>
					<?php endif; ?>
				<?php if($row['status'] != 0) : ?>
					<td>Selesai</td>
					<?php endif; ?>
				<td>
				<?php
					$begin = new DateTime($row['tgl_pengembalian']);
					$end = new DateTime('now');

					$daterange     = new DatePeriod($begin, new DateInterval('P1D'), $end);
					//mendapatkan range antara dua tanggal dan di looping
					$i=0;
					$x     =    0;
					$end     =    1;

					foreach($daterange as $date){
						$daterange     = $date->format("Y-m-d");
						$datetime     = DateTime::createFromFormat('Y-m-d', $daterange);

						//Convert tanggal untuk mendapatkan nama hari
						$day         = $datetime->format('D');

						//Check untuk menghitung yang bukan hari sabtu dan minggu
						if($day!="Sun" && $day!="Sat") {
							//echo $i;
							$x    +=    $end-$i;
							
						}
						$end++;
						$i++;
					} 
					if($x==0){
						$selisih = $x;
					}else{
						$selisih = $x-1;
					}
					
					if($row['status'] == 0){
						if($selisih!=0){
							$nilai_denda = "Rp." .$selisih * 1000;
							echo "<h6 class='text-danger'> $nilai_denda </h6>" ;
						}else{
							echo "-";
						}
					}else{
						echo "-";
					}
					?>
				</td>
			</tr>
			<!-- endfoeach -->
			<?php endforeach; ?>
		</tbody>
	  </table>
	</div>
	<div class="row">
		<a href="#" class="mt-3 col-lg-12 text-center btn btn-primary">Cetak</a>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
