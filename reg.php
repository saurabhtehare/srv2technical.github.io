<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="reg.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


	<title> User Login And Registration </title>
</head>
<body>
    <?php  include 'menu1.php';  ?>

    <div class="signup-form">
    	<img src="images/user1.png">
    	<form action="regpro.php" onsubmit="return myfunction()" method="post">
    		<input type="text" id="user" placeholder="User name" class="txt" name="user">
                        <span id="Username" class="text-danger font-weight-bold"></span>

    		<input type="email" id="email" placeholder="Email" class="txt" name="email">
                        <span id="Email" class="text-danger font-weight-bold"></span>

            <input type="password" id="password" placeholder="Password" class="txt" name="password">
                            <span id="passwords" class="text-danger font-weight-bold"></span>

            <input type="password" id="Cpass" placeholder="Confirm Password" class="txt" name="Cpass">
                            <span id="confrmpass" class="text-danger font-weight-bold"></span>

            <input type="submit" value="Create a Account" class="btn" name="btn-save">
                		<a href="login.php">Already have a Account</a>
    	</form>
    	
    </div>
    
<footer class="blog-footer container-fluid fixed-bottom">
  <div class="text-center mt-2">
    <p>Made with <i class="fa fa-heart-o"></i>by our team</p>
  </div>

  <div class="text-center mt-1">Copyright By  <a href="https://getbootstrap.com/">SRV2K</a> by <a href="https://twitter.com/mdo">@mdo</a>.</div>
</footer>


<script type="text/javascript">
  
  function myfunction(){

    var user = document.getElementById('user').value;
    var email = document.getElementById('email').value;
    var pass = document.getElementById('password').value;
    var cpass = document.getElementById('Cpass').value;


    if (user == "") {
      document.getElementById('Username').innerHTML =" ** Please fill the userrname field";
      return false;
    }
    if ((user.length <= 2) || (user.lenght > 20)){
            document.getElementById('Username').innerHTML =" ** user length must be between 2 and 20";
      return false;

    }
    if (!isNaN(user)) {
            document.getElementById('Username').innerHTML =" ** Only characters are allowed";
      return false;

    }


    if (email == "") {
      document.getElementById('Email').innerHTML =" * *Please fill the email field";
      return false;
    }

    if (email.indexOF('@') <=0 ) {
      document.getElementById('Email').innerHTML =" ** @ Invalid Position ";
      return false;
    }

    if ((email.charAt(email.length-4)!= '.') && (email.charAt(email.length-3)!= '.')){
      document.getElementById('Email').innerHTML =" ** '.' Invalid Position";
      return false;
    }


    if(password == ""){
        document.getElementById('passwords').innerHTML =" ** Please fill the password field";
      return false;
      }
    if((password.length <= 5) || (password.length > 20)) {
        document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
        return false; 
      }


    if(password!=confrmpass){
        document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
        return false;
      }



    if(Cpass == ""){
        document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
        return false;
      }




}

   


</script>


  
</body>
</html>