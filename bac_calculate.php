<?php
    //preparing all the variables 
    $weight = $_GET['weight'];
    //kg to pound convert
    if($_GET['unit']=='kg'){
        $weight = $weight * 2.20462;
    }
//gender ko constant
    if($_GET['gender']=='male'){
        $gender_constant = 0.73;
    }
    else{
        $gender_constant = 0.66;
    }
    $no_of_drinks = $_GET['drinks'];
    $alcohol_content = $_GET['alcohol_content'];
    $alcohol_consumed = $no_of_drinks * $alcohol_content;
    $time_elapsed = $_GET['time_elapsed'];

    //bac calculate garne formula
    $BAC = (($alcohol_consumed * 5.14) / ($weight * $gender_constant)) - 0.015 * $time_elapsed;

    session_start();
    $_SESSION['BAC']=$BAC;
    header("Location:/index.php");
?>