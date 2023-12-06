<?php

const url = './assets/images/';
const targetDir = 'uploads_images/';
require_once( 'core/database.php' );

$db_server = 'localhost';
$db_user = 'root';
$db_user_pass = '';
$db_name = 'doctorak';
$connection = db_connect( $db_server, $db_user, $db_user_pass, $db_name );

$data = db_select( $connection, 'clinics' );
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<!-- -->
<title>Clinics</title>
<!-- our project just needs Font Awesome Solid + Brands -->
<link href = 'mystyle.css' rel = 'stylesheet'>
<link rel = 'stylesheet' href = 'bootstrap-5.3.2/dist/css/bootstrap.css'>
<link href = './assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css' rel = 'stylesheet'>
<link href = './assets/vendor/fontawesome-free-6.4.2-web/css/brands.css' rel = 'stylesheet'>
<link href = './assets/vendor/fontawesome-free-6.4.2-web/css/solid.css' rel = 'stylesheet'>
<!-- -->
</head>

<body>

<!-- header -->

<header>
<nav class = 'navbar navbar-expand-lg bg-whie nnnnnn '>
<div class = 'container-fluid'>
<div class = 'navbar-brand d-flex  align-items-center '>

<img class = 'main-image' src = 'assets/images/logo_1.png' width = '75' height = '75' alt = 'logo'>
<div class = 'search-box d-flex me-3'>
<button name = '' type = 'submit'> <i class = 'fa fa-search'></i></button>
<input type = 'text' class = 'form-control' placeholder = 'ابحث عن ..'>
</div>
</div>
<button class = 'navbar-toggler text-white ' type = 'button' data-bs-toggle = 'collapse'
data-bs-target = '#navbarSupportedContent' aria-controls = 'navbarSupportedContent'
aria-expanded = 'false' aria-label = 'Toggle navigation'>
<span  class = 'navbar-toggler-icon '></span>
</button>
<div class = 'collapse navbar-collapse' id = 'navbarSupportedContent'>
<ul class = 'navbar-nav  mx-auto mb-2 mb-lg-0'>
<li>
<a class = 'link' href = 'index.html'>
<i class = 'fa fa-home'></i>
الرئيسية
</a>
</li>
<li>
<a class = 'link' href = ''>
<i class = 'fa-solid fa-briefcase-medical'></i>
العيـادات
</a>
</li>
<li>
<a class = ' link' href = 'displayDoctors.php'>
<i class = 'fa-solid fa-user-doctor'></i>
الدكاترة
</a>
</li>
<li>
<a class = 'link' href = './addClinics.html'>
<i class = 'fa fa-add'></i>
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
<form class = 'd-flex flex-wrap'>
<button class = 'btn bg-gray font-m them-btn them-btn-log ms-3 ' type = 'submit'>دخول</button>
<button class = 'btn  them-btn them-btn-reg' type = 'submit'>حساب جديد</button>
</form>
</div>

</div>
</nav>
</header>
<!--  end header-->
<!-- End Hero -->
<!-- main -->
<main class = 'main-container mt-5 '>
<!-- Departments? -->
<section class = 'container bg-white mt-0 pe-0 '>
<section class = 'font-m container  p-0 '>
<div class = '  container '>
<div style = 'border-radius: 10px 10px 10px 10px !important;'  class = 'container   title-clinics   mb-3 '>
<p class = ' center-title font-m  mt-0 font-m'>
<span class = 'fs-3 ms-3 mt-1'> <img src = './assets/images/dm.png' width = '120' alt = ''></i></span>
جميع العيادات التخصصية:
</p>
</div>

<div class = 'row g-4'>
<?php foreach ( $data as $value ) {
    ?>
    <div class = 'col-md-4  col-sm-12 mb-3'>
    <div class = 'card-clinic ' >
    <img style = 'height: 240px;' src = <?php echo "'".targetDir.$value[ 'image' ]."'" ?> class = 'card-img-top img-fluid'>
    </div>
    <h3  class = 'text-center mt-3 '><?php echo ''.$value[ 'name' ].'' ?></h3>
    </div>
    <?php }
    ?>
    </div>
    </div>
    </section>
    </section>
    </main>
    <footer class="footer">
            <p>  جميع الحقوق محفوظة  <i id="copyright" class="fa far fa-copyright"></i>دكتوري 2023</p>
          
       </footer>

    </body>
    <script src = './jquery-3.7.1.min.js'></script>
    <script src = './bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js'></script>
    </html>