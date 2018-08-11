<?php 
	require_once 'calculate.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Light Exams</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script>
        function enabled(){
            console.log("enable");
            document.getElementById('submit').disabled=false;
        }
    </script>
</head>
<body>	
		<div class="mybody">
			<div class="head">
				<h1 class="welcome">WELCOME TO LIGHT'S SCHOLARSHIP EXAMS</h1>
			</div>
			<p class="motto">...consistency is key</p>
			<div class="instruction">
				<h3 class="attempt"> <span>Instruction</span>: Attempt all questions</h3>
			</div>
			<form action="q4.php" method="POST">
				<ol class="question">
					<li value="3" style="font-weight: bold;">They left the house a long time ago, _______?</li>
					<input class="option" type="radio" name="option" value="A" onclick="enabled()">(a) Did they? <br>
					<input class="option" type="radio" name="option" value="B" onclick="enabled()">(b) Didn’t they? <br>
					<input class="option" type="radio" name="option" value="C" onclick="enabled()">(c) Haven’t they? <br>
					<input class="option" type="radio" name="option" value="D" onclick="enabled()">(d) Isn’t it? <br>
				</ol>
			
				<input class="next" id="submit" type="submit" name="" value="Next" disabled="disabled">
			</form>
			<footer>
				&copy; 2018 LightOfGod <span class="slash">|</span> Designed by <a href="http://lightspace.com" target="_blank">LightSpaceSolutions</a>
			</footer>	
		</div>
</body>
</html>