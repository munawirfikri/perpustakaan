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
		 	<th class="text-center">No</th>
		 	<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Batas Waktu</th>
			<th class="text-center">Tgl Pengembalian</th>
			<th class="text-center">Status</th>
			<th class="text-center">Denda</th>
		  </tr>
		</thead>
		<tfoot>
		<tr>
			<th class="text-center">No</th>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th class="text-center">Tgl Peminjaman</th>
			<th class="text-center">Batas Waktu</th>
			<th class="text-center">Tgl Pengembalian</th>
			<th class="text-center">Status</th>
			<th class="text-center">Denda</th>
		  </tr>
		</tfoot>
		<tbody>
			<!-- begin foreach -->
			<?php $a=1; foreach($pengembalian as $row) : ?>
			<tr>
				<td class="text-center"><?= $a; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['judul']; ?></td>
				<td class="text-center"><?= $row['tgl_peminjaman']; ?></td>
				<td class="text-center"><?= $row['batas_waktu']; ?></td>
				<?php if($row['tgl_pengembalian'] == NULL) : ?>
						<td class="text-center">-</td>
					<?php endif; ?>
				<?php if($row['tgl_pengembalian'] != NULL) : ?>
					<td class="text-center"><?= $row['tgl_pengembalian']; ?></td>
					<?php endif; ?>
				<?php if($row['status'] == 0) : ?>
						<td class="text-center">Belum Selesai</td>
					<?php endif; ?>
				<?php if($row['status'] != 0) : ?>
					<td class="text-center">Selesai</td>
					<?php endif; ?>
				<td class="text-center">
				<?php
					$begin = new DateTime($row['batas_waktu']);
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
			<?php $a++; endforeach; ?>
		</tbody>
	  </table>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
