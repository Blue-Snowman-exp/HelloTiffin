<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylefirst.css">
    <link rel="stylesheet" href="firstphone.css">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">


  </head>
  <body class="body">
    <nav id="navcont">
      <ul>
          <li class="symbol">&#x2302</li>
          <li class="item"><a href="index.php">Back To Home </a></li>
      </ul>
  </nav>
  <?php
  $con=new mysqli('localhost','root','','tiffin');
  if($con==true){
  $query="select * from about";
  $t=$con->query($query);
  }
  while($row=mysqli_fetch_assoc($t))
  {   
      $he=$row['head'];
      $des=$row['decreption'];
      echo "<div class='about-section'>
        <div class='inner-width'>
          <h1>$he</h1>
          <div class='border'></div>
          <div class='about-section-row'>
            <div class='about-section-col'>
              <div class='about'>
                <p>
                 $des
                </p>
                <a href=''>Read More</a>
              </div>
            </div>";
            }
            ?>
            <div class="about-section-col">
              <div class="skills">
                  <div class="about-section-col">
                      <div class="skill">
                        <div class="title">Taste</div>
                          <p>&#127775 &#127775 &#127775 &#127775 &#127775</p>
                  </div> 
                      </div>
                  
                      <div class="skill">
                        <div class="title">Quality</div>
                          <p>&#127775 &#127775 &#127775 &#127775</p>
                      </div>
                  
                      <div class="skill">
                        <div class="title">Hygiene</div>
                        <p>&#127775 &#127775 &#127775 &#127775&#127775</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="map">
        <div class="mapimg">
          <iframe width="250" height="250" frameborder="0" src="https://www.bing.com/maps/embed?h=250&w=250&cp=30.89338670643079~75.8167576789856&lvl=16&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
          </iframe>
          <div style="white-space: nowrap; text-align: center; width: 250px; padding: 6px 0;">
             <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=30.89338670643079~75.8167576789856&amp;sty=r&amp;lvl=16&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
             <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=30.89338670643079~75.8167576789856&amp;sty=r&amp;lvl=16&amp;rtp=~pos.30.89338670643079_75.8167576789856____&amp;FORM=MBEDLD">Get Directions</a>
         </div>
     </div>
      </div>
  </body>
</html>
