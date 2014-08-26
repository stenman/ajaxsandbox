<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	<title>Title</title>

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>

	<!-- jQuery UI-->
	<script type="text/javascript" src="js/jquery-ui-1.11.0.custom/jquery-ui.js"></script>

	<!-- Custom JQuery UI Theme -->
	<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.0.custom/jquery-ui.css">

	<!-- AJAX processing -->
	<script type="text/javascript" src="js/responsivetextexample.js"></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<input autofocus id="forminput" type="text" name="forminput" onkeydown="postdata(this.value);" onkeyup="postdata(this.value);"/>
	<div id="ajaxinfo"></div>
</body>
</html>