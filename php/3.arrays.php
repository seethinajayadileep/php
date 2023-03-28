<?php
//there are three kinds of arrays
/*numeric arrays
asscocative arrays ->key :value pair array
multidimensional arrays
*/
//numeric arrays->it store element in nmerical order
//create automatically
echo "creating numbric array automatically";
$cars=array("one","two","three");
echo "<br>";
 echo $cars[1];
 echo "<br>";
//creating manaully
echo "creating manually";
echo "<br>";
$a1[0]=1;
$a1[2]=3;
$a1[3]=5;
echo $a1[2];


//assocative arrays
echo "<br>asscoative arrays";
echo "<br>";
$ages=array("peter"=>32,"quagmine"=>30);
echo $ages["quagmine"];
//another ways of creating assocative array

echo "<br>";
$followers["raj"]=10;
$followers["ravi"]=20;
echo $followers["ravi"] ,"<br>";


//mutli dimenisonal array;
echo "<br>","multidimensional array";
$md=array("jaya"=>array("j1","j2","j3"),"dileep"=>array("d1","d2","d3"));
 echo "<br>";
 echo $md["jaya"][2];
 ?>
