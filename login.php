<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="stylefirst.css">
  <link rel="stylesheet" href="firstphone.css">
  <style>
    @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0px;
  padding: 0px;
  font-family: sans-serif;
  background-color: transparent;
  background-size: cover;
}
body::before{
  content: "";
  height: 100%;
  width: 100%;
  background-color: aquamarine;
  opacity: 0.4;
}
.login-box{
  margin-left: 600px;
  text-align: center;
  width: 280px;
  top: 50%;
  left: 50%;
  color: black;
}
.login-box h1{
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: black;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: black;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}

  </style>
</head>
<nav id="navcont">
  <ul>
      <li class="symbol">&#x2302</li>
      <li class="item"><a href="index.php">Back To Home </a></li>
  </ul>
</nav>
<body>
<form action="#" method="post">
  <div class="login-box">
    <h1>PAY-NOW</h1>
    <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Enter Username" name="name">
    </div>

    <?php
    $con=new mysqli("localhost","root","","tiffin");
    $query="select Days from info where Name=$Name";
    $t=$con->query($query);
    while($row=mysqli_fetch_assoc($t))
    {
      $days=$row['Days'];
      echo"
      <div class='textbox'>
      <i class='fas fa-dollar-sign'></i>
      <input type='text' name='days' value='$days'>

    </div>";
    }
    // if(isset($_POST['submit']))
    // { 
    //   $days=$_POST['days'];
    //   $pice*=$days;
    //   echo"
    //   <div class='textbox'>
    //   <i class='fas fa-dollar-sign'></i>
    //   <input type='text' name='pass' value='$pice'>
    //   </div>";
    // }
    ?>

    <?php
    $con=new mysqli("localhost","root","","tiffin");
    $id=$_GET['id'];
    $query="select * from menu where sno=$id";
    $t=$con->query($query);
    while($row=mysqli_fetch_assoc($t))
    {
      $pice=$row['price'];
      echo"
      <div class='textbox'>
      <i class='fas fa-dollar-sign'></i>
      <input type='text' name='pass' value='$pice'>

    </div>";
    }
    // if(isset($_POST['submit']))
    // { 
    //   $days=$_POST['days'];
    //   $pice*=$days;
    //   echo"
    //   <div class='textbox'>
    //   <i class='fas fa-dollar-sign'></i>
    //   <input type='text' name='pass' value='$pice'>
    //   </div>";
    // }
    ?>
    <div>
    <input type="submit" class="btn" value="PAY-NOW" name="submit">
  </div>
</form>
<?php
  if(isset($_POST['submit'])){
  $Name=$_POST['name'];
  $Payment=$_POST['pass'];
  $con=new mysqli("localhost","root","","tiffin");
  if($con==true){
   $g="insert into payments(Name,Payment) values ('$Name','$Payment')"; 
 
    if($con->query($g)==true){
      header("location:index.php");
   }
    else{
      echo "try again";
   }
   }
  else{
    header("location:index.php");
    }

  }
  ?>
</body>
</html>