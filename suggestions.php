<!DOCTYPE html>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">

	<head>
		<title>Analytics Dashboard for MedVR</title>
		
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  		<script type="text/javascript" src="file:///C:/Users/Marie%20Toni/Desktop/New%20folder/Analytics%20Dashboard%20Website/script.js"></script>


		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    
	    <link rel="stylesheet" href="style2.css">
	  	<script type="text/javascript" src="script.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	
	</head>

	<body>
		<?php
			include("contact.php");
		?>
		<div class = "grid-container">
		<div class = "navigation-menu-container">
			<div class="wrapper">	
				<div class ="sidebar">
					<div class = "logo"><h1>Analytics</h1></div>
						<ul>
							<li>
								<div class= "rectangle" >
									<a href="file:///C:/Users/Marie%20Toni/Desktop/NextDash/home.html#" class="inactive"><h4><i class="material-icons">insights</i></h4><h4>Overview</h4></a>
								</div>
							</li>
								
							<li>
								<div class= "rectangle">
									<a href="" class="inactive"><h4><i class="material-symbols-outlined">summarize</i></h4><h4>Past Summaries</h4></a>
								</div>
							</li>

							<li>
								<div class= "active-rectangle">
									<a href="file:///C:/Users/Marie%20Toni/Desktop/NextDash/suggestions.php" class="active"><h4><i class="material-symbols-outlined">comment</i></h4><h4>Suggestions</h4></a>
								</div>
							</li>	
						</ul>	
				</div>
			</div>
		</div>

			<div class = "main-content-suggestions">
				<div class="wrapper">	
					<div class="container-title"><h2>Make a suggestion</h2></div>
					<div class = "contact">
					<form action="contact.php" method="post">
						First Name: <input type="text" name="first_name"><br>
						Last Name: <input type="text" name="last_name"><br>
						Email: <input type="text" name="email"><br>
						Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
						<input type="submit" name="submit" value="Submit">
					</form>

				</div>
				</div>
		</div>
	</div>
</body>
</html>
