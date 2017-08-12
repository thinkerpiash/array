<?php 

//$a = 80;
//$b = 90;
//$c = 50;
  
  
//if ($a > $b && $a > $c) {
  
//echo'A is Big';}
//  else if ($b > $a && $b > $c ) {
  //  echo 'B is the big one';} 
//else if ($c > $a && $c > $b) {
    //echo 'C Big';}


$red = array(100, 20, 52, 105, 56, 89, 1983);
$b = 0;
foreach ($red as $key => $value) {
    if ($value > $b) {
        $b = $value;
    }
    //echo 'key' .$key. 'value' .$value;
    //echo '<br/>';
}
echo 'The Big Number is:' . ' ' .'<strong>'.$b. '</strong>';