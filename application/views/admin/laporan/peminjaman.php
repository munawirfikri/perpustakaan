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
            <h3>Laporan Pinjaman <br> Perpustakaan SDN 04 Minas Jaya</h3>
			<h4><?= $hari; ?></h4>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
					<th>Status</th>
                </tr>
            </thead>
            <tbody>
					<tr>
					<td><?= $peminjaman['nama']; ?></td>
					<td><?= $peminjaman['judul']; ?></td>
					<td><?= $peminjaman['tgl_peminjaman']; ?></td>
					<td><?= $peminjaman['tgl_pengembalian']; ?></td>
					<?php if($peminjaman['status'] == 0) : ?>
						<td>Belum Selesai</td>
						<?php endif; ?>
					<?php if($peminjaman['status'] != 0) : ?>
						<td>Selesai</td>
						<?php endif; ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>
