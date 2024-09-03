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
    <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.css">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.min.css">
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
   
         <!-- footer -->

  <?php  require ('./layout/footer.php'); ?>
  <!-- end footer -->

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