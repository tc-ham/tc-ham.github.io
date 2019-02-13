<!DOCTYPE html>
<html>

<head>
	<title>Developer Blog</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	
	
</head>
<body>


	<?php 
		include_once '../includes/mysqlconn.php';

		$sql ="SELECT * FROM dev_blog;";

		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		$posts = array();

		if ($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)){
				array_push($posts, array($row['dates'], $row['type'], $row['post'], $row['title']));
			}
		}
		
		echo '<script>';
		echo 'var posts = '.json_encode($posts).';';
		echo '</script>';

	?>


<div id="container">

		<div class="firstdiv">
			<div class = "name">Developer Blog</div>
			<hr style="margin-top:10px">
			<table  class="nav">
				<tr>
					<td><a href="../Projects/index.php"><img src="../pictures/ProjectsBtn.png" class = "btns"></a></td>
					<td><a href="../index.php"><img src="../pictures/HomeBtn.png" class = "btns"></td>	
					<td><a href="../AboutMe/index.php"><img src="../pictures/AboutMeBtn.png" class = "btns"></a></td>
				</tr>
			</table>
		</div>

		<div id='main'>

			<table id ='post_tbl'>

				<tr id = 'postrow'>
					<!--
					<td>
						<div class="card bg-light mb-3"  onclick="update()" onmouseover="cardhover(0)" onmouseout="cardout(0)">
						  <div class="card-header">Header</div>
						  <div class="card-body">
						    <h5 class="card-title">Light card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
					</td>
					-->
				</tr>

			</table>
			

			<div id="jumbotron" style="margin-left: 1.5%;">
			  <h1 id="display-4">Select a Post Above to View</h1>
			  <p id="lead"></p>
			  <hr id="my-4">
			  <p id ="bpBody"></p>  
			</div>


		</div>




</div>






<footer id="footer">
		<table id="fttbl">
			<td>
				<a target="_blank" href="https://github.com/"><img src="../pictures/githublogo.jpg" width="50" height="50"></a>
			</td>
			<td>
				<a target="_blank" href="https://www.linkedin.com/"><img src="../pictures/linkedinlogo.png" width="50" height="50"></a>
			</td>
			<td>
				<a target="_blank" href="https:/twitter.com/"><img src="../pictures/twitterlogo.png" width="50" height="50"></a>
			</td>
			<td>
				<p style="color:#004F00; font-family: Arial; font-size: 24px;"><a href="mailto:trevjcunning00@gmail.com?Subject=Hello%20again" target="_top">Send Mail</a></p>
			</td>
		</table>

		
	</footer>

</body>
<script src="scripts.js"></script>
</html>