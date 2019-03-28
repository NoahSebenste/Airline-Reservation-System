<?php include('generateaccount.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>    

<title>The Internet Airline - Sign Up</title>
<h1>The Internet Airline</h1> 
<h3>Create Account</h3>
    
<?php include('navBar.php') ?>   
    
<div class="buttonFormat">
    <form action="generateaccount.php" method="post">
    <section>
        <content>
          <div id="signUpContainer">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
              
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">
              
            <label for="addy"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="addy">
              
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw">

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat">

            <div class="clearfix">
              <button type="submit" name="cancel">Cancel</button>
              <button type="submit" name="crefgate">Sign Up</button>
            </div>
          </div>
        </content>
    </section>
    </form>
</div>
<footer></footer>
</body>    
</html>