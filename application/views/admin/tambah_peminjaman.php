        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong><a href="<?= base_url('admin/peminjaman'); ?>">< Kembali ke halaman rekapan data peminjaman</a></strong>
</div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                  <h6 class="m-0 font-weight-bold text-dark">Tambah Data Peminjaman</h6>
                </div>
                <div class="card-body">
<!-- BEGIN CONTENT -->
				<form action="<?= base_url('admin/tambahpeminjaman'); ?>" method="post">
					<div class="form-group row">
						<label style="color: #020202;" for="idPeminjam" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" class="form-control"  required id="idPeminjam" name="id_peminjam" placeholder="Masukkan Nomor Induk Siswa">
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="idBuku" class="col-sm-2 col-form-label">ID Buku</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" name="id_buku" required class="form-control" id="idBuku" placeholder="Masukkan ID buku">
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="tanggalPeminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="date" name="tanggal_peminjaman" class="form-control" id="tanggalPeminjaman" value="<?php echo date('Y-m-d'); ?>">
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="batas_waktu" class="col-sm-2 col-form-label">Batas Waktu Peminjaman</label>
						<div class="col-sm-10">
							<?php   $tomorrow = date("Y-m-d", strtotime("+7 day")); ?>
						<input style="color: #020202;" type="date" name="batas_waktu" class="form-control" id="batas_waktu" value="<?php echo $tomorrow; ?>">
						</div>
					</div>
					<div class="row">
						<button type="submit" name="submit"  class="mt-3 col-lg-12 text-center btn btn-primary">Tambah</button>
					</div>
				</form>
	<!-- END CONTENT -->
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
