<!-- index.html -->

<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title>Submitting form via AJAX - Example</title>

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>

	<!-- AJAX processing -->
	<script type="text/javascript" src="js/formexample.js"></script>

	<!-- Using bootstrap for looks -->
	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- load bootstrap via CDN -->
</head>
<body>
	<div class="col-sm-6 col-sm-offset-3">

		<h1>Processing an AJAX Form</h1>

		<form id="form_reg" method="POST">
			<div id="name-group" class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" placeholder="Your Name">
			</div>
			<div id="email-group" class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" placeholder="example@example.com">
			</div>
			<div id="shoesize-group" class="form-group">
				<label for="shoeSize">Shoe Size</label>
				<input type="text" class="form-control" name="shoeSize" placeholder="Your Shoe Size">
			</div>
			<button type="submit" class="btn btn-success">Submit <span class="fa fa-arrow-right"></span></button>
		</form>

	</div>
</body>
</html>
