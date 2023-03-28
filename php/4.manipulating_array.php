<?php
//manipulacation array
$a1=array(1,2,3,4,5);
echo "<br> manipulcation of array <br> size of ";
echo sizeof($a1),"<br>";

$a20=array("1","2");
echo "array_values to print all elements <br>";
print_r(array_values($a20) );

$m1=array("time"=>0.1,"time2"=>0.2);
echo "<br> to return elements in asscotative array<br>";
print_r( array_keys($m1));
echo "<br> to pop element using array_pop<br>";
$a2=array(1,2,3,4,5);
echo "<br>",print_r($a2);
array_pop($a2);
echo "<br>",print_r($a2);

echo "<br> to push element by using array_push<br>";
echo "<br>",print_r($a2);
array_push($a2,5);
echo "<br>",print_r($a2);
echo "<br> to remove the element at beginning by using shift method";
echo "<br>",print_r($a2);
array_shift($a2);
echo "<br>",print_r($a2);
echo "<br> to add the element at beginning by using unshift method";
echo "<br>",print_r($a2);
array_unshift($a2,0);
echo "<br>",print_r($a2);
echo "<br> to sorts the elements";
$a3=array(5,4,3,2,1);
echo "<br>",print_r($a3);
sort($a3);
echo "<br>",print_r($a3);

echo "<br><br> to flip the key value pair using array_flip <br> ";
$s1=array("apple"=>"a","ball"=>"b");
print_r($s1);
echo"<br>";

print_r(array_flip($s1));

echo "<br> to reverse the array using array_reverse<br>";
$s2=array(1,2,3,4,5);
print_r($s2);
 $s3=array_reverse($s2);
echo "<br>";
print_r($s3);

echo "<br>merging two arrays<br>";
$n1=array("hi","hello");
$n2=array("good","bad");
print_r(array_merge($n1,$n2));

echo "<br> to select random elements from array<br>";
print_r($n1[array_rand($n1)]);
echo "<br>to search the element in array<br>";
$n3=array("asdf","vfdgsgg","sbddeh");
echo "it is at index ",print_r(array_search("asdf",$n3));

echo "<br> it is used to exact subset from array ";
$n4=array(1,2,3,4,5,6,7,8,9);
print_r($n4);
echo "<br>";
print_r(array_slice($n4,1,5));
echo "<br> to remove duplicate from the list by using array unique<br>";
$data1=array(1,1,2,3,4,5,5,4);
print_r($data1);
echo "<br>";
print_r(array_unique($data1));
echo "<br> ";
?>

