<?php
$conn=mysqli_connect('localhost','root','','apartments');
$quer="select * from booked ";
$abcd=mysqli_query($conn,$quer);
$results=mysqli_fetch_all($abcd, MYSQLI_ASSOC);
// print_r($results);



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
   td, th {
  border: #dddddd;
  text-align: left;
  padding: 8px;
  
}
.book{
    width: 100%;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    <table class="book">
       <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>TELEPHONE</th>
        <th>PAID ON</th>
        <th>AMOUNT</th>
       </tr>
       <?php foreach($results as $rec){?>

        <tr>
        <th><?php echo $rec['id'];?></th>
        <th><?php echo $rec['names'];?></th>
        <th><?php echo $rec['phone'];?></th>
        <th><?php echo $rec['day'];?></th>
        <th><?php echo $rec['amount'];?></th>
       </tr>

        <?php } ?>
       
       
        
    
    </table>
</body>
</html>
