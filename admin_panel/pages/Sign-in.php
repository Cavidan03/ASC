<?php
include '../../connect/connect.php';



session_start();

if (isset($_POST['signin'])) {
    $usarname = $_POST['usarname'];
    $password = $_POST['password'];

    // Fetch the stored hash for the provided username
    $request = $db->prepare("SELECT * FROM sign_in WHERE ad_usarname = ?");
    $request->execute([$usarname]);
    $user = $request->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and verify the password
    if ($user && password_verify($password, $user['ad_password'])) {
        $_SESSION['user'] = $usarname;
        // Store the hashed password in the session (optional, depending on your needs)
        $_SESSION['password'] = $user['ad_password'];
        $_SESSION['time'] = time() + 1000;
        echo header('Location: ../Main.php');
        die;
    } else {
        echo "<script> alert('Şifrəniz və ya Adınız yanlışdır. Təkrar cəhd edin!!') </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Admin Panel
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Giriş edin</h4>
                                    <div class="row mt-3">

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" class="text-start" method="POST">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Adınızı daxil edin</label>
                                        <input type="text" class="form-control" name="usarname" required placeholder="">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Şifrənizi girin</label>
                                        <input type="password" class="form-control" name="password" required
                                            placeholder="">
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Məni xatırla</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2"
                                            name="signin">Daxil ol
                                            </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
    <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>