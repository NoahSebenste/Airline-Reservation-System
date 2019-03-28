<?php include('session.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>    

<title>The Internet Airline - Tickets</title>
<h1>The Internet Airline</h1> 
<h3>Ticket Quantity</h3>
    
<?php include('navBar.php') ?> 
    
<div class="buttonFormat">
    <section>
        <content>
            <p style="text-align: center">Select the amount of tickets you would like to purchase:</p>
            <fieldset>
              <legend>Flight</legend>
              <p>
                <label>Tickets:</label>
                 <select id = "originList">
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                   <option value = "6">6</option>
                   <option value = "7">7</option>
                   <option value = "8">8</option>
                   <option value = "9">9</option>
                   <option value = "10">10</option>
                 </select>
              </p>
            </fieldset>
            
            <?php
                if(isset($_SESSION['cid'])) {
                    echo '<buttonAlign><button ><a href="billingInfo.php">Submit</a></button></buttonAlign>';
                } else {
                    echo '<buttonAlign><button ><a href="logIn.php">Submit</a></button></buttonAlign>';
                }
                    
            ?>
            
            
        </content>
    </section>
</div>
<footer></footer>
</body>    
</html>