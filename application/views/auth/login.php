<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perpustakaan SDN 04 Minas Jaya</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
<?php if($this->session->flashdata('flash') === 'loginFailed') { ?>
					<script>alert('Username/password salah')</script>
			<?php } ?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
								<div class="text-center my-5">
								<img width="200px" src="<?= base_url('assets'); ?>/img/logo.png" />
                    <h1 style="color: black; font-weight: bold;" class="h4 my-1 mb-3">SELAMAT DATANG 
											<br/>DI PERPUSTAKAAN SDN 04 MINAS JAYA
										</h1>
                  </div>

        <div style="max-width: 450px;" class="card bg-secondary o-hidden border-0 shadow-lg my-1 mx-auto">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 ">
                <div class="p-5">
                  <form method="post" action="<?= base_url('auth'); ?>" class="user">
                    <div class="form-group">
                      <input style="color: black" type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input style="color: black" type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                    </div>
                    <button style="font-weight: bold; color: black;" type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                      MASUK
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>
