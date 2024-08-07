<?php
session_start();
include '../../connect/connect.php';
$sql = $db->prepare("select * from admin,sign_in");
$sql->execute();
$x = $sql->fetch(PDO::FETCH_ASSOC);
if (isset($_SESSION['user'])) {

} else {
  echo "<script> alert ('Sesionunuz  artığ bitdi.')</script>";
  header("refresh:1, ../pages/Sign-in.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>
    <?= $x["ad_title"] ?>
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
  <style>
    .custom-avatar {
      width: 180px;
      height: 150px;
    }

    .table td {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 200px;
      /* İhtiyacınıza göre genişliği ayarlayabilirsiniz */
    }

    .form-control {
      border: none;
      border-radius: 0;
      /* Opsiyonel: Kenar yuvarlanmasını kaldırır */
      box-shadow: none;
      /* Opsiyonel: Gölgeyi kaldırır */
    }

    /* Input alanlarına odaklandığında kenarlığın olmaması için */
    .form-control:focus {
      box-shadow: none;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">