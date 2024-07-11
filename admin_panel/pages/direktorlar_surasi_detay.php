<?php
include '../includes/header.php';
if (isset($_POST['update'])) {
    $uploadsDir = '../assets/img';

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
    $sql = $db->prepare('UPDATE `direktorlar_surasi` SET `sekil` = ?, `ad` = ?, `hazirki_vezife` = ?, `e-mail` = ? WHERE  `direktorlar_surasi`.`id` = ?');
    $params = [
        $picUrl,
        $_POST['ad'],
        $_POST['hazirki_vezife'],
        $_POST['e-mail'],
        $_POST['id']
    ];

    // Sorguyu çalıştır
    $sql->execute($params);

    // Başarılı yönlendirme
    header("Location: direktorlar_surasi.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $loop = $db->prepare("SELECT * FROM `direktorlar_surasi` WHERE id=:id");
    $loop->execute([':id' => $id]);
    $result = $loop->fetch(PDO::FETCH_ASSOC);
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
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-8 me-7">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="direktorlar_surasi.php">Direktorlar Şurası</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Direktorlar Şurası Detayı</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Direktorlar Şurası  Detayı</h6>
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
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-2">
                            <h6 class="text-white text-capitalize ps-4">Buradan istədiyiniz şəkildə düzəldə
                                bilərsiniz</h6>
                        </div>
                    </div>

                    <div class="card m-4">
                        <div class="card-body">
                            <img src="../<?= $result['sekil'] ?>" alt="" class="col-4">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                <input type="hidden" name="current_sekil"
                                    value="<?= htmlspecialchars($result['sekil']) ?>">
                                <div class="form-group row mb-3">
                                    <label for="adminpic" class="col-sm-2 col-form-label form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="sekil" placeholder="Search...">
                                    </div>
                                </div>
                                <div class="form-group col-md-4"> Adı
                                    <div class="input-group input-group-lg input-group-outline my-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control form-control-lg" name="ad"
                                            value="<?= $result['ad'] ?>">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">Vəzifəsi
                                    <div class="input-group input-group-lg input-group-outline my-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control form-control-lg" name="hazirki_vezife"
                                            value="<?= $result['hazirki_vezife'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">E-maili
                                    <div class="input-group input-group-lg input-group-outline my-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control form-control-lg" name="e-mail"
                                            value="<?= $result['e-mail'] ?>">
                                    </div>
                                </div>

                                <button type="submit" name="update" class="btn btn-success">Dəyişiklik et</button>

                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <?php
        include '../includes/footer.php';
        ?>
</main>
<?php
include '../includes/parametr.php';
?>