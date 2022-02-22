<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
			<img style="max-width: 100px;" src="<?= $logo; ?>" alt="">
            <h3> Laporan Rekapan Riwayat Denda <br> Perpustakaan SDN 04 Minas Jaya</h3>
			<h4><?= $hari; ?></h4>
        </div>
        <table id="table">
            <thead>
                <tr>
				<th style="text-align: center;">No.</th>
				<th>Nama Peminjam</th>
				<th>Judul Buku</th>
				<th style="text-align: center;">Batas Waktu</th>
				<th style="text-align: center;">Tgl Pengembalian</th>
				<th style="text-align: center;">Jumlah Denda</th>
                </tr>
            </thead>
            <tbody>
			<!-- begin foreach -->
			<?php $i=1; foreach($denda as $row): ?>
			<tr>
				<td style="text-align: center;"><?= $i; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['judul']; ?></td>
				<td style="text-align: center;"><?= $row['batas_waktu']; ?></td>
				<td style="text-align: center;"><?= $row['tgl_pengembalian']; ?></td>
				<td style="text-align: center;">Rp.<?= $row['jlh_denda']; ?></td>
			</tr>
			<?php $i++; endforeach; ?>
			<!-- endfoeach -->
            </tbody>
        </table>
    </body>
</html>
