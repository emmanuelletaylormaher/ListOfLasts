<?php

              echo "import currently offline";
              die();

require 'beanHook.php';

$importWave = date("Y-m-d H:i:s");
$testRun = true; // if true, nothing is written to beans


if(!$testRun){
  $surveyBean = R::dispense( 'survey' );
  $surveyBean->sharePublic;
  $surveyBean->gender;
  $surveyBean->age;
  $surveyBean->occupation;
  $surveyBean->faveColor;
  $surveyBean->faveMusic;
  $surveyBean->favePlace;
  $surveyBean->proudest;
  $surveyBean->beforeHere;
  $surveyBean->lastAte
  $beanId = R::store( $surveyBean );
  echo '<p style="color:#bada55;">'.$beanId.'</p>';
}


// echo "</pre>";surveyBean
?>