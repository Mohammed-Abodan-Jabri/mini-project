

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->
    <title>Doctor</title>
    <!-- -->
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link href="mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.css">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <!-- -->
</head>

<body >
    <!-- header -->
    <?php require('./layout/header.php'); ?>
  
    <!--  end header-->

      <!-- ======= Hero Section ======= -->


<!-- End Hero -->

    <!-- main -->
    <main class="main-container mt-5">
       
    
  <!-- ======= Add Clinics ======= -->
  <section id="appointment" class="appointment section-bg">
    <div class="container">

      <div class="section-title">
        <h2>اضــف تفاصيل العيادة</h2>
      </div>
      <form action="app.php" method="post" enctype="multipart/form-data">
       <div class="row">
        <input type="hidden" value="create" name="clinics">
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="text" class="form-control" name="clinicName"  placeholder="اسم العيادة"  >
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="file" class="form-control" name="path"  >
        </div>
       </div>
       <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="تفاصيل اكثر"></textarea>
        <div class="validate"></div>
      </div>
       <button type="submit" class="btn btn-primary"> ارسال</button>
      </form>

    </div>
  </section><!-- End Appointment Section --> 

       
     

      
        
    </main>
   

    <!-- footer -->
  <?php  require ('./layout/footer.php'); ?>
  <!-- end footer -->


</body>
<script src="./jquery-3.7.1.min.js"></script>
<script src="./bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</html>