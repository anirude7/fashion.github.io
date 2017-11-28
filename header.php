
<div class="topbar"></div>

  <div class="social_icon">

    <div class="container">
      
      <div class="icon">
        <a href="#"><img src="images/fbicon.png" height="33" width="33"></a>
        <a href="#"><img src="images/gpicon.png" height="33" width="33"></a>
        <a href="#"><img src="images/tweeticon.png" height="33" width="33"></a>
        <a href="#"><img src="images/pinicon.png" height="33" width="33"></a>
        <a href="#"><img src="images/tmblricon.png" height="33" width="33"></a>
        <a href="#"><img src="images/blogicon.png" height="33" width="33"></a>
        
      </div>
      
      <div class="header_right">
            <div class="userinfo">

            <?php
            if(isset($_SESSION['username'])) {
              echo '<a href="useraccount.php">Welcome Back, '. $_SESSION["username"] . '</a>';
            } else {
            //put login form or include here.
              echo '<a href="reg.php">Login / SignUp</a>';
            }
            ?>
          </div>
        
        <div class="cart_btn">
          <a href="#"><img src="images/cart.png" height="60%">
          <span>Cart (0)</span></a>
        </div>
      </div>

    </div>  
  </div>

  <div class="header">
    <div class="container">
    <!-- container -->

      <div class="navbar">
        <div class="logo" href="index.php">
          <img src="images/logo.png">
        </div>
        <ul>
          <li><a href="#">CONTACT US</a></li>
          <li><a href="#">KIDS</a></li> 
          <li class="dropdown"><a href="#">MEN</a></li>
          <li class="dropdown">
            <a href="women.php">WOMEN</a>
            <div class="dropdown-content">
              <a href="womenshorts.php">Shorts</a>
              <a href="womentees.php">Tees</a>
              <a href="womendress.php">Dresses</a>
              <a href="womenbottoms.php">Bottom Wear</a>
            </div>
          </li>
          <li><a href="index.php">HOME</a></li>
        </ul>
      </div>
    
    <!-- container -->
    </div>
  </div>