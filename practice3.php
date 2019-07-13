<?php
function w($i){
  return $i*2;
}
echo w(3);
echo"\n";
?>
<?php
function f($a,$b){
  return $a+$b;
}
echo f(3,5);
echo"\n";
?>
<?php
$arr=array(1,3,5,7,9);
echo array_product($arr);
echo"\n";
?>
<?php
function max_array($arr){
  $max_number=$arr[0];
  foreach($arr as $a){
    if($max_number<$a){
      $max_number=$a;
    }
  }
  return $max_number;
}
echo"\n";
?>
<?php
$contents="<a>test</a>";
$contents=strip_tags($contents);
echo $contents;
echo"\n";
?>
<?php
$fruits=['apple','orange','peach'];
array_push($fruits,'banana');
print_r($fruits);
echo"\n";
?>
<?php
$fruits1=['apple','orange','peach'];
$fruits2=['melon','cherry'];
$fruits3=['pinapple','strawberry','lemon'];
$fruits=array_merge($fruits1,$fruits2,$fruits3);
print_r($fruits);
echo"\n";
?>
<?php
echo time();
echo"\n";
?>
<?php
date_default_timezone_set('UTC');
echo date('c',mktime(0,0,0,7,13,2019));
echo"\n";
?>
<?php
echo date('Y/m/d');
echo"\n";
?>
