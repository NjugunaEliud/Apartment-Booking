
<?php
$err=['er'=>""];
$size=$location=$price=$date='';
if(isset($_POST['add'])){
    $size=$_POST['size'];
    $location=$_POST['location'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $conn=mysqli_connect('localhost','root','','apartments');
    $sql="insert into onsale(size,location,price,date) values('$size','$location','$price','$date')";
    $qwe=mysqli_query($conn,$sql);
    if($qwe){
         $err['er']="Property Posted";
    }else{
        $err['er']="Your Property  not added on sale please retry";
    
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
    .contain{
  padding: 20px;
  background-color:aqua;
    }
    h1{
        text-align:center;
    }
    input[type=text],input[type=Number] ,input[type=date]{
    width:100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    
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

    /* .contain{
        animation: zoomin .7s;
        transition: .7s ease-out;
    }
    @keyframes zoomin {
        from{
            transform: scale(0);
        }
        to{
            transform: scale(1);
        }
        
    } */
</style>
<body>
    <h1>Upload Details of Apartment  to be Sold</h1>
    <form action="add.php" method="POST">
<h1><?php echo $err['er'];?></h1>
        <div class="contain">
            <Label>Apartment size</Label>
            <input type="text" placeholder="Enter The size of the Apartment" name="size" required ><br>
            <Label>Location</Label>
            <input type="text" placeholder="Enter The location of the Apartment" name="location" required><br>
            <Label>Price</Label>
            <input type="Number" placeholder="Enter The price of the Apartment" name="price" required><br>
            <Label>Price</Label>
            <input type="date" placeholder="Enter The price of the Apartment" name="date" required><br>
            <button name="add">Upload Apartment</button>
            
        </div>
    </form>
</body>
</html>
