        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong><a href="<?= base_url('admin/pengguna'); ?>">< Kembali ke halaman daftar pengguna</a></strong>
</div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                  <h6 class="m-0 font-weight-bold text-dark">Tambah Data Pengguna</h6>
                </div>
                <div class="card-body">
<!-- BEGIN CONTENT -->
				<form action="<?= base_url('admin/tambahpengguna'); ?>" method="post">
					<div class="form-group row">
							<label style="color: #020202;" for="id_pengguna" class="col-sm-2 col-form-label">Kode Pengguna</label>
							<div class="col-sm-10">
							<input style="color: #020202;" type="number" name="id_pengguna" class="form-control" id="id_pengguna" placeholder="Masukkan kode pengguna" required>
							</div>
						</div>
					<div class="form-group row">
						<label style="color: #020202;" for="nama" class="col-sm-2 col-form-label">Nama Pengguna</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama pengguna" required>
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="username" class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" name="username" class="form-control" id="username" placeholder="Masukkan username pengguna" required>
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="password" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="password" name="password" class="form-control" id="password" placeholder="Masukkan password pengguna" required>
						</div>
					</div>
					<div class="form-group row">
					<label style="color: #020202;" class="col-sm-2 col-form-label" for="tipe_user">Level</label>
					<div class="col-sm-10">
					<select class="form-control" id="tipe_user" name="tipe_user">
					<option value="2">Pengguna</option>
					<option value="1">Admin</option>
					<option value="3">Kepala Sekolah</option>
					</select>
					</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="id_kelas" class="col-sm-2 col-form-label">Kode Kelas</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="id_kelas" name="id_kelas" class="form-control" id="id_kelas" placeholder="Masukkan kode kelas" required>
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
