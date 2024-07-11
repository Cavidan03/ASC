<?php
include '../includes/header.php';
$sql = $db->prepare("SELECT * FROM  `esas_sehife`");
$sql->execute();
$x = $sql->fetch(PDO::FETCH_ASSOC);
?>

<style>
  .row a h5 {
    font-family: 'Roboto', sans-serif !important;
    font-size: 1.198rem !important;
    font-weight: 750;
    letter-spacing: .0073529412em !important;
    color: black;
  }

  .collapse h5 {
    font-size: 17.5px;
    font-weight: 600;
    color: #1e1e1e;
    margin-top: 34px;
  }

  .collapse p {
    font-family: "Roboto", sans-serif !important;
    font-size: .995rem !important;
    font-weight: 530;
    letter-spacing: .5px;
    line-height: 1.45rem;
    margin-top: 15px;
    color: black;

  }

  .collapse ol {

    font-family: "Roboto", sans-serif !important;
    font-size: .995rem !important;
    font-weight: 530;
    letter-spacing: .5px;
    line-height: 1.45rem;

  }

  .collapse ol li {
    font-weight: 520;
    margin-top: 15px
  }

</style>

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


  <header class="background_header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a href="index.php"><img class="logo_img" src="../../admin_panel/<?= $x['loqo'] ?>" alt="Logo"></a>
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
            <li class="nav-item active">
              <a class="nav-link text-dark" href="faq.php">FAQ</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link text-dark" href="xəbərlər.php">Xəbərlər</a>
            </li>
            <li class="nav-item">
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
          <h1> Tez-tez soruşulan suallar</h1>
          <span>
            <a href="index.php">ASC</a>
            <i class="fa-solid fa-angle-right"></i>
            FAQ
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="width:100%;">

    <div class="head" style="padding:75px">
      <h2 style="font-family: ' Roboto', sans-serif !important; font-size: 2.125rem !important; font-weight:
        750; letter-spacing: .0073529412em !important;">Tez-tez soruşulan suallar </h2>

      <div class="text">

        <div class="row" style="margin:27px;">
          <a data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex;">
            <h5>
              Aqrar sigorta nədir?</h5>
            <i class="fa-solid fa-caret-down" style="color:black;margin-left:698px"></i>
          </a>
          <div class="collapse" id="collapseExample1">
            <h5>Aqrar sığorta – kənd təsərrüfatı məhsullarını və
              aktivlərini
              müxtəlif risklərdən qorumaq üçün
              sığorta mexanizmidir.</h5>
            <p>Buraya əkin sahələri, məsələn, taxıl əkinləri, meyvə bağları, bostan bitkiləri və sair, eləcə
              də kənd
              təsərrüfatı heyvanları və balıqçılıq məhsulları aiddir.</p>
            <p>Azərbaycanda aqrar sığorta mexanizmi «Aqrar sığorta haqqında» qanun və Aqrar Sığorta Fondunun
              yaradılması
              haqqında Azərbaycan Prezidenti İlham Əliyevin 19 avqust 2019-cu il tarixli fərmanı ilə
              tənzimlənir.</p>
            <p>Qanuna əsasən, fermer və təsərrüfat sahibləri sığorta haqqı ödəməklə əkin sahəsini və
              təsərrüfatını Aqrar
              Sığorta Fondu vasitəsilə sığorta edir. Sığorta hadisəsi baş verdikdə isə təsərrüfata dəyən
              zərər Fond
              tərəfindəndən fermerə ödənilir.</p>
            <h5>Aqrar sığorta mexanizmi dövlət dəstəklidir, yəni sığorta
              haqqının
              50%-ni fermerlərə dəstək üçün
              dövlət özü ödəyir. Bu səbəbdən də aqrar sığorta haqqı kiçik və fermerlər üçün
              əlçatandır</h5>
          </div>
        </div>

        <div class="row" style="margin:27px;width:100%; margin-top:30px">
          <a data-bs-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex">
            <h5>
              Aqrar sığorta vasitəsilə nələri sığortalamaq mümkündür?

            </h5>
            <i class="fa-solid fa-caret-down" style="margin-left:357.5px;color:black"></i>
          </a>
          <div class="collapse" id="collapseExample2" style="margin-top:15px;">
            <p>Aqrar sığota ilə kənd təsərrüfatı bitkiləri və bitkiçilik məhsulları, kənd təsərrüfatı
              heyvanları və
              akvakultura məhsulları sığorta edilir.</p>
            <p>NK-nin 17 dekabr 2019-cu il tarixli 479 nömrəli Qərarı ilə təsdiq edilmiş «Aqrar sığorta
              predmetinin
              Tərkibi»nə əsasən aqrar sığorta predmetləri aşağıdakılardır:<br>Kənd təsərrüfatı bitkiləri
              və bitkiçilik
              məhsulları üzrə:<br>1. buğda;<br>2. arpa;<br>3. qarğıdalı;<br>4. kartof<br>5. şəkər
              çuğunduru;<br>6.
              portağal;<br>7. limon;<br>8. naringi;<br>9. çay;<br>10. çəltik;<br>11. tütün;<br>12.
              üzüm;<br>13.
              fındıq;<br>14. pambıq;<br>15. günəbaxan;<br>16. soya;<br>17. yonca;<br>18. noxud;<br>19.
              yaşıl
              noxud;<br>20. alça;<br>21. albalı;<br>22. alma;<br>23. armud;<br>24. çiyələk;<br>25.
              ərik;<br>26.
              gavalı;<br>27. gilas;<br>28. heyva;<br>29. xurma;<br>30. nar;<br>31. şaftalı;<br>32.
              zeytun;<br>33.
              badam;<br>34. qoz;<br>35. soğan;<br>36. kələm;<br>37. qarpız;<br>38. yemiş (qovun);<br>39.
              pomidor;<br>40.
              sarımsaq;<br>41. darı.</p>
          </div>
        </div>

        <div class="row" style="margin:27px;width:100%">
          <a data-bs-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex">
            <h5>
              Aqrar sığorta heyvanları hansı hadisələrdən və risklərdən qoruyur?
            </h5>
            <i class="fa-solid fa-caret-down" style="margin-left:264.8px;color:black"></i>
          </a>
          <div class="collapse" id="collapseExample3" style="margin-top:15px;">
            <p>“Aqrar sığorta Qaydaları”na əsasən aşağıdakı risklərin baş verməsi nəticəsində sığortalanmış
              heyvanın
              ölümü təminat altına alınır:</p>
            <ol>
              <li>Nazirlər Kabinetinin 7 mart 2006-cı il tarixli 65 nömrəli və 2007-ci il 16 aprel tarixli
                66 nömrəli
                Qərarlarında göstərilmiş xəstəliklər istisna olmaqla, digər yoluxucu xəstəliklər;</li>
              <li>ilan və ya həşərat sancması;</li>
              <li>zəhərli otlar və ya yemlərdən zəhərlənmə;</li>
              <li>kimyəvi maddələrin təsirindən zəhərlənmə;</li>
              <li>təbii fəlakətlər (zəlzələ, torpaq sürüşməsi, qasırğa, fırtına və dolu);</li>
              <li>yanğın;</li>
              <li>vəhşi heyvanların hücumu;</li>
              <li>üçüncü şəxslərin hərəkətləri;</li>
              <li>əlavə sığorta haqqı ödəməklə - oğurluq, soyğunçuluq və quldurluq yolu ilə əldə edilməsi
                nəticəsində
                dəymiş zərərlərə də təminat verilə bilər.</li>
            </ol>
            <p>Yalnız qanunda nəzərdə tutulan tələblərə riayət olunmaqla saxlanılan, yemlənən, dezinfeksiya,
              dezinseksiya, deratizasiya edilən və peyvəndlənən heyvanlar sığortanın predmeti hesab
              olunur.&nbsp;</p>

          </div>
        </div>


        <div class="row" style="margin:27px;width:100%">
          <a data-bs-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex">
            <h5>
              Aqrar sığorta əkin sahələrini hansı hadisələrdən və risklərdən qoruyur?
            </h5>
            <i class="fa-solid fa-caret-down" style="margin-left:225.9px;color:black"></i>
          </a>
          <div class="collapse" id="collapseExample4">
            <p>Nazirlər Kabinetinin 30 oktyabr 2020-ci il tarixində təsdiq etdiyi “Aqrar sığorta
              Qaydaları”na əsasən
              aşağıda qeyd olunan risklər üzrə dəymiş zərərə təminat verilir:</p>
            <ol>
              <li>dolu;</li>
              <li>yanğın;</li>
              <li>zəlzələ;</li>
              <li>torpaq sürüşməsi;</li>
              <li>qasırğa;</li>
              <li>fırtına;</li>
            </ol>
            <p>6-1. sel və ya subasma;</p>
            <p>6-2. leysan;</p>
            <p>6-3. şaxtavurma (donvurma);</p>
            <p>6-4. normadan artıq yağan qar yağıntıları;</p>
            <ol start="7">
              <li>bitki xəstəlikləri və zərərvericiləri;</li>
            </ol>
            <p>7-1. vəhşi heyvanların hücumu;</p>
            <ol start="8">
              <li>xüsusi təhlükəli ziyanvericilərin yayılması və hücumu;</li>
              <li>üçüncü şəxslərin hərəkətləri.</li>
            </ol>
            <p>Bundan başqa, əlavə sığorta haqqı ödəməklə, bir sıra məhsullar üzrə dolu vurması nəticəsində
              keyfiyyət
              itkisinə də təminat verilə bilər. Bunlar - portağal, limon, naringi, üzüm, tütün, alça,
              albalı, alma,
              armud, çiyələk, ərik, gavalı, gilas, heyva, xurma, nar, şaftalı, zeytun, kələm, qarpız,
              yemiş (qovun) və
              pomidor bitkiləridir.</p>
            <p>Bundan başqa, əlavə sığorta haqqı ödəməklə, buğda, arpa və darı bitkilərinin dən hissəsi ilə
              yanaşı,
              gövdə hissəsində də yaranan itkiyə təminat verilə bilər.</p>
          </div>
        </div>

        <div class="row" style="margin:27px;width:100%">
          <a data-bs-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex">
            <h5>
              Aqrar sığorta balıqçılıq təsərüfatlarını hansı hadisələrdən və risklərdən qoruyur?
            </h5>
            <i class="fa-solid fa-caret-down" style="margin-left:144px;color:black"></i>
          </a>
          <div class="collapse" id="collapseExample5">
            <p>Nazirlər Kabinetinin 30 oktyabr 2020-ci il tarixli 431 nömrəli Qərarı ilə təsdiqlənmiş “Aqrar
              sığorta Qaydaları”na əsasən aşağıdakı risklər nəticəsində sığortalanmış balığın ölümü
              təminat altına alınır:</p>
            <ol>
              <li>kütləvi zəhərlənmə;</li>
              <li>təbii fəlakətlər (zəlzələ, torpaq sürüşməsi, qasırğa, fırtına, dolu, sel və ya subasma, ildırım və
                normadan artıq yağan qar yağıntıları);</li>
              <li>Nazirlər Kabinetinin 7 mart 2006-cı il tarixli 65 nömrəli və 2007-ci il 16 aprel tarixli 66 nömrəli
                Qərarlarında göstərilmiş xəstəliklər istisna olmaqla, digər yoluxucu xəstəliklər;</li>
              <li>vəhşi heyvanların hücumu;</li>
              <li>yanğının birbaşa və ya dolayısilə təsiri;</li>
              <li>üçüncü şəxslərin hərəkətləri.</li>
            </ol>
            <p>Qaydalara görə, hər bir balıq növü üzrə təminatın başlanma dövrləri Aqrar Sığorta Fondu tərəfindən
              müəyyən edilir.</p>
          </div>
        </div>


        <div class="row" style="margin:27px;width:100%">
          <a data-bs-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex">
            <h5>
              Müstəqil Aqrar sığorta eksperti hansı işlə məşğul olur?
            </h5>
            <i class="fa-solid fa-caret-down" style="margin-left:382px;color:black"></i>
          </a>
          <div class="collapse" id="collapseExample6">
            <p>Azərbaycanda dövlət dəstəyi ilə tətbiq olunan aqrar sığorta mexanizminin əsas elementlərindən biri də
              müstəqil aqrar sığorta ekspertləridir.</p>
            <p>Qanunvericiliyə əsasən, müstəqil aqrar sığorta ekspertləri təsərrüfatların yerləşdiyi bölgələrə gedərək
              həmin ərazidə risk və ya zərər qiymətləndirilməsi həyata keçirirlər.</p>
            <p>Hər hansı təsərrüfat (əkin sahələri, heyvandarlıq və ya balıqçılıq təsərrüfatı) aqrar sığorta vasitəsilə
              risklərini sığortalamaq üçün müraciət etdikdə, əvvəlcə müstəqil aqrar sığorta eksperti həmin təsərrüfata
              gedərək baxış keçirir, riskləri yerində qiymətləndirir və rəy verir.</p>
            <p>Təsərrüfatın sığortalanması barədə qərar ekspertin rəyi əsasında verilir.</p>
            <p>Bundan əlavə, sığortalanmış təsərrüfatlarda hər hansı zərər hadisəsi baş verdikdə müstəqil aqrar sığorta
              eksperti həmin təsərrüfata baxış keçirərək baş vermiş hadisəni müəyyən edir, onun səbəbini araşdırır və
              dəymiş zərəri hesablayır.</p>
            <p>Baş vermiş hadisəyə görə zərərin ödənilib-ödənilməməsi barədə qərar verilərkən zamanı nəzərə alınan vacib
              sənədlərdən biri də müstəqil ekspertin rəyidir.</p>
          </div>
        </div>


        <div class="row" style="margin:27px;width:100%">
          <a data-bs-toggle="collapse" href="#collapseExample7" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex">
            <h5>
              Müstəqil Aqrar sığorta eksperti olmaq üçün nə tələb olunur?
            </h5>
            <i class="fa-solid fa-caret-down" style="margin-left:333px;color:black"></i>
          </a>
          <div class="collapse" id="collapseExample7">
            <p>Aqrar sığorta xidməti ölkəmizdə yeni sahə olduğundan müstəqil aqrar sığorta eksperti fəaliyyəti ilə
              məşğul olmaq istəyən namizədlər Aqrar Sığorta Fondunun təşkil etdiyi təlimlərdə iştirak edirlər (1-ci
              addım).</p>
            <p>Qaydalara görə, aqrar sığorta eksperti olmaq üçün yalnız uyğun ixtisas üzrə təhsil almış şəxslər
              müraciət edə bilər (tələb olunan ixtisaslar - TAM SİYAHI).</p>
            <p>Aqrar Sığorta Fondunun təlimlərini müvəffəqiyyətlə başa vuran ekspertlər Dövlət İmtahan Mərkəzi
              tərəfindən təşkil edilmiş imtahana qatılırlar (2-ci addım).</p>
            <p>İmtahandan uğurla keçən namizədlər sertifikat almaq və Azərbaycan Mərkəzi Bankda müstəqil ekspert
              olaraq müvafiq reyestrə qeydiyyata düşmək üçün lazımi sənədləri taplayaraq təqdim edirlər (3-cü addım).
            </p>
            <p>Sertifikat alındıqdan və Mərkəzi Bankın reyestrində qeydiyyatdan keçdikdən sonra namizədlər Aqrar
              Sığorta Fondu ilə xidməti müqavilə bağlayaraq&nbsp; müstəqil ekspert kimi fəaliyyətə başlayırlar (4-cü
              addım).</p>
          </div>
        </div>


        <div class="row" style="margin:27px;width:100%">
          <a data-bs-toggle="collapse" href="#collapseExample8" aria-expanded="false" aria-controls="collapseExample"
            style="display:flex">
            <h5>
              Aqrar sığorta ekspertinin iş rejimi necədir?
            </h5>
            <i class="fa-solid fa-caret-down" style="margin-left:493px;color:black"></i>
          </a>
          <div class="collapse" id="collapseExample8">
            <p>Müstəqil aqrar sığorta ekspertləri xidməti Aqrar Sığorta Fondu ilə bağlanmış xidməti müqavilə əsasında
              fəaliyyət göstərirlər.</p>
            <p>Onlar öz əsas işlərindən əlavə olaraq bu sahədə sərbəst şəkildə çalışırlar. Başqa sözlə, əsasiş yeri olan
              mütəxəssislər də müstəqil aqrar sığorta eksperti olaraq bu sahədə xidməti müqavilə ilə fəaliyyət göstərə
              bilərlər.</p>
            <p>Müstəqil ekspert təsərrüfatların yerləşdiyi bölgələrə gedərək həmin ərazidə risk və ya zərər
              qiymətləndirilməsi həyata keçirirlər. Onların gedəcəkləri ərazilər - daxil olan sorğular əsasında
              formalaşır və həmin müraciətlər yerində qiymətləndirilməsi üçün müstəqil ekspertlərə yönləndirilir.</p>
            <p>Ekspertin işinin həcmi, ona daxil olan sorğuların sayından asılıdır. Ekspert tərəfindən həyata keçirilən
              risk və zərər qiymətləndirmələrinin sayı ona daxil olan sorğulardan asılıdır və bu rəqəm dəyişə
              bilər.&nbsp;</p>
          </div>
        </div>



      </div>
    </div>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const collapseButtons = document.querySelectorAll("[data-bs-toggle='collapse']");
      const collapseIcons = document.querySelectorAll(".fa-caret-down");

      collapseButtons.forEach(function (button, index) {
        button.addEventListener("click", function (event) {
          event.preventDefault();
          const targetCollapse = document.querySelector(button.getAttribute("href"));
          const isCollapsed = targetCollapse.classList.contains("show");
          if (isCollapsed) {
            targetCollapse.classList.remove("show");
            collapseIcons[index].classList.remove("fa-caret-up");
            collapseIcons[index].classList.add("fa-caret-down");
          } else {
            targetCollapse.classList.add("show");
            collapseIcons[index].classList.remove("fa-caret-down");
            collapseIcons[index].classList.add("fa-caret-up");
          }
        });
      });
    });
  </script>








  <?php
  include '../includes/footer.php';
  ?>