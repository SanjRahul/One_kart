<?php
  $con=mysqli_connect("localhost","root","","one_kart");
  if($con){
    echo"connection ok";
  }else{
    echo"connection failed";
  }
?>