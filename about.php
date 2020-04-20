<!DOCTYPE html>
<html>
<head>
	<title>SRV2-About</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Bitter">
  <link rel="stylesheet" type="text/css" href="readmore.css">
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
</div>
<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">About Us</h1>
	</div>
 <div class="container-fluid">
<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/about.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12 skills-bar">
	       <h2 class="display-4">I am SRV2 Technical.</h2>
	       <br>
	   
		<p>Adobe Photoshop</p>
	<div class="progress">
		 <div class="progress-bar" style="width:80%;">80%</div>
		</div>
		<p>UI Design</p>
	<div class="progress">
        <div class="progress-bar" style="width:85%;">85%</div>
		  </div>
		<p>WordPress</p>
	<div class="progress">
		<div class="progress-bar" style="width:75%;">75%</div>
		  </div>
		<p>Graphic Design</p>
	<div class="progress">
		<div class="progress-bar" style="width:50%;">50%</div>
		  </div>
		  <br>
		  <h3>SRV2 Technical website is all about creativity and<span id="dots">...</span><span id="more">innovative work in the field of Technology.we provide to customer website,app.We also do marketing of your product if you purchase our plan.we also provide web development courses videos, MCS important videos and technology vid</span></h3>
<button type="button" onclick="read()" id="read">Read more</button>

		</div>
	</div>
</div>	



<script type="text/javascript">
	var i=0;
	function read(){
		if(!i){
			document.getElementById("more").style.
			   display = "inline";
			document.getElementById("dots").style.
			   display = "none";
			document.getElementById("read").innerHTML="Read less";
			   i=1;
		}
		else{
			document.getElementById("more").style.
			   display = "none";
			document.getElementById("dots").style.
			   display = "inline";
			document.getElementById("read").innerHTML="Read more";
			   i=1;
		}
	}











function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</section>

<!-----------footer--------->
<section id="footer">
	<div class="container text-center">
		<p>Made with <i class="fa fa-heart-o"></i>by our team</p>

	</div>
	
</section>





</body>
</html>

















