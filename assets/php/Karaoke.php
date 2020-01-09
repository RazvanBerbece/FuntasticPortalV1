<?php


$user = 'epiz_22465309';
$password = 'fb5HuriNdV5';

$db = 'epiz_22465309_KaraokeContest';

$host = 'sql200.epizy.com';
$port = 3306;


/*
$user = 'root';
$password = 'root';
$db = 'KaraokeContest';
$host = 'localhost';
$port = 3306;
*/

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

$name = $_POST['name'];
$song = $_POST['song'];
$artist = $_POST['artist'];
$other = $_POST['other'];

if($name != '' && $song != '' && $artist != ''){

//Insert Query of SQL
mysqli_query($link,"INSERT INTO Contenders(Name, Song, Artist, Other) VALUES ('$name', '$song', '$artist', '$other')");
}

else{
	//Not sending the form
}

mysqli_close($link); // Closing Connection with Server

?>