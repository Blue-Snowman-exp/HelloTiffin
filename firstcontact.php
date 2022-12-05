<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="stylefirst.css">
    <link rel="stylesheet" href="firstphone.css">
    <script src="allscripts.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
<?php
  session_start();
  $p=$_SESSION['$l'];
  ?>
    <nav id="navcont">
        <ul>
            <li class="symbol">&#x2302</li>
            <li class="item"><a href="index.php">Back To Home </a></li>
        </ul>
    </nav>
   
    <section id="cont"></section>
</div>
    <div id="cont-box">
        <form action="#" method="POST">
            <h1>Contact Us</h1>
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="name" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number: </label>
                <input type="number" name="name" id="phone" placeholder="Enter your phone">
            </div>
            <div class="textbox">
            <label for="kem">Order Number: </label>
            <?php
            echo "<input type='text' name = 'kem' value='$p'>";
            ?>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="message" id="message" cols="10" rows="5"></textarea>
            </div>
            <div class="sumbit">
                <input type="submit" id="submit" placeholder="Submit" onclick="display()">
            </div>
        </form>
</section>
<?php
 if(isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        if(ctype_alpha($_POST['name'])){
            $a=$_POST['name'];
        }
    }
    else{
        echo "Cannot be emtpy";
    }
    if(!empty($_POST['email'])){
        $b=$_POST['email'];
    }
    else{
        echo "Cannot be emtpy";
    }
    if(!empty($_POST['phone'])){
        if(ctype_alnum($_POST['phone'])){
            $c=$_POST['phone'];
        }
    }
    else{
        echo "Cannot be emtpy";
    }
    if(!empty($_POST['message'])){
        $d=$_POST['message'];
    }
    else{
        echo "Cannot be emtpy";
    }
    $con=new mysqli("localhost","root","","tiffin");
  
  if($con==true){
   $y="insert into contact values ('$name','$email',$phone,'$message')"; 
   if($con->query($y)==true){
       header("location:index.php");
    }
   else{
       echo "try again";
    }
    session_strat();
    $z=$_SESSION('$a');
  }
}
?>
</body>
</html>
