<?php
// $location=$_POST['Location'];
// $payment=$_POST['monthly payment'];
// $room=$_POST['room Specification'];
// $number=$_POST['room no'];
// $telephone=$_POST['caretaker'];

    $conn=mysqli_connect('localhost','root','','apartments');
    $sql="select * from booking";
    $qwe=mysqli_query($conn,$sql);
    $result=mysqli_fetch_all($qwe, MYSQLI_ASSOC);
    // print_r($result);
//    if(isset($_POST['bk'])){

//    }
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
    .ro{
        margin:20px;
    
        margin-right:25px;
    }
    .ro{
        box-shadow:3px 0 3px 0 aqua;
    }
    button{
        background-color: aqua;
        padding: 1.0em;
        border:none;
        border-radius:10px;
        cursor: pointer;
        width:20%;

        /* padding: 1em; */
    }
    .rooms{
        text-align:center;
        padding: 20px;
        margin:20px;
        
    }
    .book:hover{
        opacity:0.6;
        color:blue;
    }
    h2{
        text-size: 30px;
        
    }
    h1{
        text-align:center;
        /* position:fixed; */
    }
    body{
        /* background-color: aqua; */
    }
    .h{
        background-color:aqua;
        width:27%;
        margin-top:-35px;
        display:none;
    }
  
</style>
<body>
    

<h1>VACCANT ROOMS AVAILABLE</h1>
<a href="booked.php"><button class="h"><h>VIEW TENANTS</h> </button></a>
  <?php  foreach($result as $r) {?>

    <div class="ro">
        <div class="rooms">
            <h2>Location:<?php echo $r['Location']?></h2>
            <h2>Monthly payment:<?php echo ($r['monthly payment']);?></h2>
            <h2>Room Specification:<?php echo ($r['room Specification']);?></h2>
            <h2>Room Number:<?php echo ($r['room no']);?></h2>
            <h2>Caretaker Tel. No.:<?php echo $r['caretaker']?></h2>
            <a href="bookdetails.php"><button class="book" name="">BOOK</button></a>
        </div>
    </div>


    <?php }?>
   
</body>
</html>



