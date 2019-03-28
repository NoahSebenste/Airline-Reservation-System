<?php include('session.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
    <style>
    html {
    background: #ffffff;
    background-image: url("chicago.jpg");
    
}
    </style>
</head>    

<title>The Internet Airline - Deals</title>
<h1>The Internet Airline</h1> 
<h3>Great Deals</h3>
    
<ul>
  <li><a href="index.php">Start Over</a></li>
  <li><a class = "active" href="greatDeals.php">Great Deals</a></li>
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
    
<div class="buttonFormat">
    <section>
        <content>
          <p>Check out our deals for this month!</p>
            <p>For the month of december, all flights between Chicago and New York will have a 15% discount</p>
        </content>
    </section>
</div>
<footer></footer>
</body>    
</html>