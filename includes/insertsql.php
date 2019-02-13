<?php
	include_once "mysqlconn.php";



	$title = $_GET['title'];
	$date = $_GET['date'];
	$post = $_GET['post'];
	$vis = $_GET['selection'];


	$sql = "";
	$result = mysqli_quwey($conn, $sql);

	echo $title;
	echo $date;
	echo $post;
	echo $vis;



	if ($title == '' || $date == '' || $post == '' || $vis == 'none') {
	} else{
		
	
	}


	


	//header('Location: ../add_blogpost.php');
	

