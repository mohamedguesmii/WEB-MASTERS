<?php
include "../controller/acctualiteC.php";

$id=$_POST["id"];
$name=$_POST["name"];
$images=$_POST["images"];
$prix=$_POST["paragraphe"];

$acctualiteC=new acctualiteC();
$acctualiteC->modifieracctualite($id,$name,$images,$acctualiteC);
header("location:afficheracctualite.php");
