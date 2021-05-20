<?php

// start session

session_start();

// variables to connect to database

$host = 'localhost';
$user = 'root';
$password = '';

// connection to database
$connection = mysqli_connect($host,$user,$password);

// to select database
mysqli_select_db($connection, 'login');

// variables to post data
$name = $_POST['user'];
$pass = $_POST['password'];

// the query
$s = " select * from newusers where name = '$name' && passwords = '$pass'";
$the_result = mysqli_query($connection, $s);

$number = mysqli_num_rows($the_result);

// condition to check if name is already in database

if($number == 1){
   $_SESSION['username'] = $name;
   // we can use the name variable in the homepage stored in the _session variable
   header('location:home.php'); 
}else{
   echo "You need to register first!";
}


?>