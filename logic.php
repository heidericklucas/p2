<?php

function password_generator($number_of_words,$special_character,$number){
  $final_password = '';
  if($special_character == 'on' && $number == 'on'){
    $final_password = choose_words($number_of_words).include_number(1).include_special_character(1);
  }elseif($special_character == 'on'){
    $final_password = choose_words($number_of_words).include_special_character(1);
  }elseif ($number == 'on') {
    $final_password = choose_words($number_of_words).include_number(1);
  }else {
    $final_password = choose_words($number_of_words);
  }
  return $final_password;
}

function include_special_character(){
  $special_characters_array = array('~','!','@','#','$','%','^','&','*','(',')','+','=');
  shuffle($special_characters_array);
  echo $special_characters_array[0];
}

function include_number(){
  $numbers_array = array('0','1','2','3','4','5','6','7','8','9');
  shuffle($numbers_array);
  echo $numbers_array[0];
}

function choose_words($number_of_words){
$faith_text = "jesus is the savior of humanity he changed my life nothing makes sense without christ in first place faith hope love righteousness";
$faith_text = explode(" ", $faith_text);

  if($number_of_words == NULL || $number_of_words == '0'){

    echo "";
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


?>
