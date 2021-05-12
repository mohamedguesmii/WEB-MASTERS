<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "../config.php";
include '../controller/UtilisateurC.php';
$userC = new UtilisateurC();

$user=$_SESSION['prenom'] .' '. $_SESSION['nom'];
$id=$_SESSION['id'];
$prenom=$_SESSION['prenom'];
$nom=$_SESSION['nom'];
$role=$_SESSION['role'];
$email=$_SESSION['email'];
$adresse=$_SESSION['adresse'];
$login=$_SESSION['login'];
$date=$_SESSION['date'];
$telephone=$_SESSION['telephone'];

 if ( 
 isset($_POST['nom'])
// && isset($_POST['prenom'])
// && isset($_POST['date_de_naissance'])
// && isset($_POST['email'])
// && isset($_POST['telephone'])
// && isset($_POST['adresse'])
 )
 {
if(!empty($_POST['nom'])
// &&!empty($_POST['prenom'])
//   &&!empty($_POST['date_de_naissance'])
//   &&!empty($_POST['email'])
//   &&!empty($_POST['telephone'])
//   &&!empty($_POST['adresse'])
 )
  { 
  $nomUp=$_POST["nom"];
  $prenomUp=$_POST["prenom"];
  $dateUp=$_POST["date_de_naissance"];
  $emailUp=$_POST["email"];
  $telephoneUp=$_POST["telephone"];
  $adresseUP=$_POST["adresse"];
  
  $userC->modifierUtilisateur($id,$nomUp,$prenomUp,$dateUp,$emailUp,$telephoneUp,$adresseUp);
  header('Location:profil.php');
  
  $_SESSION['prenom'] = $prenomUp;
  $_SESSION['nom'] = $nomUp;
  $_SESSION['email'] = $emailUp;
  $_SESSION['telephone'] = $telephoneUp;
  $_SESSION['adresse'] = $adresseUP;
  $_SESSION['date'] = $dateUp;
}
}
else{
  echo("");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Profil Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="acceuilAdm.php"><img src="assets/images/naturepet.jpg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Gestion des comptes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="comptes.php">Afficher les comptes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="validation.php">Validation</a>
                </li>
              </ul>
            </div>
          </li>
          <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Gestion des reclamations</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="event.php">afficher des reclamations</a>
                </li>
                
              </ul>
            </div>
          </li>
        </ul
>      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="acceuilAdm.php"><img src="assets/images/naturepet.jpg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/naturepet.jpg" />
                  <span class="profile-name"><?PHP echo $user; ?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  
                  <a class="dropdown-item" href="loginAdm.php">
                    <i class="mdi mdi-logout mr-2 text-primary"></i>Se déconnecter</a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div style="height: 100%;overflow-y: scroll;overflow-x: hidden; ">
               <div class="col-12 grid-margin" style="margin-top: 10px">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="" method="POST">
                      <p class="card-description">Informations personnelles</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prenom</label>
                            <div class="col-sm-9">
                              <input type="text" name="prenom" class="form-control" value='<?PHP echo $prenom; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nom de famille</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nom" value='<?PHP echo $nom; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ROLE</label>
                            <div class="col-sm-9">
                              <select class="form-control" disabled>
                                
                                <option <?=$role == 'client' ? ' selected="selected"' : '';?>>Client</option>
                                <option <?=$role == 'Admin' ? ' selected="selected"' : '';?>>Admin</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date de naissance</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="date_de_naissance" value='<?PHP echo $date; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" name="email" class="form-control" value='<?PHP echo $email; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero de Telephone</label>
                            <div class="col-sm-9">
                              <input type="text" name="telephone" class="form-control" value='<?PHP echo $telephone; ?>' />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Adresse</label>
                            <div class="col-sm-9">
                              <input type="text" name="adresse" class="form-control" value='<?PHP echo $adresse; ?>' />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="margin-top:3%">
              <button type="submit" class="btn btn-primary mr-2"> Modifier </button>
              <button class="btn btn-light" type="reset">Annuler</button>
          </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © NaturePet 2021</span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>