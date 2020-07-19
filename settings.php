<?php include('functions.php'); ?>
<?php include('parsekey.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Patient List | Medical Buddy'; ?></title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1>Medical Buddy</h1>
				<p>Welcome to Medical Buddy, view incoming patients and their information!</p>
			</div>
			<div id="navigation">
				<?php echo do_main_nav() ; ?>
			</div>
//php codes if any here


			

			<div id="footer">
				<div class="footer_half">
					<p>&copy;Sangeeta Ellankovan 2015</p>
				</div>
				<div class="footer_half t_align_right">
					<p>Powered by <a href="http://http://newinti.edu.my/main/">INTI</a></p>
				</div>
			</div>
		</div>
	</body>
</html>