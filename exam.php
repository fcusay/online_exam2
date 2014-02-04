<?php
	require_once("config.php"); 
	require_once("examDAO.php");
	
	define('QUESTION_NUMBERS', 10);

	$choice_number = (isset($_POST['choice_number'])) ? $_POST['choice_number']+1 : 1;
	$answers = (isset($_POST['answers'])) ? $_POST['answers'] : "";
	$answer = (isset($_POST['answer'])) ? $_POST['answer'] : "";
	$answers .= $answer;

	if ($choice_number > QUESTION_NUMBERS){
		session_start();
		$_SESSION['answers'] = $answers;
		header('Location: result.php');
	}

	$question = examDAO:: getQuestion($choice_number);

	foreach($question as $choice):
 ?>
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	<div class = "container">
		<div class "row">
			<div class = "span12">	
				
		<form action = "<?= $_SERVER['PHP_SELF']?>" method = "POST">
		<input hidden name = "choice_number" value = "<?= $choice_number ?>">
		<input hidden name = "answers" value = "<?= $answers ?>">
		<h4>Question No: <?= $choice["question"] ?></h4>
`	    A:<input style = "margin-top:5px" type = "radio" name = "answer" value = "A"/> <?= $choice['choice_a']?><br/>
		&nbsp;&nbsp;B:<input style = "margin-top:5px" type = "radio" name = "answer" value = "B"/> <?= $choice['choice_b']?><br/>
		&nbsp;&nbsp;C:<input style = "margin-top:5px" type = "radio" name = "answer" value = "C"/> <?= $choice['choice_c']?><br/>
		&nbsp;&nbsp;D:<input style = "margin-top:5px" type = "radio" name = "answer" value = "D"/> <?= $choice['choice_d']?><br/>
		<button class = "btn btn-primary" type ="submit" style = "margin-top:20px" name = "Next">Submit</button>


	</form>


</body>
<script src="js/bootstrap.css"></script>
</html>

<?php 
	endforeach;

 ?>