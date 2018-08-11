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
			<form action="q8.php" method="POST">
				<ol class="question">
					<li value="7" style="font-weight: bold;">You didn’t knock before entering the room, did you?</li>
					<input class="option" type="radio" name="option" value="A" onclick="enabled()">(a) No, I did. <br>
					<input class="option" type="radio" name="option" value="B" onclick="enabled()">(b) No, I do not. <br>
					<input class="option" type="radio" name="option" value="C" onclick="enabled()">(c) Yes, I didn’t <br>
					<input class="option" type="radio" name="option" value="D" onclick="enabled()">(d) Yes, I do.  <br>
				</ol>
			
				<input class="next" id="submit" type="submit" name="" value="Next" disabled="disabled">
			</form>
			<footer>
				&copy; 2018 LightOfGod <span class="slash">|</span> Designed by <a href="http://lightspace.com" target="_blank">LightSpaceSolutions</a>
			</footer>	
		</div>
</body>
</html>
