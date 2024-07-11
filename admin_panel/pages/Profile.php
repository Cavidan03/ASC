<?php
ob_start();
include '../includes/Header.php';
?>

<aside
  class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="../Main.php" target="">
      <img src=".<?= $x["ad_logo"] ?>" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">
        <?= $x["ad_name"] ?>
      </span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="../Main.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Ana Səhifə</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="idare_heyet.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">İdarə Heyəti</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="direktorlar_surasi.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Direktorlar Şurası</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="Xeber.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
          </div>
          <span class="nav-link-text ms-1">Xəbərlər</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
          HESAB SƏHİFƏSİ</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  active bg-gradient-primary " href="Profile.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Profilim</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Profilim</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <div class="dropdown">
          <button class="btn bg-gradient-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user me-sm-1"></i>
            <?= $_SESSION['user'] ?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="logout.php">Çıxış</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid px-2 px-md-4">

    <div class="page-header min-height-300 border-radius-xl mt-4"
      style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">

      <div class="row">
        <div align="center">
          <h3>XOŞ GƏLDİNİZ
          </h3>
        </div>
      </div>

      <div class="card-body" align="left">
        <form method="GET">
          <div class="col-md-4">Ad
            <div class="input-group input-group-outline mb-3">
              <label class="form-label">
                <?= $_SESSION['user'] ?>
              </label>
              <input type="text" class="form-control" disabled>
            </div>
          </div>

          <div class="col-md-4">Şifrə
            <div class="input-group input-group-outline mb-3">
              <label class="form-label">
                *******
              </label>
              <input type="password" class="form-control" disabled>
            </div>
          </div>
        </form>
        <br>
        <p>
          <a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample" role="submit" aria-expanded="false"
            aria-controls="collapseExample">
            Parametrləri dəyişdirin
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <form method="POST">

            <div class="col-md-4">
              <div class="input-group input-group-lg input-group-outline my-3">
                <label class="form-label">Yeni adınızı girin</label>
                <input type="text" class="form-control form-control-lg" name="new_name" required>
              </div>
            </div>


            <div class="col-md-4">
              <div class="input-group input-group-lg input-group-outline my-5">
                <label class="form-label">Şifrənizi dəyişmək üçün əvvəlcə kimliyinizi doğrulayın</label>
                <input type="password" class="form-control form-control-lg" name="oldpass" required>

              </div>
            </div>


            <div class="col-md-4">
              <div class="input-group input-group-lg input-group-outline my-5">
                <label class="form-label">Yeni Şifrə giriniz</label>
                <input type="password" class="form-control form-control-lg" name="new_password" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group input-group-lg input-group-outline my-5">
                <label class="form-label">Girdiyiniz Şifrəni təsdiqləyin</label>
                <input type="password" class="form-control form-control-lg" name="confirmpass" required>
              </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg" name="changepass"> Parametrləri dəyişdirin</button>


          </form>
        </div>
      </div>
      <?php
      if (isset($_POST['changepass'])) {

        $usarname = $_POST['new_name'];
        $oldpass = $_POST['oldpass'];
        $password = $_POST['new_password'];
        $confirmpass = $_POST['confirmpass'];


        if ($oldpass == $_SESSION['password']) {

          if ($password == $confirmpass) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $change = $db->prepare("UPDATE sign_in SET ad_password=?, ad_usarname=? WHERE ad_password=?");
            $run = $change->execute([$hashed_password, $usarname, $_SESSION['password']]);
            if ($run) {
              echo "<script> alert('Şifrəniz Uğurla Dəyişdirildi. Zəhmət olmasa yenidən giriş edin') </script>";
              header("Refresh:1,Sign-in.php");


            } else {
              echo "<script> alert('Gozlənilməz bir xəta oldu.') </script>";
            }

          } else {
            echo "<script> alert('Girdiyiniz Yeni Şifrə və Təsdq Şifrəsi üst-üstə düşmür. Təkrar cəhd edin!!') </script>";
          }
        } else {
          echo "<script> alert('Girdiyiniz Şifrə yanlışdır. Təkrar cəhd edin!!') </script>";
        }
      }


      ?>

    </div>
  </div>

  <br><br><br>
  <?php
  include '../includes/footer.php'
    ?>
</div>
<?php
include '../includes/parametr.php'
  ?>