<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Built PCs</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/pre-built.css'>
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
                <li><a href="product.php">Products &#9660;</a>
                    <ul class="sub-nav-links">
                        <li><a href="buildOwn.php">Build you Own</a></li>
                    </ul>
                </li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="Contact.php">Contact</a></li>
<?php 
   if (isset($_SESSION['username'])) {
   echo '<li><a href="logout.php">Logout</a></li>';
   echo "<div style = 'letter-spacing:3px;font-size: 20px;position: absolute;right: 30px; ' > Our picks for you " . $_SESSION['username'] . "</div>" ;
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
     <main>



    <section>
        <div class="container-vert">
            <h1 class="pre-title">The Foundation PC</h1>
            <div class="img1">
                <img class="mainBg" src="./images/pre-built-bg.svg" alt="bg" srcset="">
            </div>
            
        </div>
    </section>
    <section >
        <div class="container-vert">
            <div class="img2">
                <img class="bg" src="./images/pre-built-bg2.svg" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="img3">
                <img src="./images/pre-built-anim2.svg" alt="">
                <img src="./images/pre-built-anim2-text.svg" alt="" srcset="">
            </div>
            
        </div>
    </section>
    <section>
        <div class="container">
            <div class="pc-container">
                <div class="container-vert">
                    <img class="pc" src="./images/pre-built-pc1.svg" alt="" srcset="">
                    <div class="pc-name">Beginner PC</div>
                    <div class="pc-info">H510 Prebuilt Mid-Tower PC</div>
                    <div class="price">$999</div>
                    <a href="shipping.php?prebuild=true&Full=%20%7c999" class="sbtn"><input class="input" type="button" value="Shop"></a>
                </div>
                <div class="container-vert">
                    <img class="pc" src="./images/pre-built-pc2.svg" alt="" srcset="">
                    <div class="pc-name">Beginner Pro PC</div>
                    <div class="pc-info">H550 Prebuilt Mid-Tower PC</div>
                    <div class="price">$1399</div>
                    <a href="shipping.php?prebuild=true&Full=%20Pro%7c1399" class="sbtn"><input class="input" type="button" value="Shop"></a>
                </div>
                <div class="container-vert">
                    <img class="pc" src="./images/pre-built-pc3.svg" alt="" srcset="">
                    <div class="pc-name">Beginner Streamer PC</div>
                    <div class="pc-info">H650 Prebuilt Mid-Tower PC</div>
                    <div class="price">$1599</div>
                    <a href="shipping.php?prebuild=true&Full=%20Streamer%7c1599" class="sbtn"><input class="input" type="button" value="Shop"></a>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer>
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
