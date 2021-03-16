7.26
<?php
$x = "http://jhhjb";
$y = substr($x, 0, 7);
if ($y = "http://")
{
	echo "Да";
}
else
{
	echo "Нет";
}
?>
<br>
7.27
<?php
$x = "html css php";
$y = explode(" '", $x);
echo $y[0];
echo $y[1];
echo $y[2];
?>
<br>
7.28
<?php
$x = array("html", "css", "php");
$y = implode(", ", $x);
echo $y;
?>
<br>
7.29
<?php
$date = "2016-12-31";
$x = explode("-", $date);
echo $x[2]. ".".$x[1]. ".".$x[0];
?>
<br>
7.30
<?php
$x = "1234567890";
$y = str_split($x, 2);
echo $y[0]. " ".$y[1]. " ".$y[2]. " ".$y[3]. " ".$y[4];
?>
<br>
7.31
<?php
$x = "1234567890";
$y = str_split($x, 1);
echo $y[0]. " ".$y[1]. " ".$y[2]. " ".$y[3]. " ".$y[4]. " ".$y[5]. " ".$y[6]. " ".$y[7]. " ".$y[8]. " ".$y[9];
?>
<br>
7.32
<?php
$x = "1234567890";
$y = str_split($x, 2);
$r = implode("-", $y);
echo $r;
?>
<br>
7.33
<?php
$x = " hello world ";
echo trim($x);
?>
<br>
7.34
<?php
$x = "/php/";
echo trim($x, "/");
?>
<br>
7.35
<?php
$x = "слова слова слова.";
echo trim($x, "."). ".";
?>
<br>
7.36
<?php
$x = "12345";
echo strrev($x);
?>
<br>
7.37
<?php
$x = "madam";
$y = strrev($x);
if ($x = $y)
{
	echo "yes";
}
else
{
	echo "no";
}
?>
<br>
7.38
<?php
$x = "UnaFata";
echo str_shuffle($x);
?>
<br>
7.39
<?php
$x = "abcdifghijklnmopqrstuvwxyz";
$y = str_shuffle($x);
$z = substr($y, 0, 6);
echo $z;
?>
<br>
7.40
<?php
$x = "x";
for ($i = 1; $i <10; $i++)
{
	echo "<br>".str_repeat($x, $i);
}
?>
<br>
7.41
<?php
for ($i = 2; $i <10; $i++)
{
	echo "<br>".str_repeat($i, $i);
}
?>
<br>
7.43
<?php
$x = "html, <b>php</b>, js";
echo strip_tags($x);
?>
<br>
7.44
<?php
$x = "<p>html</p>, <b>php</b>, <i>js</i>";
echo strip_tags($x, "<b>, <i>");
?>
<br>
7.45
<?php
$x = "html, <b>php</b>, js";
echo htmlspecialchars($x);
?>
<br>
7.46
<?php
$x = "ab-cd-ef";
echo strstr($x, "-");
?>
<br>
8.1
<?php
$x = "Москва Санкт-Питербург Ростов Магадан";
$y = explode(" ", $x);
sort($y);
echo $m = implode(", ", $y);
?>
<br>
8.2
<?php
$x = "var_test_text";
$z = explode("_", $x);
$m = implode(" ", $z);
$y = ucwords($m);
$h = explode(" ", $y);
$h = implode("", $h);
echo $t = lcfirst($h);
?>
<br>
8.3
<?php
$x = "12345 67890";
$z = explode(" ", $x);
$z[0] = strrev($z[0]);
$z[1] = strrev($z[1]);
echo implode(" ", $z);
?>
<br>
8.4
<br>
8.5
<?php
$arr = [367, 2, 3, 10];
$x = implode(",", $arr);
echo substr_count($x, 3);
?>
<br>
8.6
<?php
$x = "12345678";
$y = str_split($x, 2);
echo array_sum($y);
?>
<br>
8.7
<?php
?>