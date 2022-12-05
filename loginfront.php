<html lang="en">
<head>
  
    <title>Login Page </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

html{
  background: rgba(0, 0, 0, 0.7) url("k1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100%;
  height:500px;
}



body{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
}

.content{
  width: 330px;
  border-radius: 10px;
  padding: 40px 30px;
  margin-top: 100px;
  box-shadow: gold;
}

.content .text{
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 35px;
  color: gold;
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: white;
  border: 1px solid whitesmoke;
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
}

.field input::placeholder{
  color:gold;
}

.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: gold;
}

button{
  margin: 25px 0 0 0;
  width: 100%;
  height: 50px;
  color: whitesmoke;
  font-size: 18px;
  font-weight: 600;
  border: 2px solid whitesmoke;
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
 margin-top: 40px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
}
 
.content .or{
  color: rgba(255, 255, 255, 0.733);
  margin-top: 9px;
}
 
.icon-button{
  margin-top: 15px;
}

.icon-button span{
  padding-left: 17px;
  padding-right: 17px;
  padding-top: 6px;
  padding-bottom: 6px;
  color: rgba(244, 247, 250, 0.795);
  border-radius: 5px;
  line-height: 30px;
  background: rgba(255, 255, 255, 0.164);
  backdrop-filter: blur(10px);
}

.icon-button span.facebook{
  margin-right: 17px;
}

button:hover,
.icon-button span:hover{
  background-color: #babecc8c;
}


footer {
            background: black;
            color: white;
            padding: 9px 555px;
            text-align: center;
            margin-top: 210px;
        }
        
    </style>
</head>
<body>

 
<div class="content">
 <div class="text">Login</div>
  <form action="#" method="post"> 
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text" placeholder="User Name" name=t1>
   
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" placeholder="Password" name=t2>
      
    </div>
    
    <input type=submit name=b1 value="Log in">
    <div class="or">Or</div>
    <div class="icon-button"> 
      <a href="signup.php">Not an existing user?Sign up</a>
    </div>
  </form>
</div>
<footer>
        <div class="center">
            Copyright &copy; www.tiffin.com. All rights reserved!
        </div>
    </footer>

</body>
<?php
if(isset($_POST['b1']))
{
  if(!empty($_POST['t1']&& !empty($_POST['t2'])))
  {
  $a=$_POST['t1'];
  $b=$_POST['t2'];
  $con=new mysqli("localhost","root","","tiffin");
  $q="select * from login";
  $t=$con->query($q);
  while($row=$t->fetch_assoc())
  {
    if($a==$row['username']&& $b==$row['password'])
    {
      echo "<script> window.location.href='index.php'</script>";
    }
    else
    {
      echo "Enter correct username or password";
    }
  }
  }
  else{
    echo "Username & Password cannot be empty";
  }
}

?>
</html>