<?php
	include_once 'Config.php';

	$title= $_POST['title'];
	$isbn= $_POST['ISBN'];
	$author= $_POST['author'];
	$category= $_POST['category'];
	$available_books= $_POST['available_books'];
	$publisher_username=$_GET['username'];

	$query= "INSERT INTO suggrammata(title,isbn,author,category,quantity,publisher_username) VALUES('$title','$isbn','$author','$category','$available_books','$publisher_username');";
	mysqli_query($db,$query);

	header("refresh:1; url=publisher2.php");

?>