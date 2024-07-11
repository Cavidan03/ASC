<?php
session_start();
include '../connect/connect.php';
$sql = $db->prepare("select * from admin,esas_sehife");
$sql->execute();
$x = $sql->fetch(PDO::FETCH_ASSOC);

if (isset($_SESSION['user'])) {

} else {
  echo "<script> alert ('Belə bir user yoxdur!')</script>";
  header("Refresh:0.5, ./pages/Sign-in.php");
}

if (isset($_POST['update'])) {
  $uploadsDir = './assets/img';

  // Yüklemeler dizini yoksa oluştur
  if (!is_dir($uploadsDir)) {
    mkdir($uploadsDir, 0777, true);
  }

  // Geçici dosya adı ve asıl dosya adı
  $tmp_name = $_FILES['sekil']['tmp_name'];
  $name = basename($_FILES['sekil']['name']);
  $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
  $fileExtension = pathinfo($name, PATHINFO_EXTENSION);

  // Resim yüklenmişse işlemleri yap
  if (!empty($tmp_name) && in_array(strtolower($fileExtension), $allowedExtensions)) {
    // Benzersiz dosya adı oluştur
    $uniqueName = uniqid() . '.' . $fileExtension;
    $picPath = "$uploadsDir/$uniqueName";

    // Dosyayı yükle
    if (move_uploaded_file($tmp_name, $picPath)) {
      // Veritabanı için dosya yolu
      $picUrl = "assets/img/$uniqueName";
    } else {
      echo "Dosya yüklenirken bir hata oluştu.";
      exit();
    }
  } else {
    // Resim yüklenmemişse mevcut resmi kullan
    $picUrl = $_POST['current_sekil'];
  }

  // Veritabanı güncelleme sorgusu
  $sql = $db->prepare('UPDATE `esas_sehife` SET `loqo` = ?, `facebook` = ?, `twitter` = ?, `youtube` = ?, `instagram` = ?');
  $params = [
    $picUrl,
    $_POST['facebook'],
    $_POST['twitter'],
    $_POST['youtube'],
    $_POST['instagram']
  ];

  // Sorguyu çalıştır
  $sql->execute($params);

  // Başarılı yönlendirme
  header("Location: Main.php");
  exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    <?= $x["ad_title"] ?>
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="Main.php" target="">
        <img src="<?= $x["ad_logo"] ?>" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">
          <?= $x["ad_name"] ?>
        </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="Main.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Ana Səhifə</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/idare_heyet.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">İdarə Heyəti</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/direktorlar_surasi.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Direktorlar Şurası</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Xeber.php">
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
          <a class="nav-link text-white " href="./pages/Profile.php">
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Main</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Əsas Səhifə</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Əsas Səhifə</h6>
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
              <li><a class="dropdown-item" href="./pages/Logout.php">Çıxış</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-2">
              <h6 class="text-white text-capitalize ps-4">Buradan əsas səhifəni istədiyiniz şəkildə duzəldə bilərsiniz
              </h6>
            </div>
          </div>

          <div class="card m-4">
            <div class="card-body">
              <img src="./<?= $x['loqo'] ?>" alt="" class="col-4">
              <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="current_sekil" value="<?= htmlspecialchars($x['loqo']) ?>">
                <div class="form-group row mb-3">
                  <label for="adminpic" class="col-sm-2 col-form-label form-label"></label>
                  <div class="col-sm-10">
                    <input type="file" name="sekil" placeholder="Search...">
                  </div>
                </div>
                <div class="form-group col-md-4"> Facebook
                  <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label"></label>
                    <input type="text" class="form-control form-control-lg" name="facebook" value="<?= $x['facebook'] ?>">
                  </div>
                </div>

                <div class="form-group col-md-4">Twitter
                  <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label"></label>
                    <input type="text" class="form-control form-control-lg" name="twitter"
                      value="<?= $x['twitter'] ?>">
                  </div>
                </div>
                <div class="form-group col-md-4">Youtube
                  <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label"></label>
                    <input type="text" class="form-control form-control-lg" name="youtube" value="<?= $x['youtube'] ?>">
                  </div>
                </div>
                <div class="form-group col-md-4">Instagram
                  <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label"></label>
                    <input type="text" class="form-control form-control-lg" name="instagram"
                      value="<?= $x['instagram'] ?>">
                  </div>
                </div>

                <button type="submit" name="update" class="btn btn-success">Dəyişiklik et</button>

              </form>
            </div>
          </div>


        </div>
      </div>



      <?php
      include 'includes/Footer.php'
        ?>
    </div>

  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Admin Panel</h5>
          <p>Panel seçimlərimizə baxın.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Yan Panel Rəngləri</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav növü</h6>
          <p class="text-sm">2 fərqli sidenav növü arasından seçim edin.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
            onclick="sidebarType(this)">Qara</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
            onclick="sidebarType(this)">Şəffaf</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">Ağ</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Sidenav növünü yalnız masaüstü görünüşündə dəyişə bilərsiniz.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbarı Düzəlt</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">İşıqlı / Qaranlıqlı</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="w-100 text-center">
          <h6 class="mt-3">Bizi seçdiyiniz üçün təşəkkür edirik!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Paylaş
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        },],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>