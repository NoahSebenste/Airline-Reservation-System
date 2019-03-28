<?php
session_start();
?>

<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>    

<title>The Internet Airline - Billing</title>
<h1>The Internet Airline</h1> 
<h3>Billing Information</h3>
    
<?php include('navBar.php') ?> 
    
<div class="buttonFormat">
    <form action="confirmReservation.php" method="post">
    <section>
        <content>
          <div id="signUpContainer">
            <h1>Billing</h1>
            <p>Please enter billing information.</p>
            <hr>
              
            <label for="credit"><b>Credit Card Number</b></label>
            <input type="text" placeholder="Enter card number" name="card">
              
            <label for="date"><b>Expiration Date</b></label>
            <input type="text" placeholder="Enter expiration date" name="expDate">
              
            <label for="cvv"><b>CVV Number</b></label>
            <input type="text" placeholder="Enter cvv" name="cvv">

            <div class="clearfix">
              <button type="submit" name="enter">Enter</button>
            </div>
          </div>
        </content>
    </section>
    </form>
</div>
<footer></footer>
</body>    
</html>