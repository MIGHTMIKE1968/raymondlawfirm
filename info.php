
<?php


if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}

	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}

	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}

	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}

	if ($error) {
		$results='<div class="alert alert-danger" role="alert"><strong>Sorry, there is an error.</strong> Please correct the following: '.$error.' </div';
	} else {
		mail("raymondlawlive@gmail.com", "Contact message", "Name: ".$_POST['name'].
			"Email: ".$_POST['email'].
			"Message: ".$_POST['message']);
		{
		$results='<div class="alert alert-success" role="alert"><stron>Thank you! We will get back in touch with you shortly.</div>';
		}
	}
}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122672118-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122672118-1');
    </script>
    <!-- End Google Analytics -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact Us</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <link rel="stylesheet" type="text/css" href="css/info.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">

		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="img/Raymondlogo.png" width="20%" height="auto" alt="Raymond Law Logo"/></a>
      		</div>

			<div class="collapse navbar-collapse" id="bs-nav-demo">
		         <ul class="nav navbar-nav navbar-right">
        	         <li class="menu"><a href="about.html">ABOUT</a></li>
        	         <li class="menu"><a href="services.html">SERVICES</a></li>
                     <li class="menu"><a href="webcast.html">WEBCASTS</a></li>
                     <li><a href="info.php"><i class="fa fa-envelope envelope" aria-hidden="true"></i></a></li>
      	         </ul>
	        </div>

		</div>

	</nav>

    <section id="contact">
		<div class="container">

			<div class="row">
				<img class="social2 hvr-grow" src="img/Raymondlogo2.png" width="400px" height="auto" alt="Raymond Law logo 2"/>
				<h1 class="welcome">Got Legal Questions or Webcast Topic Ideas?<br>
					Let Us Know What's On Your Mind!
				</h1>

					<p><strong>Your questions and comments are welcome. raymondlawlive@gmail.com</strong></p><br>


				<div class="col-md-6 col-md-offset-3">

					<?php echo $results;?>



					<form method="post" role="form">

						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
						</div>

						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
						</div>

						<div class="form-group">
							<textarea name="message" rows="8" class="form-control" placeholder="Message..."><?php echo $_POST['message']; ?></textarea>
						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox" name="check"> I am human
							</label>
						</div>

						<div align="center">
							<input type="submit" name="submit" class="btn btn-default" value="send message"/>
						</div>

					</form>

				</div>
			</div>


		</div>
	</section>

	<div class="container footer">
			<h5 class="social">
					<a href="https://www.facebook.com/RaymondLawLive/"><img class="social2 hvr-grow" src="img/facebook.png" width="45px" height="auto" alt="Facebook"/></a>&nbsp;&nbsp;

			<a href="https://twitter.com/raymondlawlive"><img class="social2 hvr-grow" src="img/twitter.png" width="40px" height="auto" alt="Twitter"/></a>&nbsp;&nbsp;

					<a href="https://www.youtube.com/channel/UC4EGpUK43hyCMehFdLpSOGw?view_as=subscriber"><img class="social2 hvr-grow" src="img/youtube.png" width="45px" height="auto" alt="Youtube"/></a>&nbsp;&nbsp;&nbsp;

					<a href="https://www.linkedin.com/in/melvin-raymond-ab2280189/"><img class="social2 hvr-grow" src="img/linkedIn_PNG9.png" width="35px" height="auto" alt="linkedIn"/></a>
			</h5>
			<h5 class="copyright">Copyright © 2019, Melvin Raymond, Attorney at Law. All rights reserved.</h5>
</div>



    <script   src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>
