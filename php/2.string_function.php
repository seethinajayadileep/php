<?php
echo "string functions";
echo "<br>";
echo "using string repeat";
echo "<br>";
echo  str_repeat("jaya  ",10);
echo "<br>";
echo "using string len";
echo "<br>";
echo strlen("jaya");
echo "<br>";
echo "using string compare";
echo "<br>";
//return 1 if not equal and equal return  0,
echo strcmp("jaya","dileep");
echo  "<br>";
//by using case senstives mean jaya and Jaya comparing return 1. 
echo "<br>";
 
echo strcmp("jaya","Jaya");
//and jaya and jaya  return 0;
echo strcmp("jaya","Jaya");
echo strcmp("jaya","jaya");

echo "<br>";
echo "using string reverse";
echo "<br>";
echo strrev("jaya");
echo "<br>";
echo "<br>";
echo "using chr()";
//return a charcter from a specifed asci values 
echo "<br>";
//at ascii value 52 it is 4.so it is printed.
echo chr(52);
