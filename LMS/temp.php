<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
  $con = mysqli_connect("localhost","root","","lms");
  if($con){
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $a = $_POST['src'];
      $sql = "select * from books where name like '%".$a."%'";
      $r = mysqli_query($con, $sql);
      if(mysqli_num_rows($r)>0){
      while($row = mysqli_fetch_assoc($r)){
        echo "<h1><center>The book <h1>".$row['name']."</h1> is available</center></h1>";
      }
    }
    else{
        echo "<center><h1>Sorry...! Your required book is not available</h1></center>";
    }
    }
  }
    else{
      echo mysqli_connect_error();
  }
?>
</br></br></br></br></br></br></br></br></br></br></br></br>
<center>
<h1>Thank You</h1>
</center>
</body>
</html>