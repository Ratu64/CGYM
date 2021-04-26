<!DOCTYPE html>
<html>
<head>
	
		<link rel="stylesheet" type="text/css" href="homestyle.css"> 
		
		
</head>
<body>
	<script  src="https://cdnjs.cloudflare.com/ajax/libs/mo-js/0.288.2/mo.js "type="text/javascript"></script>
	<script src="bmicalculation.js" type="text/javascript"></script>
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
	
</body>
</html>