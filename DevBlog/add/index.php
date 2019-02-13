<!DOCTYPE html>
<html>
<head>
	<title>Add a Blogpost</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class ="topbg">
		<div>
			<button  id = "returnHome"><a href="../index.php">Return Home</a></button>
		</div>

		<form action="../../includes/insertsql.php" method="_POST">
			<div class="blogpost">
				<p class ="header">Type Below to Add a Post</p><br>
				<div class="inputs">
					<p>Title:<input type="text" name="title" style="margin:0px 75px 2px 10px">Date:<input type="date" name="date">
						<select name='selection'>
							<option value="none">Visibility</option>
							<option disabled>----------</option>
							<option value="private">Private</option>
							<option value="public">Public</option>
						</select>

					</p>
					<hr align='left'>
				</div>

				
				<textarea name = 'post'maxlength="65,535" rows="20" cols="100" placeholder="Input text here."></textarea><br>

				<button class ="submit" name = "submit">Submit</button>
			</div>
	</form>
	</div>

	



</body>
</html>