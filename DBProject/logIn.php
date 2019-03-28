<?php include('process.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
    

</head>    

<title>The Internet Airline - Tickets</title>
<h1>The Internet Airline</h1> 
<h3>Log In/Sign Up</h3>
    
<ul>
  <li><a  href="index.php">Start Over</a></li>
  <li><a href="greatDeals.php">Great Deals</a></li>
  <li><a href="help.php">Help/Information</a></li>
  <li><a href="contactUs.php">Contact Us</a></li>
  <li style="float:right"><a class = "active" href="logIn.php">Log In/Sign up</a></li>
</ul> 
    
<div class="buttonFormat">
    <section>
        <content>
            <?php include('logInErrors.php') ?>
            <div id="container">
                <form action="logIn.php" method="post"> 
                    <label for="username">Email:</label>
                    <input type="text" id="username" name="username">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    <div id="lower">
                        <div>
                            <signUpAlign2><label class="check" for="checkbox">Don't have an account?</label></signUpAlign2>
                            <signUpAlign><a type="submit" class="check" href="createAccount.php">Click here to Sign Up</a></signUpAlign>
                        </div>
                        
                        <button type="submit" name="login_user">Log In</button>
                    </div><!--/ lower-->
                </form>
            </div>
            
        </content>
    </section>
</div>
<footer></footer>
</body>    
</html>