<?php
    ini_set('display_errors', 1);   // show errors for debugging
    $firstName = "Jane";
    $lastName = "Doe";
    $age = 35;
    $married = true;
    $childrenNames = array("Alice", "Bob");
   
    $fullName = $firstName . " " . $lastName;    
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;

    function getIsSettled($age, $married) {
       $dogYears = $age/7;
       $isAdult = $dogYears > 4;
       $isSetttled = $isAdult and $married;
       return $isSettled;
   }

   $isSettled = gettIsSettled($age, $married);
   $isSettled = gettIsSettled(5, false);
?>

