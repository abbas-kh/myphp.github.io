<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1>Contact Form</h1>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" name="subject" class="form-control">
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea name="message" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="msubmit" class="form-control">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php    
		if (isset($_POST['msubmit'])) {
			$to = "ak9950025@gmail.com";
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$from = $_POST['email'];
			$header = "From: $from";

			mail($to, $subject, $message, $header);
			echo "Mail sent";
		}
	?>