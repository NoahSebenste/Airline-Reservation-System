<ul>
  <li><a href="index.php">Start Over</a></li>
  <li><a href="greatDeals.php">Great Deals</a></li>
  <li><a href="help.php">Help/Information</a></li>
  <li><a href="contactUs.php">Contact Us</a></li>
  <?php  
    if(session_status() == PHP_SESSION_ACTIVE and isset($_SESSION['email'])){
        echo '<li style="float:right"><a href="signOut.php">Sign out</a></li>';
        echo '<li style="float:right"><a >'.htmlspecialchars($_SESSION["email"]).'</a></li>';

     } else {
        echo '<li style="float:right"><a href="logIn.php">Log In/Sign up</a></li>';
     }
    ?>
  
</ul> 