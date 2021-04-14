<!DOCTYPE html>
<html>
<head>
	<title>Crew Generator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<script type="text/javascript" src="js\jquery.min.js"></script>
	<script type="text/javascript" src="js\bootstrap.min.js"></script>
	<script type="text/javascript" src="js\all.min.js"></script>
	<script type="text/javascript" src="js\jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="js\waypoints.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/waypoints.css">
	<style type="text/css">
		table,th,td,tr
		{
			padding: 0.5rem;
			color: black;
			border-style: solid;
		}
		
	
	</style>>

</head>
<body  onload="hideloader()" >

	<!--Home-->
	<div id="overlay">
		<div id="loading"></div>
	</div>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
		<a href="index.html" class="link"> crew generator</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive ">
			<div id="nav-icon1">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link  " href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="indilogin.html">Individual</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="teamlogin.html">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="bookinglogin.html">Booking</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="more.html">More</a>
				</li>
			</ul>
		</div>
	</nav>
<br><br><br>





<br><br><br>


<div id="contact" class="offset">
		<footer class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-5 text-center">
					<img src="Img/logo1.png">
					<p>some text based on the content.some text based on the
			   			content.some text based on the content.some text based 
			   			on the content.some text based on the
			   			content.some text based on the content.</p>
			   		<strong>Contact:</strong>
			   		<p>987-654-3210<br>email@gmail.com</p>	

			   		<a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>	   		
			   		<a href="" target="_blank"><i class="fab fa-twitter-square"></i></a>	   		
			   		<a href="" target="_blank"><i class="fab fa-instagram"></i></a>	   		
				</div>
				<hr class="socket">
				&copy: tony.
			</div>
		</footer>
	</div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});


function hideloader()
{
	document.getElementById("overlay").style.display="none";
}



</script>

<script type="text/javascript">
	console.clear();

	const loginBtn = document.getElementById('login');
	const signupBtn = document.getElementById('signup');

	loginBtn.addEventListener('click', (e) => {
		let parent = e.target.parentNode.parentNode;
		Array.from(e.target.parentNode.parentNode.classList).find((element) => {
			if(element !== "slide-up") {
				parent.classList.add('slide-up')
			}else{
				signupBtn.parentNode.classList.add('slide-up')
				parent.classList.remove('slide-up')
			}
		});
	});

	signupBtn.addEventListener('click', (e) => {
		let parent = e.target.parentNode;
		Array.from(e.target.parentNode.classList).find((element) => {
			if(element !== "slide-up") {
				parent.classList.add('slide-up')
			}else{
				loginBtn.parentNode.parentNode.classList.add('slide-up')
				parent.classList.remove('slide-up')
			}
		});
	});
</script>
