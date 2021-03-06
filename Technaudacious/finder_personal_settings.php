<html>
<head>
	<title>A New Tinder!</title>
	<style>
		body {
			margin: 0px;
			/*margin-right: 5px;*/
		}
		.header {
			/*position: fixed;*/
			height: 10%;
			width: 100%;
			top: 0px;	
			z-index: 3;		
		}
		.header #background, .header #labels {
			position: absolute;
			/*background-color: white;*/
			/*padding: 0 0 5%;*/
			width: 100%;
			height: 100%;
			background-size: 100%;
			/*margin-right: auto;*/
			/*margin-left: auto;*/
		}

		.header #labels {
			position: fixed;
			background-color: transparent;
			color: #006793;
		}

		.header #background {
			position: absolute;
			background-color: darkblue;
			height: 10%;
			width: 100%;
			opacity: 0.6;
		}

		.header #search {
			position: fixed;
			width: 30%;
			height: 7%;
			left: 35%;
			top: 1.5%;
			background-color: #f29b9b;
			opacity: 0.5;
		}

		.header #logo {
			position: fixed;
			/*margin-top: 1.5%*/
			/*margin-left: 5%;*/
			left: 1.5%;
			top: 1.5%;
			width: 12%;
			height: 7%;
			margin-left: auto;
			margin-right: auto;
		}

		.header #login {
			position: fixed;
			right: 1.5%;
			top: 2%;
			width: 5%;
			height: 7%;
			margin-left: auto;
			margin-right: auto;
		}

		.dropbtn {
			position: fixed;
			right: 1.5%;
			top: 1.5%;
			width: 16%;
			height: 7%;
			margin-left: auto;
			margin-right: auto;
			cursor: pointer;
			font-size: 120%;
			font-family: "Herculanum";
		}

		.dropdown {
			/*right: 0;*/
			background-color: : #006793;
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: fixed;
			right: 1.5%;
			top: 8.5%;
			margin-right: auto;
			background-color: green;
			border: 1px;
			border-color: black
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		    font-family: Herculanum;
		}

		.dropdown-content a {
			/*right: 10%;*/
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
			font-family: "Herculanum";
		}

		.dropdown-content a:hover {background-color: #fff;}

		.dropdown:hover .dropdown-content {display: block;}

		.dropdown:hover .dropbtn {background-color: #006793;}

		table.form {
			position: absolute;
			top: 20%;
			right: 10%;
			table-layout: auto;
			font-size: 250%;
			/*width: 5%;*/
			/*column-width: 250px;*/
		}

		.artistphoto {
			position: absolute;
			left: 20%;
			top: 20%;
			width: 20%;
			/*height: 50%;*/
		}

		.content{
		    width:100%;
	    	height:5000px;
	    	background-color:#005b8e;
		}

		form.formclass {
			position: fixed;
			top: 20%;
			right: 20%;
		}

		input::-webkit-input-placeholder {
		    font-size: 20px;
		    line-height: 3;
		    font-family: Herculanum;
		}
		.arrow_down {
			position: absolute;
			bottom: 0%;
			left: 50%;
			margin-top: 0;
			margin-left: -3%; 
			width: 0;
			height: 0;
			border-left: 50px solid transparent;
			border-right: 50px solid transparent;
			border-top: 50px solid #bcbcbc;
			opacity: 0.5;
		}

		table.second {
			position: absolute;
			top: 110%;
			left: 10%;
			table-layout: fixed;
			width: 70%;
			font-size: 250%;
		}
		button.editor{
			position: absolute;
			width: 16%;
			font-family: "Herculanum";
			background-color: #c68d1f;
			border: 0px;
		}

	</style>
	<!-- <script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script> -->
	<script type="text/javascript">
		function an_alert() {
			alert("Hi")
		}
		function go_below() {
			var height = window.screen.availHeight;
			// alert (height);
			// document.getElementById("goto").scrollIntoView();
			window.scrollTo(0, height);
			// for (i = 0; i < 500; i++) {
			// 	window.scrollTo(0, 1);
			// 	sleep(1);
			// }
		}

	</script>
</head>
<body bgcolor = "#006793">
	<?php
		session_start();
		$mysqli = new mysqli("localhost", "root", "", "A_New_Tinder");
	    $mysqli->query("USE A_New_Tinder");
		$result = $mysqli->query("SELECT * FROM Finders WHERE ID = \"" . $_SESSION['ID'] . "\"");
			if($result->num_rows > 0)
            	{
                	$row = $result->fetch_assoc();
	?>
	<image src = "ArtistImage.jpg" class = "artistphoto"></image>
	<table class = "form">
 		<!-- <col width="130"> -->
		<tr>
			<td>
				Name: 
			</td>
			<td>
				<p id = "Name"><? echo $row['Name']; ?></p>
				<!-- For Sudarshaan: You don't need any JS function here. All you need to do is make this table as it is in PHP and then insert the artist name in it's place (using string concatenation). The formatting etc. should happen automatically. You won't need any functions for it.  -->
			</td>
			<td>
				<button class = "editor">Edit</input>
			</td>
			<td>
				<a href=""><button class = "editor">Edit</button></a>
			</td>
		</tr>
		
		<tr>
			<td>
				City: 
			</td>
			<td>
				<p id = "City"><? echo $row['City']; ?></p>
			</td>
			<td>
				<a href=""><button class = "editor">Edit</button></a>
			</td>
		</tr>
		<tr>
			<td>
				State: 
			</td>
			<td>
				<p id = "State"><? echo $row['State']; ?></p>
			</td>
			<td>
				<a href=""><button class = "editor">Edit</button></a>
			</td>
		</tr>
		
		<tr>
			<td>
				Gender: 
			</td>
			<td>
				<p id = "Gender"><? echo $row['Gender']; ?></p>
			</td>
			<td>
				<a href=""><button class = "editor">Edit</button></a>
			</td>
		</tr>
		<?}?>
	<div class = "arrow_down" onmouseover = "go_below()"></div>
	<div class = "header">
		<div id = "background"></div>
			<a href = "finder_homepage.php"><image src = "Aircraft_Carrier_Design.jpg" id = "logo"></image></a>
			<form method = "post" action = "finder_search_results.php"><input id = "search" name="search" type = "text" placeholder = "&#xF002; Enter What you wish to search. "></form>
	</div>
	<div class = "dropdown">
		<button class = "dropbtn">Settings</button>
		<div class = "dropdown-content">
			<a href = "finder_homepage.php">Your Profile</a>
			<a href = "finder_personal_settings.php">Personal Settings</a>
			<a href = "logout_finders.php">Logout</a>
		</div>
	</div>


	<div class = "content">
	</div>
</body>
</html>