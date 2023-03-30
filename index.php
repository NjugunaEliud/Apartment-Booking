<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApartmentBooking</title>
    <!-- <link rel="stylesheet" href="font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
   

</style>
<?php 
     $errors=['regist'=>""];
     if(isset($_POST['register'])){
    $email=$_POST["email"];
    $telephone=$_POST["telephone"];
    $password=$_POST["password"];
    // $server='localhost';
    // $user='root';
    // $password='';
    // $database='apartments';
    $conn=mysqli_connect('localhost','root','','apartments');
    $sql="insert into registration(email,telephone,password) values('$email','$telephone','$password')";
    $abcd=mysqli_query($conn,$sql);
    if($abcd){
    $errors['regist']='Registration successful';
    }else{
        $errors['regist']='Registration failed';   
    }
 
    
}?>
<body>
    <div class="navbar">
        <i class="fa fa-house-user " id="cont">&nbsp;Sitaki Apartments</i>
        <div class="main-nav"><ul >
            <li><a href="index.php"><i class="fa fa-home">&nbsp;Home</i></a></li>
            <li><a href="#"><i class="fa fa-info">&nbsp;About us</i></a></li>
            <li><a href="#"><i class="fa fa-phone">&nbsp;Contact us</i></a></li>
            <li class="reg"><a href="#"><i class="fa fa-user-plus">&nbsp;Register</i></a></li>
            <li class="log"><a href="#"><i class="fa fa-sign-in">&nbsp;Login</i></a></li>
        </ul></div>
        
        <div class="menu">
            <i class="fa fa-bars" id="hamberger"></i>
            <div class="re-menu">
                <a href="index.php"><i class="fa fa-home">&nbsp;Home</i></a>
                <a href="#"><i class="fa fa-info">&nbsp;About us</i></a>
                <a href="#"><i class="fa fa-phone">&nbsp;Contact us</i></a>
              <a href="#r" ><span ><i class="fa fa-user-plus">&nbsp;Register</i></span></a>
              <a href="#l"><i class="fa fa-sign-in">&nbsp;login</i></a>
            </div>
        </div>
        </div>
        <form action="index.php" class="registration-form" method="POST" >
            <div class="container" id="r">
                <span class="cancell">  <i class="fa fa-times" ></i></span>
                <h4 class="red-text"><?php echo $errors['regist'];?></h4>
              <h1>Register</h1>
              <p class="one">Please fill in this form to create an account.</p>
    
          
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email" required >

              <label for="telephone"><b>Telephone</b></label>
              <input type="tel" placeholder="Enter Phone Number" name="telephone" id="psw-repeat" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" id="psw" required>
          
              <button type="submit" name="register" class="registerbtn">Register</button>
            </div>
            
            <div class="container signin">
              <p>Already have an account? <a href="#">Sign in</a>.</p>
    
            </div>
          </form>
      
    
        
<?php include('login.php') ?>

         
          <section class="sec">
            <div class="h">
                <div class="cap">
                    <p>SITAKI APARTMENTS .</p>
                    <p> FOR RENTING/BOOKING AND SELLING OF APARTMENTS</p>
                    <p>LOCATED ALONG THIKA SUPER HIGHWAY NEXT TO</p>
                   <p>KAHAWA WENDANI NEXT TO KAHAWA GARISON</p>
                  <a href="booking.php" style="list-style:none; text-decoration:none;"> <h6  style="background-color: orange; padding: 1.2em; width: 100%; margin: auto;margin-top: 0.8em; border-radius: 0.7em; color:black;">View Available Apartments For Booking</h6></a>
                  <a href="main.php" style="list-style:none; text-decoration:none;"> <h6  style="background-color: orange; padding: 1.2em; width: 100%; margin: auto;margin-top: 0.8em; border-radius: 0.7em; color:black;">View Available Apartments for Sale</h6></a>
                </div>
            </div>
          </section>
        

          
</body>
<script>
    var crossbars= document.getElementById('hamberger')
    var respo=document.querySelector('.re-menu')
   crossbars.onclick= function(){
    respo.classList.toggle('show');
   }

   var scro=document.querySelector('.navbar')
   window.addEventListener('scroll' ,()=>{
    if(window.scrollY > scro.offsetHeight + 10){
    scro.classList.add('active');
    }else{
    scro.classList.remove('active');
    }
   })
   var reg=document.querySelector('.registration-form')
   var reglink=document.querySelector('.reg')
   reglink.addEventListener('click',()=>{
    reg.style.display='block'
   })
   var log=document.querySelector('.login-form')
   var loglink=document.querySelector('.log')
   loglink.addEventListener('click',function(){
    log.style.display='block'
   })
   var cross=document.querySelector('.cancel')
   cross.addEventListener('click',function(){
   log.style.display='none'
   }
   )
 var crosss=document.querySelector('.cancell')
 crosss.addEventListener('click',function(){
   reg.style.display='none'
   }
   )
   var regformr=document.querySelector('.registration-formr')
   regformr.addEventListener('click',function(){
    reg.style.display='block'
   })
</script>

</html>
