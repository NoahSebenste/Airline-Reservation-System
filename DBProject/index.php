<?php
session_start();
$db = new PDO('sqlite:C:\xampp\htdocs\DBProject\AirlineDatabase.db');

$result = $db->query('SELECT * FROM City ORDER BY title, state');
$destCities = $db->query('SELECT * FROM City ORDER BY title, state');
?>

<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>
    
<title>The Internet Airline - Home</title>
<h1>The Internet Airline</h1> 
<h3>Home</h3>

<ul>
  <li><a class = "active" href="index.php">Start Over</a></li>
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
    
<section>
  <welcomeBar>
    <h2>Welcome</h2>
      <p>Welcome to The Internet Airline! Here you can reserve a flight. Start by searching for a flight.</p>
  </welcomeBar>
  
  <article>
    <h2>Search</h2>
   
    <form action="selectDepartureFlight.php" method="post">
        <fieldset>
          <legend>Flight</legend>
          <p>
            <label>Origin:</label>
             <select name = "orig" method="post">
                <?php
                    while ($entry = $result->fetch()) {
                        echo '<option value="'.htmlspecialchars($entry['cityid']). '">'. htmlspecialchars($entry['title']) . "</option>\n";
                    }
                ?>
             </select>
              <br>
            <label>Desination:</label>
             <select name = "dest" method="post">
                <?php
                    while ($entries = $destCities->fetch()) {
                        echo '<option value="'. htmlspecialchars($entries['cityid']). '">'. htmlspecialchars($entries['title']) . "</option>\n";
                    }
                ?>
             </select>
          </p>
       </fieldset>
       
        <fieldset>
          <legend>Date</legend>
          <p>
             <label for="first"><b>Enter Departure Date: mm/dd/yy</b></label>
            <input type="text" placeholder="Enter Date" name="sdate">
              
            <label for="second"><b>Enter Return Date: mm/dd/yy</b></label>
            <input type="text" placeholder="Enter Date" name="rdate">
          </p>
       </fieldset>
        <button type="submit" name="orig_dest">Submit</button>
    </form>
    
    <div class="wrapper">
        
    </div>
    
  </article>
</section>
    
    <footer></footer>

</body>    
</html>