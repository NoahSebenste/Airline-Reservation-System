<?php
$db = new PDO('sqlite:C:\xampp\htdocs\DBProject\AirlineDatabase.db');
$errors = array();

if (isset($_POST['whatever'])) {
    $fid = $_POST["flightID"];
    
    //prepare statement, with unnamed query parameters denoted by ? placeholder
    $stmt = $db->prepare('SELECT * FROM Flight WHERE fid = :fid');
    $stmt ->bindValue(':fid', $fid,PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
        foreach($results as $row) {
        $orig = $row['orig'];
        $dest = $row['dest'];
        }
    
    //prepare statement for return flights
    $ret = $db->prepare('SELECT * FROM Flight WHERE orig = :orig AND dest = :dest');
    $ret ->bindValue(':orig', $dest,PDO::PARAM_STR);
    $ret ->bindValue(':dest', $orig,PDO::PARAM_STR);
    //bind query parameters to placeholders and execute query
    $ret->execute();
    $return = $ret->fetchAll(PDO::FETCH_ASSOC);
    
    
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
    
}



?>