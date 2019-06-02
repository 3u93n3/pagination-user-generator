<?php

class User {
    function __construct($fName = 'John', $lName = 'Smith', $age = 33, 
    $gender = "M", $country = "UK", $pass = "pass"){
        $this->fName = $fName;
        $this->lName = $lName;
        $this->age = $age;
        $this->gender = $gender;
        $this->country = $country;
        $this->pass = $pass;
    }
}

function rndArr($arr){    
    if(is_string($arr)){
        return mt_rand(0, strlen($arr) - 1);
    }else{
        return mt_rand(0, count($arr) - 1);
    }
    
} 

function passF() {
    $pass = "abcdefghijklmnopqrstuvwxyz1234567890";
    $x = "";
    for($i = 0; $i < 8; $i++){
        $x .= $pass[rndArr($pass)];        
    }
    return $x;
}

function age() {
    $y = mt_rand(21, 70);    
    return $y;
}

function user() {    
    $fNameF = ["Beverly", "Cathryn", "Thalia", "Mae", "Kyra", "Nora", 
    "Susan", "Krystina", "Claudia", "Katrina", "Cleo"];
    $fNameM = ["Patrick", "Dustin", "Elbert", "Oswald", "Rene", "Owen", 
    "Edison", "Drake","Damian", "Eric", "Cleve"];
    $lName = ["O\'Connell", "Wilkinson", "Lang", "Bosco", "Glover", "Adams",
    "Reynolds", "Reilly", "Mann", "Mills"];
    $gen = ["F", "M"];
    $country = ["Costa Rica", "United States", "Armenia", "Liechtenstein",
    "Indonesia", "Slovenia", "Syria", "Finland", "Germany"];

    if(rndArr($gen) == "M"){
        $fName = $fNameM[rndArr($fNameM)];
        $g = "M";
    } else{
        $fName = $fNameF[rndArr($fNameF)];
        $g = "F";
    }
    
    $per = new User($fName, $lName[rndArr($lName)], age(), 
    $g, $country[rndArr($country)], passF());

    return $per;
}

