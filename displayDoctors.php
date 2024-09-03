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
    <link href="assets/css/mystyle.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.css">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <!-- -->
</head>
<body> 
  
  <!-- header -->

  <?php require('./layout/header.php'); ?>
 
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

     <!-- footer -->

  <?php  require ('./layout/footer.php'); ?>
  <!-- end footer -->

    </body>
    <script src="./jquery-3.7.1.min.js"></script>
    <script src="./bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
    </html>