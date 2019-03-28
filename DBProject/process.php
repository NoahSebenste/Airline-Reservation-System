<?php

$db = new PDO('sqlite:C:\xampp\htdocs\DBProject\AirlineDatabase.db');
$errors = array();

if (isset($_POST['login_user'])) {
    $email = $_POST["username"];
    $password = $_POST["password"];
    
  if (empty($email)) {
  	 array_push($errors, "Email is required");
  }
    
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
    
    
    
    //prepare statement, with unnamed query parameters denoted by ? placeholder
    $stmt = $db->prepare('SELECT * FROM Customer WHERE password = :password AND email = :email');
    $stmt ->bindValue(':password', $password,PDO::PARAM_STR);
    $stmt ->bindValue(':email', $email,PDO::PARAM_STR);
    //bind query parameters to placeholders and execute query
    $bool = $stmt->execute();
    
    $result = $stmt->fetchAll();
      foreach($result as $row) {
        $cid = $row['cid'];
        $name = $row['cname'];
        $address = $row['address'];
        }
    
    if (count($result) > 0) {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["cid"] = $cid;
        $_SESSION["name"] = $name;
        $_SESSION["address"] = $address;
        header("Location: index.php");
        
    } else {
        array_push($errors, "Username or Password is incorrect");
    }
}



?>