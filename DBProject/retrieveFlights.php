<?php
$db = new PDO('sqlite:C:\xampp\htdocs\DBProject\AirlineDatabase.db');
$errors = array();

if (isset($_POST['orig_dest'])) {
    $orig = $_POST["orig"];
    $dest = $_POST["dest"];

    
    //prepare statement, with unnamed query parameters denoted by ? placeholder
    $stmt = $db->prepare('SELECT * FROM Flight WHERE orig = :orig AND dest = :dest');
    $stmt ->bindValue(':orig', $orig,PDO::PARAM_STR);
    $stmt ->bindValue(':dest', $dest,PDO::PARAM_STR);
    //bind query parameters to placeholders and execute query
    $stmt->execute();
    
    //prepare statement for return flights
    $ret = $db->prepare('SELECT * FROM Flight WHERE orig = :orig AND dest = :dest');
    $ret ->bindValue(':orig', $dest,PDO::PARAM_STR);
    $ret ->bindValue(':dest', $orig,PDO::PARAM_STR);
    //bind query parameters to placeholders and execute query
    $ret->execute();
    
    //converts the number to the actual origin city name
    $origCity = $db->prepare('SELECT * FROM City WHERE cityid = :id');
    $origCity->bindValue(':id', $orig,PDO::PARAM_STR);
    $origCity->execute();
    $origCity = $origCity->fetchAll();
        foreach($origCity as $row) {
        $origCityName = $row['title'];  
        }
    
    //converts the number to the actual destination city name
    $destCity = $db->prepare('SELECT * FROM City WHERE cityid = :id');
    $destCity->bindValue(':id', $dest,PDO::PARAM_STR);
    $destCity->execute();
    $destCity = $destCity->fetchAll();
    foreach($destCity as $row) {
        $destCityName = $row['title'];
        }

    //stores the flight results in here
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $return = $ret->fetchAll(PDO::FETCH_ASSOC);

}



?>