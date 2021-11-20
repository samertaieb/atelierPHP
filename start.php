<?php
include "club.php";
$i=$_POST["id"];
$j=$_POST["nom"];
$k=$_POST["description"];
$l=$_POST["adresse"];
$m=$_POST["domaine"];
 $c  =new club($i,$j,$k,$l,$m);

$c->afficherClub();

?>