<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'crmdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

// define('DB_SERVER','db5000117829.hosting-data.io');
// define('DB_USER','dbu201733');
// define('DB_PASS' ,'uXHNtD.Xrm3k-!_');
// define('DB_NAME', 'dbs112406');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// // Check connection
// if (mysqli_connect_errno())
// {
// echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }

// $host_name = 'db5000117829.hosting-data.io';
// $database = 'dbs112406';
// $user_name = 'dbu201733';
// $password = 'uXHNtD.Xrm3k-!_';
// $connect = mysql_connect($host_name, $user_name, $password, $database);

// if (mysql_errno()) {
//   die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
// } else {
//   echo '<p>Connection to MySQL server successfully established.</p >';
// }

?>