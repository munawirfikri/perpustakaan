 <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong>Perpustakaan SDN 04 Minas Jaya</strong>
</div>

             <!-- Donut Chart -->
			 <div class="col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Demografi Peminjaman</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="peminjamanChart"></canvas>
                  </div>
				  <hr>
				  <center>
					  <?php $i=count($demo_peminjaman); foreach($demo_peminjaman as $demo): ?>
						<small style="color:black; font-weight: bold;"><?= $demo['id_kelas'] ?> : <?= $demo['nilai'] ?></small> 
						
						<?php if($i>1){ echo " | "; } $i--; endforeach;?>
					</center>
                </div>
              </div>
            </div> 

<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>
<script type="text/javascript">
// Pie Chart Example

var ctx = document.getElementById("peminjamanChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [<?php foreach($demo_peminjaman as $labelku) { echo '"' . $labelku['id_kelas'] . '",';}?>],
    datasets: [{
      data: [<?php foreach($demo_peminjaman as $nilaiku){ echo '"' . $nilaiku['nilai'] . '",';}?>],
      backgroundColor: ['#1f77b4', '#aec7e8', '#ff7f0e', '#ffbb78', '#2ca02c', '#98df8a', '#d62728', '#ff9896', '#9467bd', '#c5b0d5', '#8c564b', '#c49c94', '#e377c2', '#f7b6d2', '#7f7f7f', '#c7c7c7', '#bcbd22', '#dbdb8d', '#17becf', '#9edae5'],
      hoverBackgroundColor: ['#ffcccb', 'lightblue', 'green', 'yellow', 'darkgrey'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#020202",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 0,
  },
});

</script>
 

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
