<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<a href="form.php">Form part</a>

 <?php
/*
! $a=10;
! echo $a;
! $a=$a +10;  //! = 20
! echo $a;
* linhe 3andi +=  et -= et **
! */
/*
! $a= 4;
! $a **2; 
! echo $a;
*/
/*
*  kima fil javascript   == equal    === kif b3adhhom w nafess type  exmple til9ahom zouz float    identical
*                        !=    <>  not equal      !== not identical
* bich ta3ref type mta3 variable mte3ik 7ot   gettype() example  gettype();
$a = 4;
echo gettype($a);  | integer
*/

echo <<<"Part23"
<h2>Comparison Operators</h2>
<br>
> larfer than
<br>
>= larger than Or equal
<br>
< smaller Than
<br>
<= smaller than or equal 
<br>
<=> spiceship [Less than,Equal or Greater]
<br>
itha jet
var_dump(100 <=> 200) // -1
<br>
idha jet 
var_dump(200 <=> 100) // 1
<br>
idha jet 
var_dump(200 <=> 200) // 0
<br>
Part23;

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo <<<"Part24"
<h2>Increment And Decrement Operators</h2>
<br>
$a=1;
$a++
echo $a = 2
Part24;
$a =1;
$b=1;
echo "<br>";
echo $a++;
echo "<br>";
echo ++$b;
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo "<br>";
echo <<<"whatiknow"
na3ref array
<br>
na3ref fonction
<br>
na3ref form / post
<br>
na3ref condition 
whatiknow;

echo<<<"part25"
<h2>26 | Logical Operators</h2>
<br>
and / &&
<br>
or / ||
<br>
xor 
<br>
!  --not 
<br>

<h2>String Operators</h2>
<br>
3ana kifeh tlassa9 des variable 
<br>
|
^
<br>
oghwor louta  fil code 


part25;
define("key","value");
echo key;
//! exmple 
$a= "Mohamed" ;
$$a= "aziz" ;
$$$a= "Ladhari";
echo "<br>";
echo "<p> Solution 1</p>";
echo  "$a  ${$a} ${${$a}}" .key .CreateExemple();
echo "<p> Solution 2</p>";
echo "<br>";
$x= "Aziz 2";
echo "<br>";
$x .= "00";
echo "<br>";
$x .= "0";
echo "<br>";
echo $x; 
echo "<br>";

function CreateExemple(){
    return 1;
}


echo <<<"part26"
<h2>Array Operators</h2>
part26;
$array1=[1 => "x" , 2 => "x2"];
$array2=[3 => "z", 4 => "z2"];

echo "<pre>";
print_r($array1 + $array2);
echo "</pre>";
?>

</body>
</html>