<?php

session_start();
include("database/connection.php");
if(isset($_REQUEST['check'])){
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pwd"];

   //take me to admin

$sql= "SELECT password FROM userlist WHERE email='$email' ";
   $res=mysqli_query($conn, $sql);
  $array=mysqli_fetch_array($res);

    if($_POST['email']=="admin" && $_POST['pwd']=="admin"){

    $_SESSION["email"]="admin";

    echo '<script> location.href = "adminpanel.php";  </script> ';
   
  }
  else if(!$res){
     $_SESSION['error_msg']="you dont have an account ";
     echo '<h1> nai </h1>';
  }
  else if($res && $array['password']!=$password){
     $_SESSION['error_msg']="wrong pasword";
     echo '<h1> dkse naa </h1>';
  }
  else{
    $_SESSION['email']=$email;
    echo '<h1> dkse </h1>';
  }
 }
    

?>