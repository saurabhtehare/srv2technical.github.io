<!DOCTYPE html>
<html>
<head>
	<title>SRV2-Contact</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Gelasio|Josefin+Sans&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	h1 {font-size: 40px;}
	p { text-align:center;font-family: "Times New Roman", Times, serif;}
</style>
<body>
<?php include 'menu.php'; ?>

<div  class="w3-container w3-pink">
  <br>
  <br>
  <h1 >SRV2 Technical</h1>
  
  <p>..........tech developer..........</p>
  <br>
  <br>
  <br>
</div><!-----------Get in touch-------->
<section id="Contact">
	<div class="container">
		<h1>Get In Touch</h1>
		<div class="row">
		<div class="col-md-6">
			<form action="userinfo.php" method="post" class="contact-form">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Username" name="user">
			</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email id" name="email">
			</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Mobile" name="mobile">
			</div>
			    <div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Comments" name="comments"></textarea>
			</div>
			    <button type="submit" class=" btn btn-primary">SUBMIT</button>
			</form>
		</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i> XYZ Road,Aurangabad,IN</div>
				<div class="follow"><b>Phone:</b><i class="fa fa-map-phone"></i>+1 1234567890</div>
				<div class="follow"><b>Email:</b><i class="fa fa-map-envelope-o"></i> example@gmail.com</div>
				<div class="follow"><label><b>Get Social:</b></label>
					<a href="https://www.facebook.com/saurabh.tehare.37/about?lst=100009652990447%3A100009652990447%3A1586442407"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
					<a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
					<a href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1"><i class="fa fa-google-plus"></i>
					</a>
				</div>
			</div>
		</div>	
	</div>
</div>
</section>
<!-----------footer--------->
<section id="footer">
	<div class="container text-center">
		<p>Made with <i class="fa fa-heart-o"></i>by our team</p>

	</div>
	
</section>




	
</body>
</html>