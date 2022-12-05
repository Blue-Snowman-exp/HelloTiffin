<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylefirst.css">
    <script src="allscripts.js"></script>
</head>
<body>
    <section id="contact">
        <nav id="navcont">
            <ul>
                <li class="symbol">&#x2302</li>
                <li class="item"><a href="index.php">Back To Home </a></li>
            </ul>
        </nav>
        <h1 class="h-primary center">GIVE YOUR ORDER DETAILS</h1>
        <div id="contact-box">
            <form action="#" method="POST" name="form">
                <div class="form-group">
                    <label for="name">UserName: </label>
                    <input type="text" name="name" id="name" class="need" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="need" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="number" name="phone" class="need" id="phone" placeholder="Enter your phone">
                </div>
                
                <div class="form-group">
                    <label for="phone">No.of Days: </label>
                    <input type="number" name="num" class="need" id="num" placeholder="Enter number of days">
                </div>
                
                <div class="form-group">
                    <label for="message">Any Message: </label>
                    <textarea name="message" class="need" id="message" cols="10" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="code">Menu: </label>   
                </div>
        <select name="s1" id="s1">
        <?php
             $con=new mysqli('localhost','root','','tiffin');
             session_start();
             if($con==true){
             $query="select * from menu";
             $t=$con->query($query);
             while($rows=$t->fetch_assoc()){
                 $ab=$rows['sno'];      
                 $bc=$rows['name'];
                 $cd=$rows['price'];
                //  echo"<option value='$bc' id='r1'>$bc</option>";
                 echo"<input type=radio id=gim name=op value='$cd'>$cd+$bc";
                }
             } 
        ?>
        </select>
   
        <?php
               echo" 
               <div class='f3'>
               <a href='#?id=$ab' class=b3 name=submit onclick=display()>Submit</a>
                </div>";
                ?>
            </form>
        </div>
    </section>
    <section class="orders">
        
    </form>
        </section>
    </fieldset>
</div>
<?php
    if($con==true){   
    $query="select * from info";
    $t=$con->query($query);
    while($rows=$t->fetch_assoc()){
        $m[]=$rows['SNo'];
    }
    }           
    if(isset($_POST['b1'])){
    echo $bc;
    echo $cd;
    }   
    if(isset($_POST['submit'])){ 
        if(!empty($_POST['name'])){
            if(is_string($_POST['name'])){
                $a=$_POST['name'];
            }
            else{
                echo "Cannot be other than alphabet";
            }
        }
        else{
            echo "Cannot be empty";
        }
        if(!empty($_POST['email'])){
            $b=$_POST['email'];
        }
        else{
            echo "Cannot be emtpy";
        }
        if(!empty($_POST['phone'])){
            if(is_numeric($_POST['phone'])){
                $c=$_POST['phone'];
            }
            else{
                echo "Cannot be other than number";
            }
        }
        else{
            echo "Cannot be emtpy";
        }
        if(!empty($_POST['num'])){
            if(is_numeric($_POST['num'])){
                $Days=$_POST['num'];
            }
            else{
                echo "Cannot be other than number";
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
        $con=new mysqli('localhost','root','','tiffin');
        if($con==true){
        $y="insert into info(Name,Email,Phone,Days,Message) values ('$a','$b',$c,$Days,'$d')";
        }
        else{
            echo "no";
        }
    }
?>
</body>
</html>