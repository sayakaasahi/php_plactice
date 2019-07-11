<?php
$name="朝日";
if($name=="朝日"){
  echo"私は朝日です。";
}else{
  echo"あなたの名前ではありません。";
}
echo"\n";
$total=0;
for($i=1;$i<=10000;$i++){
  $total += $i;
}
echo $total;
echo"\n";
$fruits=array("Cherry","Banana","Apple","Orange","Peach");
foreach($fruits as $fruit){
  echo $fruit;
  echo"\n";
}
echo"\n";
$start=1;
$end=100;
for($i=$start;$i<=$end;$i++){
  if(($i%5)==0){
    echo $i;
    echo"\n";
  }
}