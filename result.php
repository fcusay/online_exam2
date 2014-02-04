<?php 
	require_once('ExamDAO.php');
	session_start();
	$answers = $_SESSION['answers'];
	$result = ExamDAO::checkAnswers($answers);
	
 ?>
 <html>
<head>
	<title>Online Examnation</title>
  	<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <link href="css/boot-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class ="container" >
          <div class="navbar">
            <a class="brand font-brand" href="registration.php">Online Examination</a>
          </div>
          <div class = "btn btn-primary pull-right" 	>
          	<button><a href="exam.php">Take Exam Again</a></button>
          </div>
  </div>
</header>
<div class = "container span8 offset2" style = "margin-top:50px;float:center">
	<div class = "row wellko">
		<h1>Your score is:  <?=$result?></h1>
	</div>
	<div class = "row wellko">
		<?php
			if($result > 7){
				echo "<h3>Congratulation You pass the Exam!!!</h3>";
			}else {
				echo "<h3>Sorry You failed the Exam!!!</h3>";
			}
	?>
	</div>
</div>
</body>
</html>
