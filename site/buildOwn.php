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
    <link rel='stylesheet' type='text/css' media='screen' href='css/BYO.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <script src='Js/main.js' async></script>
    <script src='Js/BYO.js' async></script>
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
    <!-- This is radeo-->


        <h1>
            Build Your Own PC!
        </h1>
        <p>
            Choose what you want in your new PC!</br>
            Select one <b>Case</b> / <b>CPU</b> / <b>GPU</b> / <b>Storage</b> / <b>RAM</b> option.
        </p>

        </br>
        <dv class="cart">
            <ul class="Item">
                <li><b class="name">Case</b> </li>
                <li class="detail"></li>
                <li>  $</li>
                <li class="price"></li>

            </ul>
            <ul class="Item">
                <li><b class="name">CPU</b> </li>
                <li class="detail"></li>
                <li>  $</li>
                <li class="price"></li>

            </ul>
            <ul class="Item">
                <li><b class="name">GPU</b> </li>
                <li class="detail"></li>
                <li>  $</li>
                <li class="price"></li>

            </ul>
            <ul class="Item">
                <li><b class="name">Storage</b> </li>
                <li class="detail"></li>
                <li>  $</li>
                <li class="price"></li>

            </ul>
            <ul class="Item">
                <li><b class="name">RAM</b> </li>
                <li class="detail"></li>
                <li>  $</li>
                <li class="price"></li>

            </ul>
            <ul class="Item">
                <li><b class="name">Total</b>: </li>
                <li class="detail"></li>
                <li>  $</li>
                <li class="price"> </li>

            </ul>
        </dv>

        <div class="information">
            <form method="post" action="shipping.php">
                <div>
                    <h2>Case</h2>
                    <ul>
                        <li>
                            <label>
                                <input type="radio" name="Case" value="Black|74.99" class="Case" required>
                                <img src="images/Case3.png">
                                <span class="detail">Black case</span>&emsp;
                                $<span class="price">74.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="Case" value="White|79.99" class="Case" required>
                                <img src="images/Case1.png">
                                <span class="detail">White case</span>&emsp;
                                $<span class="price">79.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="Case" value="Alternet|84.99" class="Case" required>
                                <img src="images/Case2.png">
                                <span class="detail">Alternet case</span>&emsp;
                                $<span class="price">84.99</span>

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
                                <input type="radio" name="CPU" value="i5-3450|49.99" class="CPU" required>
                                <img class="CPU" src="images/i5-3450.jpg">
                                <span class="detail">i5-3450</span>&emsp;
                                $<span class="price">49.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i5-6400|59.99" class="CPU" required>
                                <img class="CPU" src="images/i5-6400.png">
                                <span class="detail">i5-6400</span>&emsp;
                                $<span class="price">59.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i5-8500|74.99" class="CPU" required>
                                <img class="CPU" src="images/i5-8500.jpg">
                                <span class="detail">i5-8500</span>&emsp;
                                $<span class="price">74.99</span>

                            </label>
                        </li>
                    </ul>
                    <ul id="i7">
                        <h4>Intel i7</h4>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i7-4790|54.99" class="CPU" required>
                                <img class="CPU" src="images/i7-4790.jpg">
                                <span class="detail">i7-4790</span>&emsp;
                                $<span class="price">54.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i7-6700|69.99" class="CPU" required>
                                <img class="CPU" src="images/i7-6700.jpg">
                                <span class="detail">i7-6700</span>&emsp;
                                $<span class="price">69.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i7-8700|79.99" class="CPU" required>
                                <img class="CPU" src="images/i7-8700.jpg">
                                <span class="detail">i7-8700</span>&emsp;
                                $<span class="price">79.99</span>

                            </label>
                        </li>
                    </ul>
                    <ul id="i9">
                        <h4>Intel i9</h4>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i9-7940|74.99" class="CPU" required>
                                <img class="CPU" src="images/i9-7940.jpg">
                                <span class="detail">i9-7940</span>&emsp;
                                $<span class="price">74.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i9-9820|89.99" class="CPU" required>
                                <img class="CPU" src="images/i9-9820.jpg">
                                <span class="detail">i9-9820</span>&emsp;
                                $<span class="price">89.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="CPU" value="i9-10850|99.99" class="CPU" required>
                                <img class="CPU" src="images/i9-10850.jpg">
                                <span class="detail">i9-10850</span>&emsp;
                                $<span class="price">99.99</span>

                            </label>
                        </li>
                    </ul>
                </div> <!--CPU -->
                <div>
                    <h2>GPU</h2>
                    <ul>
                        <li>
                            <label>
                                <input type="radio" name="GPU" value="1660|79.99" class="GPU" required>
                                <img src="images/RTX-1660.png">
                                <span class="detail">RTX-1660</span>&emsp;
                                $<span class="price">79.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="GPU" value="2080|109.99" class="GPU" required>
                                <img src="images/RTX-2080.png">
                                <span class="detail">RTX-2080</span>&emsp;
                                $<span class="price">109.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="GPU" value="3080|199.99" class="GPU" required>
                                <img src="images/RTX-3080.png">
                                <span class="detail">RTX-3080</span>&emsp;
                                $<span class="price">199.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="GPU" value="titan|399.99" class="GPU" required>
                                <img src="images/RTX-titan.png">
                                <span class="detail">Titan</span>&emsp;
                                $<span class="price">399.99</span>

                            </label>
                        </li>
                    </ul>
                </div> <!--GPU -->
                <div>
                    <h2>Storage</h2>
                    <ul>
                        <li>
                            <label>
                                <input type="radio" name="Storage" value="HDD-1tb|59.99" class="Storage" required>
                                <img src="images/HDD-1tb.jpg">
                                <span class="detail">HDD 1TB</span>&emsp;
                                $<span class="price">59.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="Storage" value="HDD-2tb|89.99" class="Storage" required>
                                <img src="images/HDD-2tb.jpg">
                                <span class="detail">HDD 2TB</span>&emsp;
                                $<span class="price">89.99 </span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="Storage" value="SSD-1tb|79.99" class="Storage" required>
                                <img src="images/SSD-1tb.jpg">
                                <span class="detail">SSD 1TB</span>&emsp;
                                $<span class="price">79.99</span>

                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="Storage" value="SSD-2tb|109.99" class="Storage" required>
                                <img src="images/SSD-2tb.jpg">
                                <span class="detail">SSD 2TB</span>&emsp;
                                $<span class="price">109.99</span>

                            </label>
                        </li>
                    </ul>
                </div> <!--Storage -->
                <div>
                    <h2>RAM</h2>
                    <h4>How Many:</h4>
                    <ul>
                        <li>
                            <label>
                                <input type="radio" name="Amount" value="1" class="Amount" checked required>
                                <img src="images/Sticks1.png">
                                <span class="price">1</span>
                                <span class="detail">sticks</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="Amount" value="2" class="Amount" required>
                                <img src="images/Sticks2.png">
                                <span class="price">2</span>
                                <span class="detail">sticks</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="Amount" value="4" class="Amount" required>
                                <img src="images/Sticks4.png">
                                <span class="price">4</span>
                                <span class="detail">sticks</span>
                            </label>
                        </li>
                    </ul><!--Ram Amount 1/2/4 -->
                    <h4>Type</h4>
                    <ul>
                        <li>
                            <label>
                                <input type="radio" name="RAM" value="4|29.99" class="RAM" checked required>
                                <img src="images/RAM-4.jpg">
                                <span class="detail">4GB</span>&emsp;
                                $<span class="price">29.99</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="RAM" value="8|49.99" class="RAM" required>
                                <img src="images/RAM-8.jpg">
                                <span class="detail">8GB</span>&emsp;
                                $<span class="price">49.99</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="RAM" value="16|69.99" class="RAM" required>
                                <img src="images/RAM-16.jpg">
                                <span class="detail">16GB</span>&emsp;
                                $<span class="price">69.99</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="RAM" value="32|79.99" class="RAM" required>
                                <img src="images/RAM-32.jpg">
                                <span class="detail">32GB</span>&emsp;
                                $<span class="price">79.99</span>
                            </label>
                        </li>
                    </ul><!--RAM TYPE-->
                </div> <!--RAM -->
                <div>
                    <input type="hidden" name="buildOwn" value="true">
                    <button type="submit">Submit</button>
                </div><!--Submit and Reset-->
            </form>
        </div>
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
        <div class="lic">
            ©Binary Bros Inc. 2022 All Rights Reserved
        </div>
    </div>
    </main>
</body>
</html>
