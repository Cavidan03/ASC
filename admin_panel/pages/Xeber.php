<?php
include '../includes/Header.php';

if (@$_GET['del']) {
  $del = $db->prepare('DELETE FROM `xeber` WHERE `xeber`.`id` = ?');
  $del->execute([$_GET['del']]);

  header('Location:Xeber.php');
  exit();

}
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
        <?= $x['ad_name'] ?>
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
        <a class="nav-link text-white active bg-gradient-primary" href="Xeber.php">
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
        <a class="nav-link text-white " href="Profile.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Profilim</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">

    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Xəbərlər</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Xəbərlər</h6>
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
            <li><a class="dropdown-item" href="Logout.php">Çıxış</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid py-4">


    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Buradan istədiyiniz dəyişikləri edə bilərsiniz</h6>
            </div>
          </div>


          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <a href="Xeber-yukle.php" class="btn btn-success">Xəbər əlavə et</a>

                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-14">Şəkil</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-14 ps-2">Baslıq</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-14">Alt
                      Başlıq</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-14">Məzmun
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-14">Tarix
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs  opacity-14">Status
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>


                <tbody>

                  <?php

                  $loop = $db->prepare("SELECT * FROM `xeber`");
                  $loop->execute([]);
                  while ($x = $loop->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../<?= $x['sekil'] ?>" class="avatar custom-avatar border-radius-lg" alt="user1">
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $x['basliq'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $x['alt_basliq'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $x['mezmun'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $x['tarix'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $x['status'] ?></span>
                      </td>
                      <td class="align-middle mr-2">
                        <a href="xeber-detay.php?id=<?=$x['id']?>"
                          class="btn btn-info">Düzəlt</a>

                        <a href="?del=<?= $x['id'] ?>" onclick="return confirm('Bu Xəbər Silinsinmi?')"
                          class="btn bg-gradient-danger">Sil</a>
                      </td>

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <?php
  include '../includes/footer.php'
    ?>
</main>
<?php
include '../includes/parametr.php'
  ?>