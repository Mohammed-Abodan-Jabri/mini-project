<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->
    <title>Doctorak</title>
    <!-- -->
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link href="assets/css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.css">
    <link href="assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
<!--    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">-->
    <!-- -->
</head>
<body>
    <!-- header -->
    
  <?php require('./layout/header.php'); ?>
    <!--  end header-->
      <!-- ======= Hero Section ======= -->

<!-- End Hero -->
    <!-- main -->
    <main class="main-container mt-5">
        <!-- main section -->
        <div class=" container home-slider mb-5 ">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-12 col-lg-5  ">
                    <p class="TiTle">
                        أهلا بك في نظام احجز دكتورك
                    </p>
                    <p class="paragraph-gray font-m">
                        هذا النظام خاص بالأطباء في مدينة المكلاء 
                     </p>
                    <div class="search mt-5">
                        <input type="text" name="search" placeholder="ابحث عن ما تريد">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="d-flex justify-content-around">
                        <button class="btn  me-4  them-btn them-btn-reg" type="submit">سجل الان </button>
                        <div class="d-flex align-items-center  ">
                            <i class="fas fa-play-circle fs-2"></i>
                            <span class="paragraph-gray me-3">شاهد الفيديو</span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-7 main-img  text-center">
                    <img src="./assets/images/logo-d.webp" class="w-75" alt="">
                </div>
            </div>
        </div>
            <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services mt-5 text-center">
        <div class="container  pt-1  pb-3  ">
            <h2 class="font-s center-title  bg-body font-m">
                <span class="fs-2 ms-3 mt-1"> <i class="fa-brands fa-servicestack"></i></span>
                خــدماتـنا الطبية : 
            </h2>
            <p class="paragraph-gray text-center">
                يتمتع دكتوري بالعديد من الأقسام المختلفه (المسابقات / الخدمات المصغره / المشاريع ) التى تلبي مختلف
                إحتياجاتك لتطوير أعمالك
            </p>
        </div>
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-center  mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h4 class="title"><a href="clinics.php">العيادات الطبية</a></h4>
                <p class="description">
                    هنا نوفر لك جميع العيادات والتخصصات الطبية التي تحتاجها وبامكانك التسجيل في اي عيادة ويمكنك اختيار الدكتور
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h4 class="title"><a href="">نـصائـح طبـية</a></h4>
                <p class="description">
                    هنا نوفر لك جميع العيادات والتخصصات الطبية التي تحتاجها وبامكانك التسجيل في اي عيادة ويمكنك اختيار الدكتور
                      </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"> <i class="fa-solid fa-stethoscope"></i></i></div>
                <h4 class="title"><a href="">اضــافة دكتــور</a></h4>
                <p class="description"> هنــا يمكنك من اضافة اي دكتور في مدينة المكلاء باختلاف تخصصاتهم ومستوياتهم العلمية  </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="fa fa-add"></i></div>
                <h4 class="title"><a href=""> اضــافة عيادة</a></h4>
                <p class="description">
                    هنــا يمكنك من اضافة اي تخصص  في مدينة المكلاء باختلاف المستشفيات  والدكاترة  
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- End Featured Services Section -->
        <!-- Departments? -->
    </main>

  <!-- footer -->

  <?php  require ('./layout/footer.php'); ?>
  <!-- end footer -->
</body>

<script src="./jquery-3.7.1.min.js"></script>
<script src="./bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>