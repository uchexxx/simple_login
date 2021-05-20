<?php
// registration page to add data to the database
// we start session
session_start();
// variables for connection to database
$host = "localhost";
$user = "root";
$password = "";

// connection to database
$connection = mysqli_connect($host,$user,$password);

//database
mysqli_select_db($connection, 'login');

// variables to post data
$name = $_POST['user'];
$pass = $_POST['password'];

// to query a database, store mysql code in the s variable
$s = "select * from newusers where name = '$name'";
$result = mysqli_query($connection, $s);

// to check if name is already in database
$num = mysqli_num_rows($result);

if($num == 1){
    echo 'Username is already taken!';
}else{
    $insert = "insert into newusers (name,passwords) values('$name','$pass')";
    mysqli_query($connection, $insert);
    echo 'registration successful!';
}

?>
