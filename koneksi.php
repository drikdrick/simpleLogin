<?php

$host="localhost";

$user="root";

$pass="";

$dbName="simple_login";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if(!$conn){

                "KoneksiGagal".mysqli_connect_error();

}

?>