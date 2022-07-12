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
    <link rel='stylesheet' type='text/css' media='screen' href='css/BYO.css'>
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
                        <li><a href="preBuilt.php">Pre-Builds</a></li>
                    </ul>
                </li>
                <li><a href="Services.php">Services</a></li>      
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
    echo 'Total Price: $' . $_POST['TotalBYO'] . '<br>';
    echo 'Amount is charged to the card with number: ' . $_POST['CNum'] . '<br>';
    echo 'Shippment will be sent to: ' . $_POST['address'] . ', ' . $_POST['zipcode'] . ', ' . $_POST['state'] .'<br>';
    echo 'An email was sent to: ' . $_POST['email'] . ' with  your receipt!<br>';

            
            

            }elseif ($_POST['isPre'] == 1){
            
    
                echo "You ordered: <br>";                
                echo 'Begginer' . $_POST['Fulld'] . ' PC<br>';
                echo 'Total Price: $' . $_POST['TotalPre'] . '<br>';
                echo 'Amount is charged to the card with number: ' . $_POST['CNum'] . '<br>';
                echo 'Shipment will be sent to: ' . $_POST['address'] . ', ' . $_POST['zipcode'] . ', ' . $_POST['state'] . '<br>';
                echo 'An email was sent to: ' . $_POST['email'] . ' with  your receipt!<br>';
           

            }
        ?></div><h1 style="text-align:center;">Thank's for shopping with us!</h1>
        <br>
        <br>
        <br>






    </main>
       <footer style="position:fixed;bottom:0">
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