<?php
$d=array();
$i= 1;

$k="";
for (;empty($_POST[$id]);$i++){
	$id="id".$i;
	$ke="da".$i;
	$k=$_POST[$id];
	$d[$k]=$_POST[$ke];
	print_r($k);
	
};
print_r($d);



$a1=array(10001=>"Cat",10003=>"Dog",10002=>"Horse");
$a2=array(10002=>"Horse",10001=>"Dog",10003=>"Fish");
print_r(array_diff_assoc($a1,$a2));
print_r(count($a1)-count(array_diff_assoc($a1,$a2)));

?>