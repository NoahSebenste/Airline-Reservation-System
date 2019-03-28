<?php include('session.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>
    
<title>The Internet Airline - Contact</title>
<h1>The Internet Airline</h1> 
<h3>Contact Us</h3>
    
<ul>
  <li><a href="index.php">Start Over</a></li>
  <li><a href="greatDeals.php">Great Deals</a></li>
  <li><a href="help.php">Help/Information</a></li>
  <li><a class = "active" href="contactUs.php">Contact Us</a></li>
    <?php  
    if(session_status() == PHP_SESSION_ACTIVE and isset($_SESSION['email'])){
        echo '<li style="float:right"><a href="signOut.php">Sign out</a></li>';
        echo '<li style="float:right"><a >'.htmlspecialchars($_SESSION["email"]).'</a></li>';

    } else {
        echo '<li style="float:right"><a href="logIn.php">Log In/Sign up</a></li>';
    }
    ?>
</ul>  
    
    <section>
        <content>
            <h2>Contact Us</h2>
            <p style="text-align: center">If you have any questions, comments, or concerns, please contact us at support@theinternetairline.com</p>
            <p style="text-align: center">Or you may reach us by phone: (219) 555-5555</p>
            

            
        </content>
    </section>

<footer></footer>
</body>
</html>