<?php
include '../includes/header.php';
$sql = $db->prepare("SELECT * FROM `e-müraciet`");
$sql->execute();
$x = $sql->fetch(PDO::FETCH_ASSOC);
?>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->

<?php
$sql3 = $db->prepare("SELECT * FROM `esas_sehife`");
$sql3->execute();
$e = $sql3->fetch(PDO::FETCH_ASSOC);
?>
  <header class="background_header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a href="index.php"><img class="logo_img" src="../../admin_panel/<?= $e['loqo'] ?>" alt="Logo"></a>
        <button class="navbar-toggler bg-transparent" type="button" data-toggle="collapse"
          data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Haqqımızda
              </a>
              <div class="dropdown-menu text-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="idare_haqq.php">İdarəedici qurum haqqında</a>
                <a class="dropdown-item text-dark" href="idare_heyet.php">İdarə heyəti</a>
                <a class="dropdown-item text-dark" href="direktorlar_surasi.php">Direktorlar şurası</a>
                <a class="dropdown-item text-dark" href="struktur.php">Təşkilati struktur</a>
                <a class="dropdown-item text-dark" href="hedef.php">Missiya və hədəflərimiz</a>
                <a class="dropdown-item text-dark" href="nizamname.php">Nizamnamə</a>
                <a class="dropdown-item text-dark" href="hesabat.php">Hesabatlar</a>


              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Məhsullarımız
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="heyvandarliq.php">Heyvandarlıq</a>
                <a class="dropdown-item" href="bitkicilik.php">Bitkiçilik</a>
                <a class="dropdown-item" href="akvakultura.php">Akvakultura</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="faq.php">FAQ</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link text-dark" href="xəbərlər.php">Xəbərlər</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-dark" href="e-muraciet.php">E-Müraciət</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="background-image"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1> E-Müraciət</h1>
          <span>
            <a href="index.php">ASC</a>
            <i class="fa-solid fa-angle-right"></i>
            E-Müraciət
          </span>
        </div>
      </div>
    </div>
  </div>



  <div class="contact-information">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-phone"></i>
            <h4>Telefon</h4>
            <p>Bu telefon nömrəsi ilə bizə asanlıqla müraciət edə bilərsiz.</p>
            <a href="https://asf.gov.az/tel:1651" target="_blank"><?= $x['asm_əlaqə'] ?></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <h4>E-mail</h4>
            <p>Bu e-mail vasitəsi ilə bizə mesaj və ya rəylərinizi bildirə bilərsiniz.</p>
            <a href="mailto:office@agro-insurance.az"><?= $x['asm_email'] ?></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <h4>Ünvan</h4>
            <p>Bakı şəhəri, Xətai rayonu<br>Nobel Prospekti 175.</p>
            <a href="<?= $x['asm_ünvan'] ?>" target="_blank">Google Map ilə bax</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="callback-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Əlaqə <em>formu</em></h2>
            <span>Sual və təklifləriniz üçün aşağıdakı formu doldurub göndərin!</span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="#" method="POST">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="full_name" type="text" class="form-control" id="name" placeholder="Tam Ad" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*"
                      placeholder="E-Mail" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Mövzu" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mesaj"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="submit" value="submit" id="form-submit" class="border-button">Mesaj
                      Göndər</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;

  require '../vendor/autoload.php';



  if (isset($_POST['submit'])) {


    $mail = new PHPMailer(true);



    try {
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth = true;                                   //Enable SMTP authentication
      $mail->Username = 'nasirofjavidan@gmail.com';                     //SMTP username
      $mail->Password = 'czmy josc xzav noac';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
      $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
  
      $mail->setFrom($_POST['email'], $_POST['full_name']);
      $mail->addAddress('nasirofjavidan@gmail.com');     //Add a recipient
  

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $_POST['subject'];
      $mail->Body = $_POST['message'];


      $mail->send();
      echo "<script> alert('Message has been sent. Plesa check your email')</script>";


    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

  }
  ?>
  <div id="map">

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.9088719814569!2d49.92815196965997!3d40.372606119933586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d7ea17b179b%3A0x6ca1e7ab590463cf!2zQXFyYXIgc8SxxJ9vcnRhIGZvbmR1!5e0!3m2!1str!2sus!4v1717208690917!5m2!1str!2sus"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="partners contact-partners">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-partners owl-carousel">
            <div class="partner-item">
              <img src="assets/images/client-01.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>