<?php
$hostname="127.0.0.1:3307";
$username="root";
$password="";
$dbname="mitchotel";
			
$mitc=new mysqli($hostname,$username,$password,$dbname);

	if (!$mitc)
		{
	        echo "Database Connection Failed" . mysqli_connect_error(); //echo means print (boleh je klau nak tulis print) //(.)titik untuk sambung..
		}
?>