<!-- HEADER -->

<?php include "./includes/header.php" ?>










<!-- CONTAINER -->
<div class="container">

    <form action="" enctype="multipart/form-data">

        <!-- LOGIN BOX -->
       <section class="login-box">
           <div class="brand">
               <a href="./index.php"><h2>Game<span class="brand-span">Store</span></h2></a>
           </div>

           <!-- LOGIN BODY -->
            <div class="login-body">


                  <h5>ورود | ثبت نام</h5>
  

                 <div class="login-note">
                     
                     <p>سلام <br> برای ورود به حساب کاربری ایمیل و رمز خود را وارد کنید </p> 
                  </div>
      
                  <div class="error-txt d-none">مشکل در ورود</div>
                    
                  <div class="form-group">
                       <label for="email">ایمیل</label>
                       <input class="" type="email" name="email">
                  </div>
      
                  <div class="form-group">
                       <label for="email">رمز عبور</label>
                       <input class="" type="password" name="password">
                       <i class="fas fa-eye"></i>
                       <div class="inputClone" id="inputClone"></div>
                  </div>
                  <div class="button mt-4">
                       <input class="btn btn-danger" type="button" value="ورود" name="login" >
                  </div>
            
      
                  <div class="login-forgot mt-2"><p>رمز عبور خود را فراموش کردید؟</p><a href="">کلیک کنید</a></div>

       </div>
        <!-- LOGIN BODY -->
    




     </section>
   <!-- LOGIN BOX -->
</form>


</div>
<!-- CONTAINER -->





<script>

<?php include "./javascript/pass-show-hide.js";?>

</script>



</body>

</html>
