<?php
include_once '../model/Plante.php';
include_once '../controller/PlanteC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $PlanteC=new PlantesC() ;
 $PlanteC->deletePlantes($id);
 header('location:afficherplante.php');
}