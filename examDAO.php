<?php
	require_once('config.php');

	class examDAO{
		public static function InsertUser ($fname, $lname, $email, $password){
		global $db;
		
		$query = "INSERT INTO user (fname, lname, email, password) VALUES ('{$fname}','{$lname}','{$email}','{$password}')";
		$result = $db->query($query);
		if($result){
			header ('location:login.php');

		}else{
			header ('location:signin.php');
			}

		}
	
		public static function InsertLogin($email, $password){
		global $db;

		$query = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}' ";
		$result = $db->query($query);
		if($result->num_rows > 0){
			header ('location:exam.php');

		}else{
			header ('location:login.php');
			}

		}	

		public static function getQuestion($id){
		global $db;

		$query = "SELECT * FROM exam WHERE id = '{$id}'";
		$result = $db->query($query);
		if($result->num_rows > 0){
			$exam = array();

			while($row = $result -> fetch_assoc()){
				$exam[] = $row;

				}
			return $exam;
			}
		}
		public static function getAllAnswer(){
			global $db;
			try{
				$query = "SELECT answer FROM exam ORDER BY id";
				$result = $db->query($query);
				$answers = array();
				while($row = $result->fetch_assoc()){
					$answers[] = $row['answer'];
				}
				return $answers;
			} catch (Exeption $e) {
				error_log($e->getMessage());
			}

			return false;
		}
		public static function checkAnswers($answers){
			$correct = self::getAllAnswer();
			if($correct === false){
				error_log('Correct Answers Not Ready');
				return false;
			}
			if(count($correct) !=strlen($answers)){
				error_log('Invalid Answers');
				return false;

			}
			$score = 0;
			for ($i = 0; $i < count($correct); $i++){
				if($correct[$i] == $answers[$i]){
					$score++;
				}
			}

			return $score;

		}
		public static function insertUserExamDetails($user_id, $score){
			global $db;

			if(!$user_id) return false;

			$query = "INSERT INTO user_score(user_id, score, date_exam, time_Finished)VALUES('{$user_id}','{$score}', CURRENT_DATE, CURRENT_TIME)";
			$result = $db->query($query);
			
			if($result){
				return true;

			}else{
				return false;
			}
		}

		public static function getLastResults($user_id){
			global $db;

			if(!$user_id) return false;

			$query = "SELECT score, date_exam, time_Finished FROM user_score WHERE user_id = '{$user_id}' ";
			$result = $db->query($query);

			$records = array();
			while($row = $result->fetch_assoc()){
				$records[] = $row;
			}
			$result->free();
			return $records;
		}
	}	
?>
