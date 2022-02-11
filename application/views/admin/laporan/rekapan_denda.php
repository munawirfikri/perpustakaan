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
            <h3> Laporan Rekapan Denda <br> Perpustakaan SDN 04 Minas Jaya</h3>
			<h4><?= $hari; ?></h4>
        </div>
        <table id="table">
            <thead>
                <tr>
				<th>No.</th>
				<th>Nama Peminjam</th>
				<th>Judul Buku</th>
				<th>Tgl Pengembalian</th>
				<th>Jumlah Denda</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
				<?php foreach($denda as $row) : ?>
					<tr>
                    <td scope="row"><?= $i; ?></td>
					<td><?= $row['nama']; ?></td>
					<td><?= $row['judul']; ?></td>
					<td><?= $row['tgl_bayar']; ?></td>
					<td><?= $row['jlh_denda']; ?></td>
                </tr>
				<?php $i++; ?>
				<?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
