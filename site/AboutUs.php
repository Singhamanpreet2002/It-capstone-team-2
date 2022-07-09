<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel='stylesheet' type='text/css' media='screen' href= css/aboutUs.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

    <!--begin::Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--end::Bootstrap css-->

    <link rel="stylesheet" href="css/style.css">
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
    <main class="main">   
    <div>
        <!--begin::Body content-->   
        <!--begin::Hero Banner-->
        <div class="px-4 py-5 mb-5 text-center about-us-hero-banner shadow">
            
            <div class="hero-banner-logo p-5" >
                <svg width="198" height="99" viewBox="0 0 198 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M66.5512 49.3898V13.3352H75.8276V49.3898H66.5512ZM66.5512 0H75.8276V9.52517H66.5512V0Z" fill="#B5FFE1"/>
                    <path d="M97.4567 13.3352H104.906C106.967 15.9694 108.373 18.6035 109.122 21.2376C109.872 23.8717 110.247 27.1644 110.247 31.1155V49.3898H100.9V30.41C100.9 25.9414 100.291 22.7193 99.073 20.7437H91.2021V49.3898H81.8554V13.3352H89.1641L90.4291 15.8753C91.4598 14.9345 92.4202 14.276 93.3104 13.8997C94.2474 13.5234 95.6295 13.3352 97.4567 13.3352Z" fill="#B5FFE1"/>
                    <path d="M132.969 33.0911H125.45C124.466 34.3141 123.974 35.8429 123.974 37.6773C123.974 39.5118 124.489 40.9465 125.52 41.9813H132.969V33.0911ZM117.86 13.3352H135.288C138.099 15.0286 139.95 16.9807 140.84 19.1914C141.73 21.3552 142.175 24.3186 142.175 28.0816V38.6651C142.175 42.5693 142.269 46.1441 142.456 49.3898H134.445L133.18 46.8497C131.353 48.5431 128.776 49.3898 125.45 49.3898H121.022C117.04 46.7556 115.049 42.9691 115.049 38.0301C115.049 33.0441 117.087 29.1164 121.163 26.2471H127.769C129.596 26.2471 131.306 26.8116 132.899 27.9405V24.4127C132.899 22.5782 132.102 21.3552 130.509 20.7437H117.86V13.3352Z" fill="#B5FFE1"/>
                    <path d="M148.29 49.3898V13.3352H154.966L156.723 17.1453C158.597 14.6053 160.963 13.3352 163.821 13.3352H166.561V22.7898H157.636V49.3898H148.29Z" fill="#B5FFE1"/>
                    <path d="M170.382 29.5633V13.3352H179.728V29.6339C179.728 33.7261 180.548 37.1364 182.188 39.8646H186.334C187.88 37.1834 188.653 33.7732 188.653 29.6339V13.3352H198V29.0694C198 32.5972 197.531 35.7017 196.594 38.3829C195.704 41.0641 194.229 44.098 192.167 47.4847L187.459 55.1754C186.615 56.6336 185.725 57.7155 184.788 58.421C183.851 59.1266 182.633 59.644 181.134 59.9733H170.03V52.5648H177.62C178.604 52.2826 179.424 51.7887 180.08 51.0831C180.736 50.3775 181.415 49.3662 182.118 48.0492L182.539 47.2731H177.69C175.441 45.4386 173.661 42.9691 172.349 39.8646C171.038 36.7131 170.382 33.2793 170.382 29.5633Z" fill="#B5FFE1"/>
                    <path d="M66.6215 99V62.9455H73.2977L75.0546 66.7555C76.9286 64.2155 79.2946 62.9455 82.1525 62.9455H84.8932V72.4001H75.9682V99H66.6215Z" fill="#B5FFE1"/>
                    <path d="M108.984 99H93.664C88.9789 94.6255 86.6364 88.6517 86.6364 81.0786C86.6364 77.2685 87.1518 73.9523 88.1825 71.1301C89.26 68.3078 90.9466 65.5796 93.2423 62.9455H109.687C112.123 65.7677 113.786 68.5195 114.676 71.2006C115.567 73.8347 116.012 77.1274 116.012 81.0786C116.012 88.6517 113.669 94.6255 108.984 99ZM98.6536 91.5915H103.995C105.681 88.2989 106.524 84.5594 106.524 80.373C106.524 76.1866 105.658 72.8469 103.924 70.3539H98.6536C96.9669 72.7529 96.1236 76.1631 96.1236 80.5847C96.1236 84.9592 96.9669 88.6281 98.6536 91.5915Z" fill="#B5FFE1"/>
                    <path d="M123.458 62.9455H138.989V70.3539H128.026L134.702 80.3025C137.701 84.5829 139.364 87.5228 139.692 89.1221C139.879 89.8747 139.973 90.6508 139.973 91.4504C139.973 94.7901 138.731 97.3066 136.248 99H118.328V91.5915H131.189L123.669 80.5141C123.341 79.9967 122.826 79.2676 122.123 78.3269C121.467 77.3861 120.952 76.6335 120.577 76.069C120.202 75.4575 119.944 75.0107 119.804 74.7285C119.663 74.4462 119.476 74.0935 119.242 73.6701C119.007 73.1997 118.843 72.7999 118.75 72.4706C118.562 71.5769 118.469 70.8478 118.469 70.2834C118.469 66.8496 120.132 64.4037 123.458 62.9455Z" fill="#B5FFE1"/>
                    <path d="M0 99V0.220487H40.0572C44.6486 1.91385 48.7246 4.87724 52.2852 9.11065C55.8459 13.3441 57.6262 18.4712 57.6262 24.492C57.6262 35.1226 54.1593 42.5546 47.2254 46.788V47.3524C55.8459 52.1503 60.1561 59.6763 60.1561 69.9306C60.1561 81.6901 54.2061 91.3799 42.3061 99H0ZM19.115 41.0023H33.0296C37.1525 38.4623 39.2139 34.6052 39.2139 29.431C39.2139 24.2568 37.2931 20.1645 33.4513 17.1541H19.115V41.0023ZM19.115 82.6308H33.5919C35.2785 81.4078 36.7777 79.4793 38.0895 76.8452C39.495 74.211 40.1978 71.5769 40.1978 68.9428C40.1978 66.3087 39.6356 63.9098 38.5112 61.746C37.3867 59.5823 35.9812 57.983 34.2946 56.9482H19.115V82.6308Z" fill="#B5FFE1"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M141.492 99C141.492 99 167.219 98.6734 175.532 99V68.1314L141.492 99ZM166.747 94.039C168.87 94.039 170.59 92.3114 170.59 90.1804C170.59 88.0494 168.87 86.3218 166.747 86.3218C164.624 86.3218 162.904 88.0494 162.904 90.1804C162.904 92.3114 164.624 94.039 166.747 94.039Z" fill="#B5FFE1"/>
                    </svg>
                    
            </div>    
            <div class="hero-banner-text-drop">
                <div class="underline-animate hide-text">
                    <h1 class="display-5 fw-bold text-light">About Us</h1>
                </div>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4 text-light">Our mission is to provide outstanding
                        quality, reliability and performance with our PC products and repair services for each and every customer, at the most competitive prices available.
                    </p>
                </div>
            </div>
        </div>
        <!--end::Hero Banner-->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2>
                       Humble Beginnings
                    </h2>
                    <p>
                        Binary Bros was founded in 2021 when 5 close friends (Nenad, Redney, Evan, Amanpreet & John) whose passion for technology and serving others came full circle in the middle of the Covid-19 pandemic whilst in Evan's family garage. They were looking to start a business by combining their strongest passions together: helping others and computer tech. 
                    </p>
                </div>
                <div class="col-lg-4">
                    <img src="images/Keyboard.jpg" width="100%">
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color:#F1F1F1">
            <div class="container py-5">
                <div class="row d-flex">
                    <div class="col-lg-4 order-1 order-lg-0">
                        <img src="images/open.jpg" width="100%">
                    </div>
                    <div class="col-lg-8 order-0 order-lg-1">
                        <h2> 
                            An Idea Is Born 
                        </h2>
                        <p>
                            With several years of IT & programming experience between them, they decided to provide a wider audience with their services at affordable costs. Within several months, they had pulled together enough funds to open up a small shop and create a website. Not long after, BinaryBros was the go-to source for the computer needs of the masses. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2> 
                        A Bright Future 
                    </h2>
                    <p>
                        As our company continues to grow at a rapid pace, we'll be opening up new locations throughout the southeast, along with several PC courses in the coming months that can be taken both online and in-store. Our commitment to provide complete coverage for our customers needs will always fuel our innovation, dedication and aspirations.
                    </p>
                </div>    
                <div class="col-lg-4">
                    <img src="images/idea2.jpg" width="100%">
                 </div>
            </div>
        </div>    
        <div class="container-fluid m-n5 py-5" style="background-color:#F1F1F1">
            <div class="d-grid gap-2 p-2 d-lg-flex justify-content-sm-center text-center">
                <b>Your Dream PC Awaits...</b>
            </div>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
               <a class="btn btn-outline-dark btn-lg px-4 gap-3" href="./preBuilt.php">Pre-Builds</a>
               <a class="btn btn-outline-dark btn-lg px-4" href="./buildOwn.php">Build Your Own</a>
            </div>
        </div>   
        <!--end::Body content-->
    </div>
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
<script src="Js/about.js"></script>

</html>
