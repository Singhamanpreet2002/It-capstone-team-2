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
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="product.php">Products &#9660</a>
                    <ul class="sub-nav-links">
                        <li><a href="preBuilt.php">Pre-Builds</a></li>
                        <li><a href="buildOwn.php">Build you Own</a></li>
                    </ul>
                </li>
                
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
    <main>
<form action="results.html" methods="GET" enctype="multipart/form-data">
        <div>
            <label for="date">Today's date</label>
            <input type="date" name="date" id="date" required>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="John Doe" size="50" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email@email.com" size="50" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" placeholder="000-000-0000" size="50" required>
        </div>
        <div>
            <label for="issue ">Issue</label>
            <textarea id="issue" name="issue" placeholder="What is wrong with your computer?" rows= "10" required></textarea>
        </div>
        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
    </form>
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
