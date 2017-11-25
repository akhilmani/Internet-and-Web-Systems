<!DOCTYPE html>
<html>
<head>
	<title> Trending Topics</title>
</head>
<body style="background-color: #A9E1A5">


<?php
require 'connection.php';
$dc_q = "SELECT trending from ttopics WHERE continent = '".$_POST['conti']."' ";
$dc_res = mysqli_query($conn,$dc_q);
if($dc_res -> num_rows > 0)
	while($row = $dc_res->fetch_assoc())
		echo '<p>'.$row['trending'].'<br></p>';
else
	echo 'error';

redirect("/quora_1.php");
?>
<?php
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
?>

</body>
</html>