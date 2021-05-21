<?php

include("db_connect.php");

if (isset($_POST['upload'])) {
	//$name = $_FILES['file'];
	//echo "<pre>";
	//print_r($name);
	//exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];

	$file_destination = "upload/" . $file_name;

	if (move_uploaded_file($temp_name, $file_destination)) {

		$q = "INSERT INTO qualification_tb (sscimg_tb) VALUES ('$file_name')";

		if (mysqli_query($conn, $q)) {

			$success = "img uploaded successfully.";
		} else {

			$failed = "Something went wrong??";
		}
	} else {

		$msz = "Please select a img to upload..!";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Upload pdf into the Database Using Php</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- <script src="assets/js/jquery.min.js"></script> -->
</head>

<body>

	<div class="container mt-3">

		<h1 class="text-center mb-5"><b>Upload pdf into the Database Using Php</b></h1>
		<div class="col-lg-8 m-auto">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label><strong>Upload a image:</strong></label>
					<input type="file" name="file" class="form-control">
				</div>
				<?php if (isset($success)) { ?>
					<div class="alert alert-success">



						<?php echo $success; ?>

					</div>
				<?php } ?>
				<?php if (isset($failed)) { ?>
					<div class="alert alert-danger">



						<?php echo $failed; ?>

					</div>
				<?php } ?>

				<?php if (isset($msz)) { ?>
					<div class="alert alert-danger">



						<?php echo $msz; ?>

					</div>
				<?php } ?>
				<input type="submit" name="upload" value="Upload" class="btn btn-success ml-3">
			</form>
		</div>
	</div>
</body>

</html>