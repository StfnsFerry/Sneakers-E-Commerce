<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sneakers Ecommerce User - Profile</title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url("sb-admin-2/vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
<link
  href="<?=base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css')?>"
  rel="stylesheet"
/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="<?= base_url('/user')?>"
        >
          <!-- <div class="sidebar-brand-icon">
            
          </div> -->
          <div class="sidebar-brand-text mx-3">Sneakers Commerce</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('/user')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Nav Item - Product -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/user/keranjang')?>">
            <i class="fas fa-solid fa-shopping-cart"></i>
            <span>Keranjang</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/user/pembelian')?>">
            <i class="fas fa-dollar-sign"></i>
            <span>Pemesanan</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/user/pengembalian')?>">
            <i class="fas fa-arrow-left"></i>
            <span>Pengembalian</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->

            <!-- Content Row -->
            <div class="card shadow mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">
                           <center>PROFILE</center>
                        </h6>
                        <!-- <button type="button" class="btn btn-dark" href="<?= base_url('user/editprofile') ?>">Edit Profile</button> -->
                        <a href="<?= base_url('user/editprofile') ?>" class="btn btn-dark">Edit Profile</a>
                        </div>
                        <div class="row">
                <div class="col-sm-6 profil">
                        <div class="profile-picture">
                        <img
                    src="<?= base_url();?>assets/img/<?= user()->user_image; ?>"
                  />
            </div>    
        </div>
            <div class="col-sm-35 username">
            <table align="center"
                    cellspacing="0">
                <tr>
                    <td><b>Username</b></td>
                    <td> <?= user()->username;?></td>
                </tr>
                <tr>
                    <td><b>Nama Lengkap</b></td>
                    <td> <?= user()->fullname;?></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>Perempuan</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td> <?= user()->email;?></td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>Bandar Jaya</td>
                </tr>
                <tr>
                    <td><b>No. Handphone</b></td>
                    <td> 085788663227 </td>
                </tr>
            </table>
            </div>
                    <!-- /.container-fluid -->
                    </div>
                </div>

        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Sneakers e-Commerce 2023</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-dark" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
</div>

    <!-- <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
            <div class="container mx-auto px-5 mt-1" style="margin-bottom: 100px !important;">
                <form action="<?= base_url('/user/profile/') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
             <?= csrf_field() ?>
                <div class="mb-3">
                    <label class="col-form-label fw-bold text-dark">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= user()->username;?>" ... >
                </div>
                <div class="mb-3">
                    <label class="col-form-label fw-bold text-dark">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= user()->fullname;?>">
                </div>
                <div class="mb-3">
                    <label class="col-form-label fw-bold text-dark">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= user()->email;?>">
                </div>
                 <div class="mb-3">
                    <label class="col-form-label fw-bold text-dark">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label class="col-form-label fw-bold text-dark">No. Handphone</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                </div> -->
                <!-- <div class="mb-3">
                    <label for="user_image" class="col-form-label fw-bold text-dark">Foto</label>
                    <input type="file" class="form-control" id="user_image" name="user_image" value="<?= user()->user_image;?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-dark">Simpan</button>
                </form>
           </div>
        </div>
      </div>
    </div> 
  </div>
</div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/datatables-demo.js')?>"></script>    
  </body>
</html>
