<?php
include "../aal task/test.php";
?>
<html>
<head>
	 <title>
	 	  my site
</title>
</head>
<body>
<h1> hello </h1>

<form action,,"" method-"post" enctype-"multipart/form-data">
username  <input type-"text" name-"username"> <?php echo $nammer: ?>
Password <input type-"password" name-"password">
select a radio:
<input type="radio" name="r1" value="radio1"> Radio 1
<input type="radio" name="r1" value="radio2"> Radio 2

<input type="checkbox" name="c1" value="check1"> Box 1
<input type="checkbox" name="c2" value="check2"> Box 2>

<input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">
<input type="submit" value="Submit">
</form>
</body>
</html>	 	  