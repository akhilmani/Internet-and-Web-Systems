<!DOCTYPE HTML>
<head>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<title>
		Quora 2.0 - Where Experts Get Smarter
	</title>
	<link rel="stylesheet" type="text/css" href="index_css.css">
</head>



<body  style=" margin: 0 auto; padding: 0; border-collapse: collapse; background: white">
<?php
require 'connection.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<div style="position: fixed; height: 10%; width: 100%; margin-top: -15px; background: #FFCDD2; box-shadow: 1px 1px 1px 1px #EAEEF5">
	<div style="margin-left: 100px"><a href="" style="text-decoration:none">
		<h1 style="color: #222;">Quora 2.0 - Where Experts Get Smarter</h1></a>	
		</div>
			
			<div style="margin-top: -50px; margin-left: 250px">  
			
				 <button class = "profile-buttons" type="button" onclick = "show()" style="color: #222;margin-left: 500px"><img src="https://www.materialui.co/materialIcons/action/settings_grey_192x192.png" height= "20px">Settings</button>	
				 <button class = "profile-buttons" type="button" style="color: #222; "><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/194977-200.png" height= "20px">Notifications</button>
				
				
				<button class="aq"; type="button" style="color:white"><img src="http://www.clker.com/cliparts/a/1/a/e/11971216961464452784ernes_mano_con_penna_-_hand_and_pen.svg.hi.png" height="20px">Express</button>
				<button class = "profile-buttons" type="button" style="color: #222"><img src="https://maxcdn.icons8.com/Share/icon/Users//about_us1600.png" height= "20px"><a class = "about" href = "iws_lab1.html">About Me</a></button>
			</div>
		</div>
	<div style="height: 30px;"></div>
	<input class = "search" type="text" placeholder="Search Quora 2.0 ..."></input>
	<ul class="profile-dropdown" style="list-style: none; width: 100px">
		<li class = "profile-dropdown-buttons" id="pr">Profile</li>
		<li class = "profile-dropdown-buttons" id="bl">Blog</li>
		<li class = "profile-dropdown-buttons" id="co">Content</li>
		<li class = "profile-dropdown-buttons" id="lo">Log Out</li>
		
	</ul>
	
	<div >
		<div class = "trto">
			<form action="tt.php" method="post">
				<h2 style= "color: #695CD6">Region Specific Trending Topics</h2>
				<br>
				<select id="conti" name="conti" style="height: 75px; width: 175px; position: center">
					<!-- <a href=""> Select the Region</a> -->
					
					<option> -- Select -- </option>
						<?php
							$cnames = "SELECT continent FROM ttopics";
							$res = $conn->query($cnames);
							if($res->num_rows > 0)
								while($row = $res->fetch_assoc())
									echo '<option value = ' . $row['continent'] . '>' . $row['continent'] . '</option>';
							else
								echo "0 results";
						?>
				</select>
				<br><br><br><br><br><br><br><br><br><br>
			<input class = "con" type="submit" name="printconti" name="submit">
			</form>
		</div>
	</div>
	<div class = "content">
		
	<h1 style="text-align: center;color: #EF5350;font-family: 'Raleway', sans-serif;"><i>Feed</i></h1>
	<?php
	$sql = "SELECT upvotes, question, answer FROM qcontent";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo '<p><b>'. $row["question"].'</b><br><br><b>A:</b><i> '.$row["answer"].'</i><br><br>'.'<button onclick = func() class="upvote">UpVote '.$row["upvotes"].'</button> &nbsp' .'</p><br>';
		}
	}
	else
		echo "0 results";
	?>
		
</div>
	
	<script src="index_js.js"></script>

</body>