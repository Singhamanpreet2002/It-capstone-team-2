<?php 
session_start();
error_reporting (E_ALL ^ E_NOTICE); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Built PCs</title>
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
                <li><a href="product.php">Products &#9660;</a>
                    <ul class="sub-nav-links">
                        <li><a href="buildOwn.php">Build you Own</a></li>
                    </ul>
                </li>
                <li><a href="Services.php">Services</a></li>
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
    
        <br>
        <br>
        <br>
        <div style="margin-left: 50px">
        <?php 
        
            if($_POST['isBYO']==1){
            
               
                echo "You ordered: <br>";
                echo 'CPU: ' . $_POST['CPUd'] . '<br>';
                echo 'Case: ' . $_POST['Cased'] . '<br>';
                echo 'GPU: ' . $_POST['GPUd'] . '<br>';
                echo 'RAM: ' . $_POST['AmountN'] . ' Sticks of '. $_POST['RAMd'] . ' GB<br>';
                echo 'Storage: ' . $_POST['Storaged'] . '<br>';
                echo 'Totaling: $' . $_POST['TotalBYO'] . '<br>';
                echo 'Charged to this card: ' . $_POST['CNum'] . '<br>';
                echo 'And being shipped to: ' . $_POST['address'] . '<br>';
                echo 'An email was sent to: ' . $_POST['email'] . ' with  your receipt!<br>';

            
            

            }elseif ($_POST['isPre'] == 1){
            
    
                echo "You ordered: <br>";                
                echo 'Begginer' . $_POST['Fulld'] . ' PC<br>';
                echo 'Totaling: $' . $_POST['TotalPre'] . '<br>';
                echo 'Charged to this card: ' . $_POST['CNum'] . '<br>';
                echo 'And being shipped to: ' . $_POST['address'] . '<br>';
                echo 'An email was sent to: ' . $_POST['email'] . ' with  your receipt!<br>';
           

            }
        ?></div>
        <br>
        <br>
        <br>






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
