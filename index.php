<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index_style.css">
	<title>Trevor Cunningham</title>
</head>
<body>

	
	<?php 
		include_once 'includes/mysqlconn.php';

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
			<div class = "name">Trevor Cunningham's Portfolio</div>
			<hr style="margin-top:10px">
			<table  class="nav">
				<tr>
					<td><a href="Projects/index.php"><img src="pictures/ProjectsBtn.png" class = "btns"></a></td>
					<td><a href="DevBlog/index.php"><img src="pictures/DevBlogBtn.jpg" class = "btns"></td>	
					<td><a href="AboutMe/index.php"><img src="pictures/AboutMeBtn.png" class = "btns"></a></td>
				</tr>
			</table>
		</div>

		
		<div id='main'>
		

			<div id='projects'>
				<p class="boxheader"><a href="Projects/index.php">Projects</a></p>
				<hr align="center" width="99.8%">

				<div class="pj" onclick="gotoProject(0)">
					<table>
						<tr>
							<td class = 'tbname'>
								Interactive Pokedex
							</td>

							<td class = 'tbdate'>
								1/30/2019
							</td>
						</tr>

						<tr>
							<td class = 'tbreadme'>
								This was made with js, php, and mySQL. It uses a local server to make php requests to mySQL and displays all Pokemon entrys in a list of buttons...
							</td>

							<td class = 'tbimg'>
								<img src="pictures/interactiveDex.png" width='175' height='100'/>
							</td>
						</tr>
					</table>
				</div>

				<div class="pj" onclick="gotoProject(1)">
					<table>
						<tr>
							<td class = 'tbname'>
								Image Tinker
							</td>

							<td class = 'tbdate'>
								1/21/2019
							</td>
						</tr>

						<tr>
							<td class = 'tbreadme'>
								This was made with python and tkinter. It allows for the user to make simple changes to many images at once.
							</td>

							<td class = 'tbimg'>
								<img src="pictures/photoTinker.png" width='175' height='100'/>
							</td>
						</tr>
					</table>
				</div>

				<div class="pj" onclick="gotoProject(2)">
					<table>
						<tr>
							<td class = 'tbname'>
								Pocket Planner
							</td>

							<td class = 'tbdate'>
								10/11/2018
							</td>
						</tr>

						<tr>
							<td class = 'tbreadme'>
								This app was made with MIT App Inventor 2. It is meant for students to keep track of weekly assignments and upcoming tests or events.
							</td>

							<td class = 'tbimg'>
								<img src="pictures/pocketPlanner.png" width='175' height='100'/>
							</td>
						</tr>
					</table>
				</div>

			</div>

			<div id='devblogs'>
				<p class = "boxheader"><a href="DevBlog/index.php">Developer Blogs</a></p>
				<hr align="center" width="99.8%" style="margin-bottom:3%">
				<!--<a href=""><div class='blogpost'><p class = 'bptitle'>(1/25/2019) Interactive Pokedex 1.0.1 Alpha Testing </p><p class='bppost'>This is the first line of the dev blog for Interactive Pokedex 1.0.1 Alph....</p></div></a> -->
			</div>
		</div>



	</div>
	<footer id="footer">
		<table id="fttbl">
			<td>
				<a target="_blank" href="https://github.com/"><img src="pictures/githublogo.jpg" width="50" height="50"></a>
			</td>
			<td>
				<a target="_blank" href="https://www.linkedin.com/"><img src="pictures/linkedinlogo.png" width="50" height="50"></a>
			</td>
			<td>
				<a target="_blank" href="https:/twitter.com/"><img src="pictures/twitterlogo.png" width="50" height="50"></a>
			</td>
			<td>
				<p style="color:#004F00; font-family: Arial; font-size: 24px;"><a href="mailto:trevjcunning00@gmail.com?Subject=Hello%20again" target="_top">Send Mail</a></p>
			</td>
		</table>

		
	</footer>



<script src="scripts.js"></script>
</body>
</html>
