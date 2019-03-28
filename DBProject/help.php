<?php include('session.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>    

<title>The Internet Airline - Help</title>
<h1>The Internet Airline</h1> 
<h3>Help/Information</h3>
    
<ul>
  <li><a  href="index.php">Start Over</a></li>
  <li><a href="greatDeals.php">Great Deals</a></li>
  <li><a class = "active" href="help.php">Help/Information</a></li>
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
    
<div class="buttonFormat">
<section>
  <welcomeBar>
    <h2>Help</h2>
      <p>Here you may find out more information about The Internet Airline!</p>
  </welcomeBar>
  
  <article>
    <h2>Information</h2>
      <p>Click here to view the rules of The Internet Airline:</p>
      <linkAlign><a href="billingInfo.html" class="button">Rules</a></linkAlign>
   
    
  
    
  </article>
</section>
</div>
<footer></footer>
</body>    
</html>