<?php
include_once '../model/accessoires.php';
include_once '../controller/accessoiresC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $accessoiresC=new accessoiresC() ;
 $accessoiresC->deletePlantes($id);
 header('location:afficheraccessoire.php');
}