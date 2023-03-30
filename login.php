<?php
$err=['er'=>""];
if(isset($_POST['login'])){
$email=$_POST["email"];
$password=$_POST["password"];
$log="select * from registration where email='$email' and password='$password'  ";
$conn=mysqli_connect('localhost','root','','apartments');
$resu=mysqli_query($conn,$log);
$results=mysqli_fetch_assoc($resu);
$remail=$results["email"];
$rpassword=$results["password"];
if($email==$remail && $password==$rpassword){
 
 header("location:add.php");

}
else{
  $err['er']="Login Failed Please Retry";
}

} ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<style>
 
  
</style>
<body>
<form action="login.php" class="login-form" method="POST" id="l">
      <h1><?php echo $err['er'];?></h1>
            <div class="container">
               <span class="cancel"><i class="fa fa-times" "></i></span> 
                <h1>Login</h1>
                <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email" required>
            
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" id="psw" required> 
              <i class="fa fa-eye " id="eye"  style="margin-left:-4.5%;display:inline;
                vertical-align: middle; cursor:pointer;"></i>
        

              <button type="submit" class="loginbtn" name="login">Login</button>

            </div>
            <div class="container signin">
                <p>Don't have an account? <a href="registration-form">Register</a>.</p>
              </div>
          </form>
</body>
<script>
  var toogle=document.querySelector('#eye')
  var password=document.querySelector('#psw')
  toogle.addEventListner('click' function (e) {
    if(e.target.className=="fa fa-eye"){

    }
  })
</script>
</html>


