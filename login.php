<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="reg.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<title> User Login And Registration </title>
</head>
<body>
    <?php  include 'menu1.php';  ?>

    <div class="signup-form">
    	<img src="images/user1.png">
    	<form action="loginprocess.php" method="post">
    		<input type="text" placeholder="Username or email" class="txt" name="user">
            <input type="password" placeholder="Password" class="txt" name="password">
             <input type="submit" value="Login" class="btn" name="btn-login">
    	</form>
    	
    </div>
<!-----------footer--------->
<footer class="blog-footer container-fluid fixed-bottom">
  <div class="text-center mt-2">
    <p>Made with <i class="fa fa-heart-o"></i>by our team</p>
  </div>

  <div class="text-center mt-1">Copyright By  <a href="https://getbootstrap.com/">SRV2K</a> by <a href="https://twitter.com/mdo">@mdo</a>.</div>
</footer>




</body>
</html>