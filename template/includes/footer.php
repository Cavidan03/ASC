<style>
  /* Userway widget'ını sayfanın alt kısmına taşımak için */
  #userwayAccessibilityWidget {
    position: fixed !important;
    bottom: 10px !important;
    /* Sayfanın altından mesafe */
    left: 10px !important;
    /* Sayfanın sağından mesafe */
    z-index: 1000 !important;
    /* Diğer öğelerin üstünde olması için */
  }


  .footer {
    background-color: transparent;
    padding: 20px 0;
  }

  .footer .container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
  }

  .footer .logo {
    margin-bottom: 20px;
  }

  .footer .social-icons {
    margin: 20px 0;
  }

  .footer .social-icon {
    color: #727272;
    font-size: 23px;
    font-weight: 600;
    margin: 0 10px;
  }

  @media (max-width: 768px) {
    .footer .social-icon {
      margin: 10px 5px;
    }

    .footer .logo {
      margin-bottom: 10px;
    }
  }
</style>
<?php
$footer = $db->prepare("SELECT * FROM `esas_sehife`");
$footer->execute();
$c = $footer->fetch(PDO::FETCH_ASSOC);
?>

<!-- Footer Starts Here -->
<div class="footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-xs-12 logo">
        <a href="index.php"><img height="113" width="210" src="../../admin_panel/<?= $c['loqo'] ?>" alt="Logo"></a>
      </div>
      <div class="col-md-6 col-xs-12 social-icons">
        <a href="<?= $c['facebook'] ?>" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="<?= $c['twitter'] ?>" class="social-icon"><i class="fa-brands fa-square-twitter"></i></a>
        <a href="<?= $c['youtube'] ?>" target="_blank" class="social-icon"><i
            class="fa-brands fa-square-youtube"></i></a>
        <a href="<?= $c['instagram'] ?>" class="social-icon"><i class="fa-brands fa-square-instagram"></i></a>
      </div>
    </div>
    <hr style="border-width: 2px; color: c8cbcc; margin-top: 10px;">
    <div class="row">
      <div class="col-12">
        <p>
          <script>
            document.write(new Date().getFullYear())
          </script> &copy; Made with by <strong>Nasirov</strong> for a better web.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="../assets/js/custom2.js"></script>
<script src="../assets/js/owl.js"></script>
<script src="../assets/js/slick.js"></script>
<script src="../assets/js/accordions.js"></script>

<script language="text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t) {
    if (!cleared[t.id]) {
      cleared[t.id] = 1;
      t.value = '';
      t.style.color = '#fff';
    }
  }
</script>
</body>

</html>