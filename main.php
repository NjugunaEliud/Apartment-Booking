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
    .h{
        text-align:center;
    }
    .cont{
        text-align:center;
        padding: 20px;
        margin:20px;
        
    }.c{
       margin:20px;
    
        margin-right:25px;
    }
    .c{
        box-shadow:2px 2px 2px 2px aqua;
    }
    button{
        background-color: aqua;
        padding: 1em;
        border:none;
        border-radius:20px;
        cursor: pointer;
    }
    .b:hover{
        /* background-color: grey; */
        opacity:0.6;
        color:blue;
    }
</style>
<?php 

    // $size=$_POST['size']
    // $location=$_POST['location'];
    // $price=$_POST['price'];
    // $date=$_POST['date'];
    $conn=mysqli_connect('localhost','root','','apartments');
    $sql="select * from onsale";
    $qwe=mysqli_query($conn,$sql);
    $results=mysqli_fetch_all($qwe, MYSQLI_ASSOC);
    // print_r($results);


    ?>
<body>
    <h1 class="h">ON SALE APARTMENTS</h1>
    <?php  foreach($results as $resu) { ?>

         <div class="c">
        <div class="cont">
            <h2>Apartment size: <?php echo htmlspecialchars($resu['size']);?></h2>
            <h2>Location: <?php echo htmlspecialchars($resu['location']);?></h2>
            <h2>Price: <?php echo htmlspecialchars($resu['price']);?></h2>
            <h2>Date Uploade: <?php echo htmlspecialchars($resu['date']);?></h2>
            <button class="b">PURCHASE</button>
        </div>
    </div> 
        <?php  }?> 
   
</body>
</html>