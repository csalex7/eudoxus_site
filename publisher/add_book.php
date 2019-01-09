<?php
	include_once '../Config.php';
	include '../partials/header.php';

	$title= $_POST['title'];
	$isbn= $_POST['ISBN'];
	$author= $_POST['author'];
	$category= $_POST['category'];
	$available_books= $_POST['available_books'];
	$publisher_username=$_GET['username'];

	$query= "SELECT * FROM books WHERE isbn = '$isbn'";
	$result=mysqli_query($db,$query);
	$row= mysqli_fetch_array($result);
	if(!$row){ //an to vivlio uparxei idi sto table me ta books tote den xreiazetai na to valoume ekei,an den uparxei prepei na mpei kai sto table books pera apo ta suggrammata ekdoti
		$query="INSERT INTO books(isbn,title,author,category) VALUES ('$isbn','$title','$author','$category');";
		mysqli_query($db,$query);
	}
	$query="INSERT INTO suggramata_ekdoti(username_ekdoti,isbn,quantinty) VALUES ('$publisher_username','$isbn','$available_books');";
	mysqli_query($db,$query);
	header("refresh:1; url=publisher2.php");

?>