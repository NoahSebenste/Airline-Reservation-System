<?php include('session.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>    

<title>The Internet Airline - Confirm</title>
<h1>The Internet Airline</h1> 
<h3>Confirm Reservation</h3>
    
<?php include('navBar.php') ?> 
    
<div class="buttonFormat">
    <section>
        <content>
          <h2>Order Summary</h2>
            <?php
                echo '<p>Name: '  . htmlspecialchars($_SESSION["name"]) .   '</p>';
                echo '<br><p>Email: '  . htmlspecialchars($_SESSION["email"]) .   '</p>';
                echo '<br><p>address: '  . htmlspecialchars($_SESSION["address"]) .   '</p>';
            ?>
            <form action = "submitReservation.php">
                <button class="bn" type="submit" name="cancel">Submit Order</button>
            </form>
        </content>
    </section>
</div>
<footer></footer>
</body>    
</html>