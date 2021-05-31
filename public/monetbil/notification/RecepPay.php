<?php
include("session-verif.php");
include("connection.php");


//recuperation des infos de la bd
    $sql2 = $bdd->query( "SELECT montantversement,datepayement,nomEleve,prenomEleve,classEleve,eleve.matriculeeleve FROM eleve, versement where versement.matriculeeleve=eleve.matriculeeleve");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Application de gestion schoolaire">
    <meta name="author" content="Jules Ndanga,Mantho,Leunga Reinna">
    <title>Recapitulatif Payement</title>
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="plugins/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

</head>

<body>
    <nav aria-label="breadcrumb" role="navigation" >
        <ol class="breadcrumb h-100">
            <li class="breadcrumb-item">
                <a href="accueil.php" class="nav-link acc">Recapitulatif Payement</a>
            </li>
        </ol>
    </nav>

    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <div class="image">
                    <img src="image/costar.svg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nomUtili'] ?></div>
                    <div class="deco"><a href="decon.php" class="text-decoration-none text-light text-uppercase nav-link">Se deconnecter</a></div>
                </div>
            </div>
         
            <a href="accueil.php" class="btn btn-primary btn-lg col-12">Accueil</a><br>
            <a href="RecepPay.php" class="btn btn-secondary btn-lg col-12">Voir le recapitulatif</a><br>
            <a href="effectuerpay.php" class="btn btn-primary btn-lg col-12">Enregistrer un payement</a><br>
            <a href="ModifPay.php" class="btn btn-primary btn-lg col-12">Modifier un payement</a>
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 by <a href="#">GROUPE 3 PROJET WEB</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
        </aside>
      
    </section>
    <section class="content">
        <div class="container-fluid">
        
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="font-weight-bold text-center">
                                TABLE DES RECAPITULATIFS DES PAYEMENTS EFFECTUER PAR LES ELEVES
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Nom et prenom</th>
                                            <th>Classe</th>
                                            <th>Matricule</th>
                                            <th>Payement effectuer</th>
                                            <!--<th>Montant restant</th>-->
                                            <th>Date</th>
                                            <th>Annee Academique</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom et prenom</th>
                                            <th>Classe</th>
                                            <th>Matricule</th>
                                            <th>Payement effectuer</th>
                                            <!--<th>Montant restant</th>-->
                                            <th>Date</th>
                                            <th>Annee Academique</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                            <?php while($a2= $sql2->fetch()){ ?>
                                            <tr>
                                                <td><?= $a2['nomEleve'] ." ".$a2['prenomEleve']?></td>
                                                <td><?= $a2['classEleve']?></td>
                                                <td><?= $a2['matriculeeleve']?></td>
                                                <td><?=$a2['montantversement']?></td>
                                                <!--<td>656645</td>-->
                                                <td><?=$a2['datepayement']?></td>
                                                <td>2019-2020</td>
                                            </tr>
                                            <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery/jquery.dataTables.js"></script>
    <script src="plugins/jquery/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery/pdfmake.min.js"></script><!--Permet de ressortir un pdf de la table-->
    <script src="plugins/jquery/vfs_fonts.js"></script><!--Permet de ressortir le style de css du un pdf de la table-->
    <script src="plugins/jquery/buttons.html5.min.js"></script><!--Permet de ressortir les buttons pour l'impression,copy ...etc-->
    <script src="plugins/jquery/buttons.print.min.js"></script><!--Pour l'impression-->
    <script src="plugins/jquery/jquery-datatable.js"></script><!--Les boutton pour imprimmer-->


</body>

</html>
