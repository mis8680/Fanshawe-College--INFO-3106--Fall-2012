<html>
<head>
	<title>GET array with Forms</title>
</head>
<body>
	

<div style="padding: 10px 10px; background: #eee;">
	<?php print_r( $_GET ); ?>
</div>

<form mehtod="get" action="get-array-2.php">

<p><label for="search">Search:</label><input type="text" name="search" id="search" value="" maxlength="45" /></p>

<p><input type="submit" name="button" value="Button" /></p>

</form>	
</body>
</html>