<?php
session_start();
require_once "config.php";
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$people = mysqli_real_escape_string($link, $_REQUEST['people']);
$breakfast = mysqli_real_escape_string($link, $_REQUEST['breakfast']);
$lunch = mysqli_real_escape_string($link, $_REQUEST['lunch']);
$dinner = mysqli_real_escape_string($link, $_REQUEST['dinner']); 
$diet = mysqli_real_escape_string($link, $_REQUEST['diet']); 
$email = mysqli_real_escape_string($link, $_REQUEST['email']); 



$sql = "INSERT INTO meal_planner_selection (people, breakfast, lunch, dinner, diet, email) VALUES ('$people', '$breakfast', '$lunch', '$dinner', '$diet', '$email')";
if(mysqli_query($link, $sql)){
    header("Location: mealplans.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>