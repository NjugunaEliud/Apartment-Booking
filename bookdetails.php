<?php 
 $err=['erro'=>""];
if(isset($_POST['confirm'])){
    $names=$_POST['names'];
    $phone=$_POST['phone'];
    $day=$_POST['day'];
    $amount=$_POST['amount'];
    $conn=mysqli_connect('localhost','root','','apartments');
    $quer="insert into booked(names, phone ,day,amount) values('$names','$phone','$day','$amount')";
    $abcd=mysqli_query($conn,$quer);

    if($abcd){
        $err['erro']='booking succesful';
    }
    else{
        $err['erro']='Booking Failed Please Retry';
    
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: cream;
        opacity: 1;
    }
   
    input[type=text],input[type=Number] ,input[type=datetime-local]{
    width:100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    
}
.cont{
  padding: 20px;
  background-color:aqua;
    }
    h1{
        text-align:center;
    }
    button{
  width:100%;  
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius:10px;
    }
   
   
</style>
<body>
    <h1>Booking details</h1>
    <form action="bookdetails.php" method="POST">
        <h3><?php echo $err['erro'];?></h3>
        <div class="cont">
            <label for="">Full Names</label>
            <input type="text" required placeholder="ENTER YOUR FULL NAMES" name="names"><br>
            <label for="">Phone Number</label>
            <input type="number" required placeholder="ENTER YOUR PHONE NUMBER" name="phone"><br>
            <label for="">Day You intend to relocate</label>
            <input type="datetime-local" name="day"><br>
            <label for="">Payment</label>
            <input type="number" required placeholder="ENTER AMOUNT TO PAY"  name="amount"><br>
        <button name="confirm">Confirm Booking </button>

        </div>
    </form>
</body>
</html>
