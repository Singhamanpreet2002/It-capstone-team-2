<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build your own PC</title>
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
                <li><a href="./AboutUs.php">About Us</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="product.php">Products &#9660;</a>
                    <ul class="sub-nav-links">
                        <li><a href="preBuilt.php">Pre-Builds</a></li>
                    </ul>
                </li>
                <li><a href="Services.php">Services</a></li>
                <?php 
   if (isset($_SESSION['username'])) {
   echo '<li><a href="logout.php">Logout</a></li>';
   echo "<div style = 'letter-spacing:3px;font-size: 20px;position: absolute;right: 30px; ' > Own it " . $_SESSION['username'] . " !</div>" ;
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


    <h1>
        Build Your Own PC!
    </h1>
    <p>
        Choose what you want in your new PC!</br>
        Select one <b>Case</b> / <b>CPU</b> / <b>GPU</b> / <b>Storage</b> / <b>RAM</b> opption.
    </p>

    </br>


    <form>
        <div>
            <h2>Case</h2>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="case" value="White" >
                        <img src="images/Case1.png">
                        White case
                        <!--White Facepanle /RGB Fan/Image From Google      \Website:               periphio.com-->
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="case" value="Fan" >
                        <img src="images/Case2.png">
                        Alternet case
                        <!--White/ Fan Facepanle /RGB Fan/Image From Google \Website:               ubuy.hu-->
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="case" value="Black" >
                        <img src="images/Case3.png">
                        Black case
                        <!--Black Facepanle /No RGB Fan/Image From Google   \Website:               newegg.com-->
                    </label>
                </li>
            </ul>
        </div> <!--Case -->
        <div>
            <h2>CPU</h2>
            <ul id="i5">
                <h4>Intel i5</h4>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i5-3450" >
                        <img id="CPU" CPU src="images/i5-3450.jpg">
                        i5-3450
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i5-6400" >
                        <img id="CPU" src="images/i5-6400.png">
                        i5-6400
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i5-8500" >
                        <img id="CPU" src="images/i5-8500.jpg">
                        i5-8500
                    </label>
                </li>
            </ul>
            <ul id="i7">
                <h4>Intel i7</h4>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i7-4790" >
                        <img id="CPU" src="images/i7-4790.jpg">
                        i7-4790
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i7-6700" >
                        <img id="CPU" src="images/i7-6700.jpg">
                        i7-6700
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i7-8700" >
                        <img id="CPU" src="images/i7-8700.jpg">
                        i7-8700
                    </label>
                </li>
            </ul>
            <ul id="i9">
                <h4>Intel i9</h4>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i9-7940" >
                        <img id="CPU" src="images/i9-7940.jpg">
                        i9-7940
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i9-9820" >
                        <img id="CPU" src="images/i9-9820.jpg">
                        i9-9820
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="CPU" value="i9-10850" >
                        <img id="CPU" src="images/i9-10850.jpg">
                        i9-10850
                    </label>
                </li>
            </ul>
        </div> <!--CPU -->
        <div>
            <h2>GPU</h2>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="GPU" value="1660" >
                        <img src="images/RTX-1660.png">
                        RTX-1660
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="GPU" value="2080" >
                        <img src="images/RTX-2080.png">
                        RTX-2080
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="GPU" value="3080" >
                        <img src="images/RTX-3080.png">
                        RTX-3080
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="GPU" value="titan" >
                        <img src="images/RTX-titan.png">
                        Titan
                    </label>
                </li>
            </ul>
        </div> <!--GPU -->
         <div>
            <h2>Storage</h2>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="Storage" value="HDD-1tb" >
                        <img src="images/HDD-1tb.jpg">
                        HDD 1TB
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="Storage" value="HDD-2tb" >
                        <img src="images/HDD-2tb.jpg">
                        HDD 2TB
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="Storage" value="SSD-1tb" >
                        <img src="images/SSD-1tb.jpg">
                        SSD 1TB
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="Storage" value="SSD-2tb" >
                        <img src="images/SSD-2tb.jpg">
                        SSD 2TB
                    </label>
                </li> 
            </ul>
        </div> <!--Storage -->
        <div>
            <h2>RAM</h>
            <!--Ram Amount 1/2/4 -->
            <h4>How Many:</h4>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="RAM-A" value="1" id="Amount">
                        <img src="images/Sticks1.png">
                        1 stick
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="RAM-A" value="2" id="Amount">
                        <img src="images/Sticks2.png">
                        2 sticks
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="RAM-A" value="4" id="Amount">
                        <img src="images/Sticks4.png">
                        4 sticks
                    </label>
                </li>
            </ul>
            <!--RAM TYPE-->
            <h4>Type</h4>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="RAM" value="4" >
                        <img src="images/RAM-4.jpg">
                        4GB
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="RAM" value="8" >
                        <img src="images/RAM-8.jpg">
                        8GB
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="RAM" value="16" >
                        <img src="images/RAM-16.jpg">
                        16GB
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="RAM" value="32" >
                        <img src="images/RAM-32.jpg">
                        32GB
                    </label>
                </li>
            </ul>
        </div> <!--RAM -->
        <div>

        </div><!--Submit and Reset-->
    </form>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>



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
