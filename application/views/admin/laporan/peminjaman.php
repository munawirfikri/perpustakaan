<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
		<table>
			<tr>
				<td><img style="max-width: 100px;" src="<?= $logo; ?>" alt=""></td>
				<td>        
					<div>
						<h3>Bukti Peminjaman Buku<br> Perpustakaan SDN 04 Minas Jaya</h3>
						<h4><?= $hari; ?></h4>
					</div>
				</td>
			</tr>
		</table>

		<table>
			<tr>
			<td>
				<table id="table">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?= $peminjaman['nama']; ?></td>
					</tr>
					<tr>
						<td>NIS</td>
						<td>:</td>
						<td><?= $peminjaman['id_pengguna']; ?></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td><?= $peminjaman['id_kelas']; ?></td>
					</tr>
					<tr>
						<td>Buku</td>
						<td>:</td>
						<td><?= $peminjaman['judul']; ?> (<?= $peminjaman['id_buku']; ?>)</td> 
					</tr>
					<tr>
						<td>Tgl Peminjaman</td>
						<td>:</td>
						<td><?= $peminjaman['tgl_peminjaman']; ?></td>
					</tr>
					<tr>
						<td>Batas Peminjaman</td>
						<td>:</td>
						<td><?= $peminjaman['batas_waktu']; ?></td>
					</tr>
				</table>
			</td>
			</tr>
		</table>
		<p style="text-align: right;">
		<strong>Pengelola Perpustakaan
		<br><br><br><br><br><br>
		<?= $admin; ?></strong></p>
    </body>
</html>
