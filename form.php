<!DOCTYPE HTML>

<html>
	<head>
		<title>ilium</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
			  <h1>&nbsp;</h1>
			  <nav id="nav">
					<ul>
					  <li>&nbsp;</li>
					  <li><a href="">Sign up</a></li>
					  <li>&nbsp;</li>
					  <li></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
					  <h2>Join ilium</h2>
					  <p>Apply to become a member</p>
					</header>

					<a href="#" class="image fit"></a>
                    
                     
<?php

 require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
 use google\appengine\api\cloud_storage\CloudStorageTools;
 $options = [ 'gs_bucket_name' => 'cdn.prtzl.net' ];
 $upload_url = CloudStorageTools::createUploadUrl('/form.php', $options);
   if(isset($_POST['do-upload']) AND $_POST['do-upload'] === "yes"){
   $yesupload = $_POST['do-upload'];
   preg_match("/yes/", "".$yesupload."");

   $filename = $_POST['name'] . '-' . $_FILES['testupload']['name'];

   $gs_name = $_FILES['testupload']['tmp_name'];
   move_uploaded_file($gs_name, 'gs://cdn.prtzl.net/'.$filename.'');
?>

<div class="contentArea">
<?php
echo "<b>Application sent!</p>";
}

echo"</div>";
?>

<form class="SomeSpaceDude" action="<?php echo $upload_url?>" enctype="multipart/form-data" method="post">
<p>Files to upload: </p> <br>
<input type="text" name="name"><br>
 <input type="hidden" name="do-upload" value="yes">
 <input class="SomeSpaceDude topcoat-button" type="file" name="testupload" >
 <input class="SomeSpaceDude topcoat-button" type="submit" value="Upload">
</form>
</div>

</body>
                    
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
				  <ul class="icons">
						<li></li>
						<li><a href="https://soundcloud.com/iliumcollective" class="icon fa-soundcloud"></a></li>
						<li></li>
					</ul>
					<ul class="copyright">
					  <li>&copy; Ilium, founded by Andrew Sweeney & Jackson Koeper</li>
						<li>Built by quinn.prtzl.net</li>
						<li>Design by templated.co</li>
					</ul>
				</div>
			</footer>

	</body>
</html>