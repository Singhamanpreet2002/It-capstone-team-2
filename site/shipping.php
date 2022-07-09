<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping and payment</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/shipping.css'>
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
                
                <li><a href="Services.php">Services</a></li>
                <li><a href="product.php">Products &#9660;</a>
                    <ul class="sub-nav-links">
                        <li><a href="./preBuilt.php">Pre-Builds</a></li>
                        <li><a href="./buildOwn.php">Build you Own</a></li>
                    </ul>
                </li>
                <li><a href="Contact.php">Contact</a></li>
                <?php 
   if (isset($_SESSION['username'])) {
   echo '<li><a href="logout.php">Logout</a></li>';
   echo "<div style = 'letter-spacing:3px;font-size: 20px;position: absolute;right: 30px; ' > Hello " . $_SESSION['username'] . "</div>" ;
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
        <Fieldset>
            <legend>Summary</legend>
            <div class="container-vert">
                <?php
                    if(isset($_POST['buildOwn'])){
                        list($CPUd,$CPUp) = explode('|', $_POST['CPU']);

                        list($Cased,$Casep) = explode('|', $_POST['Case']);

                        list($GPUd,$GPUp) = explode('|', $_POST['GPU']);

                        list($Storaged,$Storagep) = explode('|', $_POST['Storage']);

                        $AmountN=$_POST['Amount'];
                        list($RAMd,$RAMp) = explode('|', $_POST['RAM']);
        

                        echo '<div class="summary">';
                            echo '<label for="prod">'.$Cased.' case </label>';
                            echo '<label for="price">$'. $Casep .'</label>';
                        echo '</div>';
                        echo '<div class="summary">';
                            echo '<label for="prod">'.$CPUd.' CPU </label>';
                            echo '<label for="price">$'. $CPUp .'</label>';
                        echo '</div>';
                        echo '<div class="summary">';
                            echo '<label for="prod">'.$GPUd.' GPU</label>';
                            echo '<label for="price">$'. $GPUp .'</label>';
                        echo '</div>';
                        echo '<div class="summary">';
                            echo '<label for="prod">'.$Storaged.' Storage</label>';
                            echo '<label for="price">$'. $Storagep .'</label>';
                        echo '</div>';
                        echo '<div class="summary">';
                            echo '<label for="prod">'. $AmountN . ' x ' . $RAMd . 'GB</label>';
                            echo '<label for="price">$'. $RAMp * $AmountN .'</label>';
                        echo '</div>';
                        echo '<div class="summary">';
                            echo '<label for="prod">Tax (7.5%)</label>';
                            $Tax = round(($RAMp * $AmountN + $Storagep + $GPUp + $CPUp + $Casep) * 0.075 , 2);
                            echo '<label for="price">$'. $Tax .'</label>';
                        echo '</div>';
                        echo '<div class="summary">';
                            echo '<label for="prod">Total</label>';
                            $TotalBYO = round(($RAMp * $AmountN + $Storagep + $GPUp + $CPUp + $Casep) * 1.075 , 2);
                            echo '<label for="price">$'. $TotalBYO .'</label>';
                        echo '</div>';
                    }elseif (isset($_GET['prebuild'])){
                        list($Fulld,$Fullp) = explode('|', $_GET['Full']);
                        echo '<div class="summary">';
                            echo '<label for="prod"> Beginner '. $Fulld . ' PC</label>';
                            echo '<label for="price">$'. $Fullp .'</label>';
                        echo '</div>';
                        echo '<div class="summary">';
                            echo '<label for="prod">Tax (7.5%)</label>';
                            $Tax = round($Fullp * 0.075 , 2);
                            echo '<label for="price">$'. $Tax .'</label>';
                            echo '</div>';

                        echo '<div class="summary">';
                            echo '<label for="prod">Total</label>';
                            $TotalPre = round(($Fullp) * 1.075 , 2);
                            echo '<label for="price">$'. $TotalPre .'</label>';
                        echo '</div>';
                    }
                ?>
             </div>
        </Fieldset>

        <Form method="POST" action="Confirmation.php">
        <Fieldset>
            <legend>Shipping</legend>
            <div class="container">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fnam" required>
            </div>
            <div class="container">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" required>
            </div>
            <div class="container">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="container">
                <label for="zipcode">zip code</label>
                <input type="text" name="zipcode" id="zipcode" required>
            </div>
            <div class="container">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div> 
        </Fieldset>
        <Fieldset>
            <legend>Payment Info</legend>
            <div class="container">
                <label for="CName">Card Holder Name</label>
                <input type="text" name="CName" id="CName" required>
            </div>
            <div class="container">
                <label for="CNum">Credit Card Number</label>
                <input type="number" name="CNum" id="CNum" maxlength="16" required>
            </div>
            <div class="container">
                <label for="date">exp date</label>
                <input type="month" name="date" id="date" required>
            </div>
            <div class="container">
                <label for="cvv">CVV</label>
                <input type="number" name="cvv" id="cvv" maxlength="3" required>
            </div>
            <input type="hidden" name="TotalBYO" <?php echo 'value="' . $TotalBYO . '"' ?>>
            <input type="hidden" name="TotalPre" <?php echo 'value="' . $TotalPre . '"' ?>>
            <input type="hidden" name="CPUd" <?php echo 'value="' . $CPUd . '"' ?>>
            <input type="hidden" name="Cased" <?php echo 'value="' . $Cased . '"' ?>>
            <input type="hidden" name="GPUd" <?php echo 'value="' . $GPUd . '"' ?>>
            <input type="hidden" name="RAMd" <?php echo 'value="' . $RAMd . '"' ?>>
            <input type="hidden" name="AmountN" <?php echo 'value="' . $AmountN . '"' ?>>
            <input type="hidden" name="Storaged" <?php echo 'value="' . $Storaged . '"' ?>>
            <input type="hidden" name="Fulld" <?php echo 'value="' . $Fulld . '"' ?>>
            <input type="hidden" name="isBYO" <?php echo 'value="' . isset($_POST['buildOwn']) . '"' ?>>
            <input type="hidden" name="isPre" <?php echo 'value="' . isset($_GET['prebuild']) . '"' ?>>  
            
            
        </Fieldset>
            <div class="btn-container">
            <button type="submit">Place Order</button>
            </div>
        </Form>
        
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
