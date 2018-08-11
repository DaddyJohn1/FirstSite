<?php 

require_once ('calculate.php');


$correct_answers = ["C", "C", "B", "A", "A", "A", "C", "C", "B", "B"];

   // $correct_answers = ["A", "B", "C", "A", "C", "A", "C", "B", "B", "C"];
   // echo "<br/>CORRECT ANSWERS: <br/>";
   // print_r($correct_answers);

   $total = count($correct_answers);

   $total_correct_answer = 0;

   for ($i=0; $i < count($correct_answers); $i++) { 
     if($_SESSION['selected_answers'][$i] == $correct_answers[$i]){
      $total_correct_answer = $total_correct_answer + 1;
     }
   }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank You | Light Exams</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>	
		<div class="mybody">
			<div class="head">
				<h1 class="welcome">WELCOME TO LIGHT'S SCHOLARSHIP EXAMS</h1>
			</div>
			<p class="motto">...consistency is key</p>
			<div class="thanks">
				<h3 class="thankyou">THANK YOU FOR ATTEMPTING OUR QUESTIONS</h3>
				<h4>You attempted:<?php echo $total;?> Question</h4>
				<h4>Your score is: (<?php echo "$total_correct_answer / ". count($correct_answers) ?>) => (<?php echo (((float)$total_correct_answer * 1.0)/(count($correct_answers) * 1.0) * 100) ?>%) </h4>
			</div>			
			<footer>
				&copy; 2018 LightOfGod <span class="slash">|</span> Designed by <a href="http://abeysko.com" target="_blank">LightSpaceSolutions</a>
			</footer>	
		</div>
</body>
</html>

<?php 
session_destroy(); //you have to destroy the session for it to work afresh
 ?>