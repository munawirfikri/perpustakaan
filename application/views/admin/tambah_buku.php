        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<div class="alert alert-primary" role="alert" small-text>
<strong><a href="<?= base_url('admin/buku'); ?>">< Kembali ke halaman rekapan buku</a></strong>
</div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                  <h6 class="m-0 font-weight-bold text-dark">Tambah Data Buku</h6>
                </div>
                <div class="card-body">
<!-- BEGIN CONTENT -->
				<form action="<?= base_url('admin/tambahbuku'); ?>" method="post">
					<div class="form-group row">
						<label style="color: #020202;" for="idBuku" class="col-sm-2 col-form-label">Kode Buku</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" class="form-control" id="idBuku" required name="id_buku" placeholder="Masukkan kode buku">
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="judul" class="col-sm-2 col-form-label">Judul</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul buku" required>
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Masukkan penerbit" required>
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="isbn" class="col-sm-2 col-form-label">ISBN</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="text" name="isbn" class="form-control" id="isbn" placeholder="Masukkan ISBN" required>
						</div>
					</div>
					<div class="form-group row">
						<label style="color: #020202;" for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
						<div class="col-sm-10">
						<input style="color: #020202;" type="number" min="1900" max="2099" step="1" value="2022" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Masukkan tahun terbit" required >
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
