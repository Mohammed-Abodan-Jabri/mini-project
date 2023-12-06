<?php

const url='./assets/images/';
const targetDir = "uploads_images/";
require_once('core/database.php');

$db_server = "localhost";
$db_user = "root";
$db_user_pass = "";
$db_name = 'doctorak';
$connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);

$data= db_select($connection,"doctors");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->
    <title>Doctor</title>
    <!-- -->
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link href="./mystyle.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.css">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <!-- -->
</head>
<body> 
  
  <!-- header -->

  <header>
    <nav class="navbar navbar-expand-lg bg-whie nnnnnn ">
        <div class="container-fluid">
            <div class="navbar-brand d-flex  align-items-center  ">
                
                    <img class="main-image" src="assets/images/logo_1.png" width="75" height="75" alt="logo">
                <div class="search-box d-flex me-3">
                    <button name="" type="submit"> <i class="fa fa-search"></i></button>
                    <input type="text" class="form-control" placeholder="ابحث عن ..">
                </div>
            </div>
            <button class="navbar-toggler text-white " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span  class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mx-auto mb-2 mb-lg-0">
                    <li>
                        <a class="link" href="index.html">
                            <i class="fa fa-home"></i>
                            الرئيسية
                        </a>
                    </li>
                    <li>
                        <a class="link" href="clinics.php">
                            <i class="fa-solid fa-briefcase-medical"></i>
                            العيـادات
                        </a>
                    </li>
                    <li>
                        <a class=" link" href="displayDoctors.php">
                            <i class="fa-solid fa-user-doctor"></i>
                            الدكاترة
                        </a>
                    </li>
                    <li>
                        <a class="link" href="./addClinics.html">
                            <i class="fa fa-add"></i>
                            اضافة عيادة  
                        </a>
                    </li>
                    <li>
                        <a class="link" href="./addDoctors.php">
                        <i class="fa-solid fa-stethoscope"></i>
                            اضافة دكتور
                        </a>
                        </li>
                        <li>
                            <a class=" link" href="./times.php">
                                <i class="fa-solid fa-calendar-days"></i>
                                مـواعـيد
                            </a>
                        </li>

                </ul>
                <form class="d-flex flex-wrap">
                    <button class="btn bg-gray font-m them-btn them-btn-log ms-3 " type="submit">دخول</button>
                    <button class="btn  them-btn them-btn-reg" type="submit">حساب جديد</button>
                </form>
            </div>

        </div>
    </nav>
</header>
<!--  end header-->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">
  
          <div class="section-title ">
            <h2 class="font-m">جمـيع الدكاترة</h2>
            <p>
              هنا نستعرض لك افضل الدكاترة على مستوى محافظة حضرموت بجميع التخصصات المختلفة ... 
            </p>
            <p class="font-m fs-4">
             ,,,, نتمنى لك دواااام الصــحة والعافــية ,,,,
                </p>
          </div>
  
          <div class="row">

                        <?php foreach($data as $value){ ?>
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src=<?php echo "'".targetDir.$value['image']."'" ?> class="img-fluid" alt=""></div>
                <div class="member-info me-3 mt-3">
                  <h4><?php echo 'د. : '."".$value['fullname']."" ?></h4>
                  <span><?php echo 'التخـصـص : '."".$value['dept']."" ?></span>
                  <p class="fw-bold"><?php echo 'المستـشفـى : '."".$value['hospital']."" ?></p>
                  <div class="social">
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""> <i class="fa-brands fa-linkedin-in"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>

         
  
          </div>
  
        </div>
      </section><!-- End Doctors Section -->

      <footer class="footer">
            <p>  جميع الحقوق محفوظة  <i id="copyright" class="fa far fa-copyright"></i>دكتوري 2023</p>
          
       </footer>

    </body>
    <script src="./jquery-3.7.1.min.js"></script>
    <script src="./bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
    </html>