<?php
#Database connection here...
$host = '127.0.0.1';
$username = 'root';
$password = 'mhret';
$databaseName = 'lostNfoundDB';

$dbc = mysqli_connect($host, $username, $password, $databaseName) OR die('Error: '.mysqli_connect_error());

$id = addslashes($_REQUEST['id']);

$query = "SELECT * FROM Item WHERE idItem = $id";
$image = mysqli_query($dbc, $query);

$image = mysqli_fetch_assoc($image);

$image = $image['itemPic'];

header("Content-type: image/jpeg");
echo $image;
?>