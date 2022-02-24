

<html>
<head>
	</head>
	<body>

	<form action="Control/result.php" method="post">
		  Username
	<input type="text" name="uname">

	<?php
	echo $nameerr;
	?>

	<br>
	Password
	<input type="text" name="pass">
    
    select a radio
    <input type="radio" name="radio" value="r1"> Radio 1
    <input type="radio" name="radio" value="r2"> Radio 2

    select a box
   <input type="checkbox" name="box1" value="box1"> Box 1
   <input type="checkbox" name="box2" value="box2"> Box 2



	<input type="submit" name="Submit">
	</form>


	</body>
	</html>	