<?php
error_reporting(-1);
ini_set('display_errors', 1);
?>
<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Lucas Vieira P2 | xkcd PassGen</title>
	<link rel='stylesheet' href='style.css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<?php require('logic.php'); ?>
</head>
<body>
	<div class = 'container'>
		<h1> Lucas Vieira P2 | xkcd PassGen</h1>
		<p class = 'password'>
			<?php
			if(sizeof($_GET)>1 || !$_GET==NULL){
			if(! array_key_exists('special_character',$_GET) && !array_key_exists('number',$_GET)){
				echo password_generator($_GET["number_of_words"],NULL,NULL);
			}elseif (!array_key_exists('special_character',$_GET)) {
				echo password_generator($_GET["number_of_words"],NULL,$_GET["number"]);
			}elseif (!array_key_exists('number',$_GET)) {
				echo password_generator($_GET["number_of_words"],$_GET["special_character"],NULL);
			}else {
				echo password_generator($_GET["number_of_words"],$_GET["special_character"],$_GET["number"]);
			}
		}
			?>
		</p>

		<form method ="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<label for='words'> Number of words (Max 9):</label>
			<input type='text' name='number_of_words' maxlength="1">

		  <br>

			<label for='special_character'>Need a special character?</label>
			<input type='checkbox' name='special_character'>

			<br>

			<label for='number'>Need a Number?</label>
			<input type='checkbox'  name='number'>

			<br><br>

			<input class='submit' type='submit' value='Generate Password'><br>
		</form>
	</div>
</body>
