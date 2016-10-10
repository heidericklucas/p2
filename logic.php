<?php

function password_generator($special_character,$number){

  $number_of_words = $_GET["number_of_words"];

  $final_password = '';

  if (empty($number_of_words)) {
    $final_password = '';
  }
  elseif(isset($_GET['special_character']) && isset($_GET['number'])){
    $final_password = choose_words().include_special_character().include_number();
  }

  elseif(isset($_GET['special_character'])){
    $final_password = choose_words().include_special_character();
  }

  elseif (isset($_GET['number'])) {
    $final_password = choose_words().include_number();
  }

  else {
    $final_password = choose_words();
  }

  return $final_password;

}

function include_special_character(){
  $special_characters_array = array('~','!','@','#','$','%','&','*','(',')','+','=','^');
  shuffle($special_characters_array);
  return $special_characters_array[0];
}

function include_number(){
  $numbers_array = array('0','1','2','3','4','5','6','7','8','9');
  shuffle($numbers_array);
  return $numbers_array[0];
}

function choose_words(){
  $number_of_words = $_GET["number_of_words"];
  $faith_text = "jesus is the savior of humanity he changed my life nothing makes sense without christ in first place faith hope love righteousness";
  $faith_text = explode(" ", $faith_text);

  if($number_of_words == NULL || $number_of_words == '0'){

    echo '';
  }

  else if ($number_of_words == 1) {
      shuffle($faith_text);
      echo $faith_text[0];
  }
  else if ($number_of_words == 2) {
      shuffle($faith_text);
      echo $faith_text[0]."-".$faith_text[1];

    }
  else if ($number_of_words == 3) {
        shuffle($faith_text);
        echo $faith_text[0]."-".$faith_text[1]."-".$faith_text[2];
      }

  else if ($number_of_words == 4) {
          shuffle($faith_text);
          echo $faith_text[0]."-".$faith_text[1]."-".$faith_text[2]."-".$faith_text[3];
        }
  else if ($number_of_words == 5) {
          shuffle($faith_text);
          echo $faith_text[0]."-".$faith_text[1]."-".$faith_text[2]."-".$faith_text[3]."-".$faith_text[4];
        }
  else if ($number_of_words == 6) {
          shuffle($faith_text);
          echo $faith_text[0]."-".$faith_text[1]."-".$faith_text[2]."-".$faith_text[3]."-".$faith_text[4]."-".$faith_text[5];
        }
  else if ($number_of_words == 7) {
          shuffle($faith_text);
          echo $faith_text[0]."-".$faith_text[1]."-".$faith_text[2]."-".$faith_text[3]."-".$faith_text[4]."-".$faith_text[5]."-".$faith_text[6];
        }
  else if ($number_of_words == 8) {
          shuffle($faith_text);
          echo $faith_text[0]."-".$faith_text[1]."-".$faith_text[2]."-".$faith_text[3]."-".$faith_text[4]."-".$faith_text[5]."-".$faith_text[6]."-".$faith_text[7];
        }
  else if ($number_of_words == 9) {
          shuffle($faith_text);
          echo $faith_text[0]."-".$faith_text[1]."-".$faith_text[2]."-".$faith_text[3]."-".$faith_text[4]."-".$faith_text[5]."-".$faith_text[6]."-".$faith_text[7]."-".$faith_text[8];
        }

}

//VALIDATION


if (isset($_GET["number_of_words"])) {
		$number_of_words = $_GET["number_of_words"];
		if (!is_numeric($number_of_words)) {
			$errormsg = "Please enter a number from 1 to 9 and try again.";
		} else {
			if ($number_of_words == 0) {
				$errormsg = "The number has to be greater than 0.";
      }
    }
    if (isset($_GET["special_character"]) && (!is_numeric($number_of_words) || ($number_of_words == 0))) {
      $errormsg = "Please first enter a number from 1 to 9 and try again.";
  }
    if (isset($_GET["number"]) && (!is_numeric($number_of_words) || ($number_of_words == 0))) {
      $errormsg = "Please first enter a number from 1 to 9 and try again.";
  }
}

?>
