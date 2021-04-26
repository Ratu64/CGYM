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
	
	<link rel="stylesheet" type="text/css" href="homestyle.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
	<div class="top-container">
		<nav>
			<ul class="nav-ul">
                <li class="nav-li"><a href='index.php'>HOME</a></li>
				<li class="nav-li"><a href='register.php'>SIGNUP</a></li>
				<li class="nav-li"><a href='index11.php'>LOGIN</a></li>
				<li class="nav-li"><a href='contact.php'>HELP</a></li>
				<li class="nav-li"><a href='#foot'>LOCATION</a></li>
			</ul>
		
		</nav>
		<p data-aos="fade-right" class="top-image-text"> TRAIN, <br>LOSERS COMPLAIN</p>
	</div>

	


	<div class="about">
		<div class="about-left">
			<div data-aos="fade-up" class="image1"><img src="leftside-about-copy.jpg"> </div>
			<div data-aos="fade-down" class="image2"><img src="rightside-about-copy.jpg"></div>

		</div>
		<div class="about-right">
			<p class="about-title">ABOUT US</p><br>
			<p>In these modern days when people all over the world have become so much concerned about their health and diet, it is but obvious that they continually seek out for gym centers<span id="dots">....</span><span id="more">
			This is a web project built by Antony,Ratujith,Shivani and Ivan	
			 </span>		</p>
			<button id="clicker" onclick="read()">Read More</button>
		</div>
	</div>
	<div> 
			<div class="container">	
		<div class="hello" >
		
		<form >
			
			<ul class="bmi-ul">
			<li>	<h2 class="bmi-title" >BMI CALCULATOR</h2></li><br>
			<li><label class="bmi-label">Enter Weight(kg):</label>&nbsp;
			<input id="kg" type="number" name="weight"></li><br>
			<li>	<label class="bmi-label">Enter Height(cm):</label>&nbsp;
			<input id="cm" type="number" name="height"><br></li><br>
			<input id="b1" type="button" value="Get Result" onclick="bmi_cal()" >
		    </ul>

		</form>
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
				<img src="coach1.jpg" style="width:100%; height:200px;">
				<div class="card-info">
					<p class="title">Ivan</p>
					<p>Founder</p>
					<p>Best web developer</p>
				</div>
			</div>	
		</div>

		<div class="column">
			<div class="card" data-aos="flip-right"> 
				<img src="coach2.jpg" style="width:100%; height:200px;">
				<div class="card-info">
					<p class="title">Ivan</p>
					<p>Founder</p>
					<p>Best web developer</p>
				</div>
			</div>	
		</div>

		<div class="column">
			<div class="card" data-aos="flip-right"> 
				<img  src="coach3.jpg" style="width:100%; height:200px;">
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

		<div class="ft-1" >
			<h2 align="center">More about the Company</h2>
			<p class="foot-msg">This company was founded by Antony,Ratujith,Shivani and Ivan
			</p><br>
			<p align="right">
				-Ivan Chettiar,FOUNDER
			</p>
			 
		</div>	

		<div class="foot-mid" align="center">
			<!-- <form>
				<label> Enter your name:</label><br>
				<input type="text" class="form-name" name="ft-name"><br>
				<label>Queries:</label><br>
				 <textarea class="form-msg" name="message" rows="5" cols="20" placeholder="Write your Queries here..."></textarea><br>
				 <button>Send</button>
			</form> -->
			<h3>Keep connected</h3><br><br>
			<i class="fab fa-instagram" align=center style="font-size: 30px "></i>
			<i class="fab fa-facebook-square" align=center style="font-size: 30px"></i>
			<i class="fab fa-twitter-square" align=center style="font-size: 30px"></i>

		</div>
		<div class="ft-1">
			<ul class="foot-ul">
				
				<li class="foot-li">
					<i class="fas fa-map-marker-alt" style="font-size: 30px"></i>
					&nbsp7; Ketch Harbour Rd.Columbus, GA 31904
				</li>
				<li class="foot-li">
					<i class="fas fa-phone-alt">&nbsp; +91-9999999999</i>
				</li>
				<li class="foot-li">
					<i class="fas fa-envelope">&nbsp;support@gmail.com</i>
				</li>

			</ul>
		</div>
		<div id="ft-credits">
              <button type="button" onclick="loadDoc()">Credits</button>
                    <br><br>
                    <table id="demo"></table>

                    <script>
                    function loadDoc() {
                      var xhttp = new XMLHttpRequest();
                      xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          myFunction(this);
                        }
                      };
                      xhttp.open("GET", "credits.xml", true);
                      xhttp.send();
                    }
                    function myFunction(xml) {
                      var i;
                      var xmlDoc = xml.responseXML;
                      var table="<tr><th>Name</th><th>RollNo</th></tr>";
                      var x = xmlDoc.getElementsByTagName("project");
                      for (i = 0; i <x.length; i++) { 
                        table += "<tr><td>" +
                        x[i].getElementsByTagName("member")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                        x[i].getElementsByTagName("roll")[0].childNodes[0].nodeValue +
                        "</td></tr>";
                      }
                      document.getElementById("demo").innerHTML = table;
                    }
                 </script>
    </div>
	</div>
	<div>Copyright &copy; 2019. All Rights Reserved.</div>
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