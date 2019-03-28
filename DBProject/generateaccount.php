<?php
$db = new PDO('sqlite:C:\xampp\htdocs\DBProject\AirlineDatabase.db');
$errors = array();
if (isset($_POST['cancel'])) { 
    header("Location: logIn.php");
}


if (isset($_POST['crefgate'])) {
    $name = $_POST["name"];
    $addy = $_POST["addy"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $passwordRepeat = $_POST["psw-repeat"];
    //prepare statement, with unnamed query parameters denoted by ? placeholder
    $query = "INSERT INTO Customer (cname, email, address, password) VALUES (:name,:email,:addy,:password)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':name', $name,PDO::PARAM_STR);
    $stmt->bindValue(':email', $email,PDO::PARAM_STR);
    $stmt->bindValue(':addy', $addy,PDO::PARAM_STR);
    $stmt->bindValue(':password', $password,PDO::PARAM_STR);
    if($stmt->execute())
    {
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
        header("Location: billingInfo.php");   
    } 
        
        
        
    } else {
        print_r($stmt->errorInfo());
    }
}
?>