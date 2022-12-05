<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>www.FOOD TIFIN.com</title>
    <link rel="stylesheet" href="stylefirst.css">
    <script src="allscripts.js"></script>
    <link rel="stylesheet" media="screen and (max-width : 1100px)" href="firstphone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="img/logo.png" >
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#img">Specialties</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="login.php">Payments</a></li>
            <li class="item"><a href="firstcontact.php">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary" id="animation">  Welcome to Tiffin Service</h1>
        <p>This is new site establishes on date 23-04-2022 for offering customers Home Food. </p>
        <p>We only serve people homely made healthy food to get nurtrion which they could't get in thier busy life.</p>
        <a href="about.php" target="_blank"><button class="btn">About US</button></a>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <?php
             $con=new mysqli('localhost','root','','tiffin');
             if($con==true){
             $query="select * from services";
             $t=$con->query($query);
             }
             while($row=mysqli_fetch_assoc($t))
             {
                $id=$row['id'];
                $img=$row['image'];
                $des=$row['discreption'];
                $head=$row['heading'];
                $url=$row['url'];
                
                echo"
            <div class='box'>
                <img src='$img' alt='>
                <h2 class='h-secondary center'>$head</h2>
                <p>$des </p>
                <a href='$url'><button class='btn'>Order Now</button></a>
            </div>";
        }
            ?>
           
        </div>
    </section>  
    </section>

    <section class="img" id="img">
        <div class="slides slowFade">
            <div class="slide">
                <img src="img/a.jpg" alt="img"/>
            </div>
            <div class="slide">
                <img src="img/d.jpg" alt="img"/>
            </div>
            <div class="slide">
                <img src="img/b.jpg" alt="img"/>
            </div>
            <div class="slide">
                <img src="img/c.jpg" alt="img"/>
            </div>
        </div>
        </div>
        <div class="parent">
            <div class="child">
                <div class="text">
                    <p class="emoj">&#x263A</p>
                    <p>Best in </p>
                    <p>Taste &</p>
                    <p>Quality</p>
                </div>
                <div class="text">
                    <p class="emoj">&#x265B</p>
                    <p>Best in </p>
                    <p>Diet food</p>
                    <p>Sandwich</p>
                </div>
            </div>
            <div class="child">
                <div class="text">
                    <p class="emoj">&#x27B3</p>
                    <p>Special *Offers </p>
                    <p>Free Drinks</p>
                    <p>Dicounts</p>
                </div>
                <div class="text">
                    <p class="emoj">&#x2668</p>
                    <p>Special</p>
                    <p>Somke</p>
                    <p>Balls</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="img/logo1.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo2.png" alt="Our Client">
            </div>
          
            <div class="client-item">
                <img src="img/logo4.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo3.png" alt="Our Client">
            </div>
        </div>
        
    <footer>
        <div class="center">
            Copyright &copy; www.homefoofservice.com. All rights reserved!
        </div>
    </footer>
</body>

</html>
