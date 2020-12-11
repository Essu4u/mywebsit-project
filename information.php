<?php

session_start();

$con= mysqli_connect("localhost", "root") ;

mysqli_select_db($con, "contact_message");



$name=$_POST["name"];
$lastname=$_POST["last"];
$email=$_POST["email"];
$location=$_POST["location"];  
$gender=$_POST["gender"] ;  
$message=$_POST["message"];                       


$s="select * from message_information where email= '$name'";
$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num==1000){
    echo"out of limit";

}else{
    $reg="insert into message_information (name, lastname, email, location,gender,message) value('$name', '$lastname', '$email','$location','$gender','$message')";
    mysqli_query($con,$reg);
    echo"registration successfull";
}











?>