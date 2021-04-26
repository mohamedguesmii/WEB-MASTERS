<?php
include_once '../../Model/Plante.php';
include_once '../../Controller/PlanteC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $PlanteC=new PlantesC() ;
 $PlanteC->deletePlantes($id);
 header('location:widgets.php');
}