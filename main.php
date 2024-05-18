<?php
include './inc/conn.php';
include './inc/form.php';


$sql = 'SELECT * FROM USERS ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($conn);
?>

<?php include_once './parts/header.php' ?>


 


  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="images/winnerwh.png" alt="">
 <h1 class="display-4 fw-normal">سجل واربح معنا الان</h1>
     <p class="lead fw-normal">تنتهي المسابقة بعد</p>
       <h3><p id="countdown"></p></h3>
    <p class="lead fw-normal">سجل لتربح الكثير من الجوائز القيمة</p>


<div class="container">
  <h3 class="shrot">شروط التسجيل كما يلي :</h3>
  <ul class="list-group">
    <li class="list-group-item">النسجيل متاح للجنسين</li>
    <li class="list-group-item">العمر اكبر من 16</li>
    <li class="list-group-item">ان تكون طالب برمجة</li>
    <li class="list-group-item">طالب في احد جامعات الشرقية</li>
  </ul>
</div>

      </div>
    </div>  


  
  <div class="colorbod">


 <div class="container">

<div class="position-relative">
    <div class="col-md-5 p-lg-5 mx-auto my-5">


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstname" class="form-label">الاسم الاول</label>
    <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $firstname ?>" >
    <div  class="form-text error"><?php echo $errors['firstnameError']; ?></div>
  </div>
  
  <div class="mb-3">
    <label for="lastname" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastname" class="form-control"  value="<?php echo $lastname ?>" id="lastname">
    <div  class="form-text error"><?php echo $errors['lastnameError']; ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الألكتروني</label>
    <input type="email" name="email" class="form-control"  value="<?php echo $email ?>" id="email">
    <div class="form-text error"><?php echo $errors['emailError']; ?></div>
  </div>
  <center><button type="submit" name="submit" class="btn btn-primary">ارسال</button></center>
</form>

  </div>
    
</div>  

<!--lodaing-->
<div class="loader-con">
  <div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>



<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button type="button" class="btn btn-primary" id="winner">
  اختيار الرابح
</button>
</div>



<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="modelLabel">الرابح بالجائزة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <?php foreach($users as $user): ?>
          <h1 class="display-1 text-center modal-title" id="modelLabel"><?php echo htmlspecialchars($user['firstname']).' '.htmlspecialchars($user['lastname']).'<br>'?></h1>
        <?php endforeach; ?> 
     </div>   
    </div>
  </div>
</div>

 
<div id="cards" class="row mb-5 pb-5">
 



</div>  

<?php include_once './parts/footer.php' ?>

</div><!--تقفيلة اللون -->