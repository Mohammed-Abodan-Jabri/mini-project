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
    <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.min.css">
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
                            <a class=" link" href="">
                                <i class="fa-solid fa-calendar-days"></i>
                                مواعيد
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
      <!-- ======= Hero Section ======= -->
<!-- End Hero -->
    <!-- main -->
    <main class="main-container mt-5">
        <table class="table  table-striped text-center">
            <thead >
                <tr >
                 <td>اليوم</td>
                <td>التاريخ</td>
                <td>الزمن</td>
                <td>الفترة</td>
                <td>الحجز</td>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>الأحـد</td>
                <td>2023/12/3</td>
                <td>من 8 الى 12</td>
                <td>صباحي</td>
                <td>
                <button class="btn btn-success bg-m" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">متـاح</button>
                     </td>
            </tr>
            <tr>
                <td>الاثنين</td>
                <td>2023/12/4</td>
                <td>من 8 الى 12</td>
                <td>صباحي</td>
                <td>
                    <button class="btn btn-danger">مكتمل</button>
                </td>
            </tr>
            <tr>
                <td>الثلاثاء</td>
                <td>2023/12/5</td>
                <td>من 8 الى 12</td>
                <td>صباحي</td>
                <td>
                    <button class="btn btn-danger">مكتمل</button>
                </td>
            </tr>
            <tr>
                <td>الاربعاء</td>
                <td>2023/12/6</td>
                <td>من 8 الى 12</td>
                <td>صباحي</td>
                <td>
                <button class="btn btn-success bg-m" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">متـاح</button>
                </td>
            </tr>
            <tr>
                <td>الاربعاء</td>
                <td>2023/12/6</td>
                <td>من 4 الى 9</td>
                <td>مسائي</td>
                <td>
                <button class="btn btn-success bg-m" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">متـاح</button>
                </td>
            </tr>
            <tr>
                <td>الخميس</td>
                <td>2023/12/7</td>
                <td>من 8 الى 12</td>
                <td>صباحي</td>
                <td>
                    <button class="btn btn-danger">مكتمل</button>
                </td>
            </tr>
        </tbody>
          </table>
    </main> 
   <!--------   Modal -------- -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title text-center fs-5" id="exampleModalLabel">ادخل بياناتك لتأكيد الحجز</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">الاسم الرباعي:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">المنطقة :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
         
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">رقم الجوال :</label>
            <input type="number" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">العمــر :</label>
            <input type="number" class="form-control" id="recipient-name">
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="department" id="department" class="form-select">
              <option value=""> اختر الجنس</option>
              <option value="male">ذكـر </option>
              <option value="female">أنثى</option> 
            </select>
        </div>
          
        
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">الغـاء</button>
        <button type="button"  class="btn btn-primary third">تأكيد</button>
      </div>
    </div>
  </div>
</div>
            <!------- end Modal  -------->
   
            <footer class="footer">
            <p>  جميع الحقوق محفوظة  <i id="copyright" class="fa far fa-copyright"></i>دكتوري 2023</p>
          
       </footer>

</body>
<script>
document.querySelector(".third").addEventListener('click', function(){
  Swal.fire({
    title: "تـم تأكيد الحـجز بنـجاح",
    text: "سيـتم التـواصل معك للتأكد من أنه أنت الذي قمت بعملية الحجز وليس روبوت",
    icon: "success"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'index.html';
    }
  });
});
</script>
<script src="node_modules/sweetalert2/dist/sweetalert2.all.js">
</script>


<script src="./jquery-3.7.1.min.js"></script>
<script src="./bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</html>