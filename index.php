<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
table,th,td {
  border : 1px solid white;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
button{
background-color: transparent;
color:white;
border: 1px solid transparent;
}
</style>
	<script src="https://kit.fontawesome.com/a076d05399.js">	</script>
	
	<script src="bmicalculation.js" type="text/javascript"></script>
	
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
	<div class="top-container">
		<nav>
			<ul class="nav-ul">
                <li class="nav-li"><a href='index.php'>HOME</a></li>
				<li class="nav-li"><a href='register.php'>SIGN UP</a></li>
				<li class="nav-li"><a href='index11.php'>LOGIN</a></li>
				<li class="nav-li"><a href='adminlog.php'>ADMIN</a></li>
				<li class="nav-li"><a href='#foot'>LOCATION</a></li>
			</ul>
		</nav>
		<p data-aos="fade-right" class="top-image-text"> TRAIN, <br>LOSERS COMPLAIN</p>
	</div>

	<div class="about">
		<div class="about-left">
			<div data-aos="fade-up" class="image1"><img src="img/leftside-about-copy.jpg"> </div>
			<div data-aos="fade-down" class="image2"><img src="img/rightside-about-copy.jpg"></div>
		</div>
		<div class="about-right">
			<p class="about-title">About Us</p><br>
			<p>In these modern days when people all over the world have become so much concerned about their health and diet, it is but obvious that they continually seek out for gym centers<span id="dots">....</span><span id="more">
			This is a project built by Ivan Chettiar,Ratujith Bangera,Antony Alex and Shivani Bisht.	
			 </span>		</p>
			<button id="clicker" onclick="read()">Read More</button>
		</div>
	</div>

	<div>
        <div class = "bmi-img">
            <img src = "img/bmi-cal.jpg">
        </div>
		<div class="container">
            <div class="hello" >
                <form >
                    <ul class="bmi-ul">
                        <li><h2 class="bmi-title" >Check BMI</h2></li><br>
                        <li><label class="bmi-label">Enter Weight (kg):</label>&nbsp;
                        <input id="kg" type="number" name="weight"></li><br>
                        <li><label class="bmi-label">Enter Height (cm):</label>&nbsp;
                        <input id="cm" type="number" name="height"><br></li><br>
                        <input id="b1" type="button" value="Get Result" onclick="bmi_cal()" >
                    </ul>
                </form>
                <br>
                <div id="result"></div>
            </div>
		</div>
	</div>


	<br>
	<br>
	<!--our coaches section starts -->
	<p align="center" class="about-title">Our Coaches</p><br>
	<hr align="center" width="50%">

	<div class="staff">
		<div class="column">
			<div class="card" data-aos="flip-right"> 
				<img src="img/coach1.jpg" style="width:100%; height:200px;">
				<div class="card-info">
					<p class="title">Ivan</p>
					<p>Founder</p>
					<p>Best web developer</p>
				</div>
			</div>	
		</div>

		<div class="column">
			<div class="card" data-aos="flip-right"> 
				<img src="img/coach2.jpg" style="width:100%; height:200px;">
				<div class="card-info">
					<p class="title">Ivan</p>
					<p>Founder</p>
					<p>Best web developer</p>
				</div>
			</div>	
		</div>

		<div class="column">
			<div class="card" data-aos="flip-right"> 
				<img  src="img/coach3.jpg" style="width:100%; height:200px;">
				<div class="card-info">
					<p class="title">Ivan</p>
					<p>Founder</p>
					<p>Best web developer</p>
				</div>
			</div>	
		</div>

	</div>
	<!--our coaches section ends -->
	<footer id="foot">
		<div class="foot-container">

		<div class="ft-1">
			<p class="foot-msg">" Take care of your body. It's the only place you have to live." - Jim Rohn
			</p><br>

		</div>	

		<div class="foot-mid" align="center">
			<!-- <form>
				<label> Enter your name:</label><br>
				<input type="text" class="form-name" name="ft-name"><br>
				<label>Queries:</label><br>
				 <textarea class="form-msg" name="message" rows="5" cols="20" placeholder="Write your Queries here..."></textarea><br>
				 <button>Send</button>
			</form> -->
			<a href="index.php">
			    <i class="fas fa-arrow-circle-up fa-2x"></i>
			</a>
			<br><br>
			<h3>Keep Connected</h3><br>
			<i class="fab fa-instagram" align=center style="font-size: 30px "></i>
			<i class="fab fa-facebook-square" align=center style="font-size: 30px"></i>
			<i class="fab fa-twitter-square" align=center style="font-size: 30px"></i>
			<br><br>
		</div>
		<div class="ft-1">
			<ul class="foot-ul">
				<li class="foot-li">
					<i class="fas fa-map-marker-alt" style="font-size: 30px"></i>
					&nbsp7; Goodwill Excellency, Plot No. 2, Sector 17 Vashi, Navi Mumbai
				</li>
				<li class="foot-li">
					<i class="fas fa-phone-alt">&nbsp; +91-5559879879</i>
				</li>
				<li class="foot-li">
					<i class="fas fa-envelope">&nbsp;cgymsupport@gmail.com</i>
				</li>

			</ul>
		</div>

	</div>
	<div align="center">Copyright &copy; 2021. All Rights Reserved.</div>
	</footer>
	
<script type="text/javascript">
		var i=0;
		function read(){
			
			if(!i){
				document.getElementById("more").style.display ="inline";
				document.getElementById("dots").style.display="none";
				document.getElementById("clicker").innerHTML="Read Less";
				i=1;
			}
			else{
				document.getElementById("more").style.display ="none";
				document.getElementById("dots").style.display="inline";
				document.getElementById("clicker").innerHTML="Read More";
				i=0;
			}

		}
	</script>

</body>
</html>
<script>
  AOS.init({
  	duration:1800,
  });
</script>