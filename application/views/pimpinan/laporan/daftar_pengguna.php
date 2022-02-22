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
            <h3> Daftar Pengguna <br> Perpustakaan SDN 04 Minas Jaya</h3>
			<h4><?= $hari; ?></h4>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
				<?php foreach($pengguna as $row) : ?>
				<tr>
				<td scope="row"><?= $i; ?></td>
				<td><?= $row['id_pengguna'] ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['username'] ?></td>
				<td>
					<?php if($row['tipe_user'] == 1) : ?>
						Admin
						<?php endif; ?>
					<?php if($row['tipe_user'] == 2) : ?>
						Pengunjung
						<?php endif; ?>
					<?php if($row['tipe_user'] == 3) : ?>
						Kepala Sekolah
						<?php endif; ?>
				</td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
