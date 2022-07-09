<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/style1.css'>

    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img src="images/Logo.svg"></a>
            </div>
            <ul class="nav-links">
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="product.php">Products &#9660</a>
                    <ul class="sub-nav-links">
                        <li><a href="preBuilt.php">Pre-Builds</a></li>
                        <li><a href="buildOwn.php">Build you Own</a></li>
                    </ul>
                </li>
                <li><a href="Contact.php">Contact</a></li>
<?php 
   if (isset($_SESSION['username'])) {
   echo '<li><a href="logout.php">Logout</a></li>';
   echo "<div style = 'letter-spacing:3px;font-size: 20px;position: absolute;right: 30px; ' > Need help " . $_SESSION['username'] . "?</div>" ;
}
  else {
          echo  '<div class="login">';
          echo  ' <li><a href="login.php"><img src="images/Login.svg" alt="">Login/Register</a></li></div>';
  }
  ?> 
            </ul>
            <div class="burger">
                <div class="line1 line"></div>
                <div class="line2 line"></div>
                <div class="line3 line"></div>
            </div>
        </nav>
    </header>
    <main><div class="xy"><img src="images/Cyber.jpg" style="position: relative"></div>
        <div class = "container" style = "height:700px">
<form action="service_confirmation.php" method="POST" class ="login-email">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Service request</p>
        <div class="input-group">
            
            <input type="date" name="date" id="date" required>
        </div>
        <div class="input-group">
           
            <input type="text" placeholder="Name" name="fname"  size="30" required>
        </div>
        <div class="input-group">
           
            <input type="email" name="email" id="email" placeholder="email@email.com" size="30" required>
        </div>
        <div class="input-group">
           
            <input type="tel" name="phone" id="phone" placeholder="000-000-0000" size="30" required>
        </div>
        <div class="input-group" style = "height:100px">
            <textarea name="issue" placeholder= "Enter you message here..." rows= "10" cols="40"required></textarea>
        </div>
        <div>
            
        </div>
            <div class="input-group">
        <button type="reset" class="btn">Reset</button>
        </div>
          <div class="input-group">
        <button type="submit" class="btn">Submit</button>
    </div>
    </div>
    </form></div>
    <div class="homeServices"><h1>What Our Clients Have to Say<br><br>"Binary Bros is the best! I love knowing my electronics are protected and there is no deductible for replacement or repair if I do have a problem."<br>— Cindee G., WA<br><br>"The BB service team is one of the primary reasons why I purchase tech products from Binary Bros. Any time I've ever had to use my Bros Protection Plans, I've had nothing but positive experiences."<br><br>

— Scott R., TX



    </h1>
        




    </div>

    </main>  <footer>
        <div class="footer">
            <div class="foot-logo">
                <img src="images/foot-svg.svg" alt="">
            </div>
            <div class="info">
                <div class="social-media">
                    <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.svg"></a>
                    <a href="https://twitter.com/" target="_blank"><img src="images/twiter.svg"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="images/instagram.svg"></a>
                    <a href="https://www.linkedin.com/" target="_blank"><img src="images/Linked_in.svg"></a>
         
           </div>
                <p>2273 Marcus Street, Huntsville. AL</p>
                <p>256-606-2447</p>
        </div>
        <div class="lic">©Binary Bros Inc. 2022 All Rights Reserved</div>
          </div>
    </footer>
</body>
<script src='Js/main.js'></script>
</html>
