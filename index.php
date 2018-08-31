<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $myArray = array("ali", "hasan", "reza", "asgar", "akbar");
    $lenMyArray = count($myArray);

    include "Class.ArraySet.php";

    $obj = new ArraySet();
    foreach($myArray as $key => $value){
        $obj->setArray($key, $value);
    }
    $out = $obj->sortArray();

    foreach($out as $key => $value){
        echo $key.": ".$value."<br>";
    }

?>