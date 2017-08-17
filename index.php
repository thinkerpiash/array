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

$blue = array(10, "color" => array("favorite" => "green", "blue"));
$red = array('a' => 3,'b' => 4, 'c' => 1, 'd' => 5);
$big = [4,9,7,88];
$small = [10, 20, 30, 5];
//$b = 0;
/*foreach ($red as $key => $value) {
    if ($value > $b) {
        $b = $value;
    }
    //echo 'key' .$key. 'value' .$value;
    //echo '<br/>';
}
echo 'The Big Number is:' . ' ' .'<strong>'.$b. '</strong>';
*/

if (array_key_exists('a', $red)) {
    print_r('<b>This is Array Checker :</b>' );
    print_r(' The "A" element is in the Array');
}

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');

print_r('<b>Array Keys : </b>' );
print_r(array_keys($red));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array MAP : </b>' );
function red($alo){
    
    return($alo + $alo * $alo);
}
$b = array_map('red', $red);
print_r($b);

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Merge Recursive : </b>' );
print_r(array_merge_recursive($red, $blue));


print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Merge : </b>' );
print_r(array_merge($red, $blue));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Multisort : </b>' );
array_multisort($big, $small);
var_dump($big);
var_dump($small);

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Pad : </b>' );
print_r(array_pad($big, 100 , 2));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array pop : </b>' );
print_r(array_pop($small));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array product : </b>' );
print_r(array_product($big));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array push : </b>' );
print_r(array_push($small, 77, 00)); print_r('<b> Boji nai </b>' );

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Rand : </b>' );
print_r(array_rand($big, 3));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Reduce : </b>' );
function sum($carry, $minati)
{
    $carry += $minati;
    return $carry;
}
print_r(array_reduce($small, "sum")); print_r('<b> Boji nai, কঠিন লাগে </b>' );


print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Replace Recursive : </b>' );
print_r(array_replace_recursive($red, $big));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Replace : </b>' );
print_r(array_replace($red, $big));

print_r('<br/>');
print_r('<br/>');
print_r('<br/>');
print_r('<b>Array Reverse : </b>' );
print_r(array_reverse($red));