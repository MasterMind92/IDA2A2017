<?php 
//acquisition de la connexion
$conex=new PDO("mysql:host=localhost;dbname=projet","root","");




 //execution de la requete entre parenthese
    $req=$conex->query("SELECT * FROM Personnel" );
     $red=$conex->query("SELECT * FROM Demandeur" );
     $formation=$conex->query("SELECT * FROM Formation");
      $mat=$conex->query("SELECT * FROM MaterielFormation");
    //recuperation des resultats dans la variable $result
 $result=$req->fetchAll(PDO::FETCH_ASSOC);
 $res=$red->fetchAll(PDO::FETCH_ASSOC);
 $resf=$formation->fetchAll(PDO::FETCH_ASSOC);
 $resm=$mat->fetchAll(PDO::FETCH_ASSOC);

   #  var_dump($result);
    # exit();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Autoecole</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onLoad="afficher()">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AUTO-ECOLE</a>
               
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Nouveau Message
                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> Nouveau Twitte
                                   
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Envoyé
                                    </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Nouvelle Tache
                                     </div>
                            </a>
                        </li>
                      
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Profil d'Utilisateur</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Paramètre</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Déconnexion </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>INSERTION</a>
                        
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../../frmpersonnel.php">Personnel</a>
                                </li>
                                <li>
                                    <a href="../../frmdemandeur.php">Demandeur</a>
                                </li>
                                <li>
                                    <a href="../../formulaireformation.php">Formation</a>
                                </li>
                                <li>
                                    <a href="../../formulairemateriel.php">Matériel de formation</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>LISTES</a>
                        
                            <ul class="nav nav-second-level">
                                <li id="liste">
                                    <a>Personnel</a>
                                </li>
                                <li id="listede">
                                    <a >Demandeur</a>
                                </li>
                                <li id="bf">
                                    <a >Formation</a>
                                </li>
                                <li id="bm">
                                    <a>Matériel de formation</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                       <form name="horloge"><input type="text" name="ici" size="35" style="margin-bottom:5px;" disabled></form>                      
                    </ul>
                   
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SALUT!!!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--table formation-->
            <div id="formation" class="col-lg-8">
                <h3 class="text-center">Liste des formations</h3>
                <table class="table table-hover well">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Libellé</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        //utilisation de la boucle foreach
                        //pour parcourir le tableau $result
                        foreach ($resf as $key => $value) :

                         ?>
                        <tr class="1">
                             <td> <?php //affichage du nom
                        echo $value['idFor'];

                             ?>  </td>
                            <td> <?php //affichage du nom
                        echo $value['libFor'];

                             ?>  </td>

                        </tr>
                        <?php 

                        endforeach
                         ?>


                    </tbody>
                </table>
                <div class=" col-xs-offset-3 col-xs-3  col-sm-offset-3 col-sm-3  col-md-offset-3 col-md-3  col-lg-offset-3 col-lg-3">
                  
                <a class="btn btn-warning btn-block " data-toggle="modal" href='#modifier'>Modifier</a>
                <div class="modal fade" id="modifier">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                <h4 class="modal-title"><legend>Form title</legend></h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form id="supfor" action="../../../Traitement/traitmodifpers.php" method="POST" role="form">
                                     <div class="form-group">
                                     <input type="hidden"  class="form-control" id="id"  name="id" >
                                    </div>
                                        <div class="form-group">
                                            <label for="">Nom</label>
                                            <input type="text" class="form-control" name="nom" id="nomPers" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Prenom</label>
                                            <input type="text" class="form-control" name="pre" id="libelle" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Date naiss</label>
                                            <input type="text" class="form-control" name="date" id="libelle" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Domicile</label>
                                            <input type="text" class="form-control" name="dom" id="libelle" placeholder="Input field">
                                        </div>
                                    
                                        
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <a class="btn btn-danger btn-block " data-toggle="modal" href='#supprimer'>Supprimer</a>
                <div class="modal fade" id="supprimer">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div id="avertissement"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">OUI</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
             </div>

            <!--materielformation-->
            <div id="materiel" class="col-lg-8">
                <h3 class="text-center">Liste des matériels de formation</h3>
                <table class="table table-hover well">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Libellé</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        //utilisation de la boucle foreach
                        //pour parcourir le tableau $result
                        foreach ($resm as $key => $value) :

                         ?>
                        <tr class="1">
                             <td> <?php //affichage du nom
                        echo $value['idMatfor'];

                             ?>  </td>
                            <td> <?php //affichage du nom
                        echo $value['noMat'];

                             ?>  </td>

                        </tr>
                        <?php 

                        endforeach
                         ?>


                    </tbody>
                </table>
                <div class=" col-xs-offset-3 col-xs-3  col-sm-offset-3 col-sm-3  col-md-offset-3 col-md-3  col-lg-offset-3 col-lg-3">
                  
                <a class="btn btn-warning btn-block " data-toggle="modal" href='#modifier'>Modifier</a>
                <div class="modal fade" id="modifier">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                <h4 class="modal-title"><legend>Form title</legend></h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form id="supfor" action="../../../Traitement/traitmodifpers.php" method="POST" role="form">
                                     <div class="form-group">
                                     <input type="hidden"  class="form-control" id="id"  name="id" >
                                    </div>
                                        <div class="form-group">
                                            <label for="">Nom</label>
                                            <input type="text" class="form-control" name="nom" id="nomPers" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Prenom</label>
                                            <input type="text" class="form-control" name="pre" id="libelle" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Date naiss</label>
                                            <input type="text" class="form-control" name="date" id="libelle" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Domicile</label>
                                            <input type="text" class="form-control" name="dom" id="libelle" placeholder="Input field">
                                        </div>
                                    
                                        
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <a class="btn btn-danger btn-block " data-toggle="modal" href='#supprimer'>Supprimer</a>
                <div class="modal fade" id="supprimer">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div id="avertissement"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">OUI</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
             </div>
            <!-- table personnel-->
            <div id="text" class="col-lg-8">
                <table class="table table-hover well">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date de Naissance</th>
                            <th>Domicile</th>
                            
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        //utilisation de la boucle foreach
                        //pour parcourir le tableau $result
                        foreach ($result as $key => $value) :

                         ?>
                        <tr class="1">
                             <td> <?php //affichage du nom
                        echo $value['idPers'];

                             ?>  </td>
                            <td> <?php //affichage du nom
                        echo $value['nomPers'];

                             ?>  </td>
                            <td> <?php //affichage prenom
                        echo $value['prePers'];

                             ?>  </td>
                              <td> <?php //affichage date
                        echo $value['datnaissPers'];

                             ?>  </td>
                            <td> <?php //affichage domicile
                        echo $value['domiPers'];

                             ?>  </td>


                        </tr>
                        <?php 

                        endforeach
                         ?>


                    </tbody>
                </table>
                <div class=" col-xs-offset-3 col-xs-3  col-sm-offset-3 col-sm-3  col-md-offset-3 col-md-3  col-lg-offset-3 col-lg-3">
                  
                <a class="btn btn-warning btn-block " data-toggle="modal" href='#modifier'>Modifier</a>
                <div class="modal fade" id="modifier">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                <h4 class="modal-title"><legend>Form title</legend></h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form id="supfor" action="../../../Traitement/traitmodifpers.php" method="POST" role="form">
                                     <div class="form-group">
                                     <input type="hidden"  class="form-control" id="id"  name="id" >
                                    </div>
                                        <div class="form-group">
                                            <label for="">Nom</label>
                                            <input type="text" class="form-control" name="nom" id="nomPers" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Prenom</label>
                                            <input type="text" class="form-control" name="pre" id="libelle" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Date naiss</label>
                                            <input type="text" class="form-control" name="date" id="libelle" placeholder="Input field">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Domicile</label>
                                            <input type="text" class="form-control" name="dom" id="libelle" placeholder="Input field">
                                        </div>
                                    
                                        
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <a class="btn btn-danger btn-block " data-toggle="modal" href='#supprimer'>Supprimer</a>
                <div class="modal fade" id="supprimer">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div id="avertissement"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">OUI</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
             </div>
            <!-- /.row -->
         <!-- liste demandeur -->
             <div id="de" class="col-lg-8">
                <table class="table table-hover well">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date de Naissance</th>
                            <th>Domicile</th>
                            
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        //utilisation de la boucle foreach
                        //pour parcourir le tableau $result
                        foreach ($res as $key => $value) :

                         ?>
                        <tr class="2">
                            <td> <?php //affichage du nom
                        echo $value['nomDe'];

                             ?>  </td>
                            <td> <?php //affichage prenom
                        echo $value['preDe'];

                             ?>  </td>
                              <td> <?php //affichage date
                        echo $value['datNai'];

                             ?>  </td>
                            <td> <?php //affichage domicile
                        echo $value['domiDe'];

                             ?>  </td>


                        </tr>
                        <?php 

                        endforeach
                         ?>


                    </tbody>
                </table>
                <div class=" col-xs-offset-3 col-xs-3  col-sm-offset-3 col-sm-3  col-md-offset-3 col-md-3  col-lg-offset-3 col-lg-3">
                  
                <a class="btn btn-warning btn-block " data-toggle="modal" href='#modifie'>Modifier</a>
                <div class="modal fade" id="modifie">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                <h4 class="modal-title"><legend>Form title</legend></h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="" method="POST" role="form">
                                    
                                        <div class="form-group">
                                            <label for="">Nom</label>
                                            <input type="text" class="form-control" name="libelle" id="libe" placeholder="Input field">
                                        </div>
                                    
                                        
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <a class="btn btn-danger btn-block " data-toggle="modal" href='#supprime'>Supprimer</a>
                <div class="modal fade" id="supprime">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div id="averti"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">OUI</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
             </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
     <script type="text/javascript" src="dateheure.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../bootstrap/dist/js/jquery.js"></script>
        <script src="../bootstrap/dist/js/bootstrap.js"></script>
        <script type="text/javascript">
            




                  $(function () {
                         $("#text").hide();
                        $("#liste ").click(function(){
                             $("#formation").fadeOut(200);
                              $("#materiel").fadeOut(200);
                            $("#de").fadeOut(200);
                            $("#text").delay(200).fadeIn(500);
                            $(".page-header").hide();
                        });
                 
                
                      $("#text  .1 ").click(function () {
                               var id=$(this).children().first().text();
                               var $this=$(this);
                             var lib=$(this).children().last().text();
                             var info=$(this).children().each(function(index){
                                var valeur=[];
                                valeur[index]=$(this).text();
                              $("#modifier form .form-group > input").each(function(index){
                               $(this).attr("value",valeur[index]);
                             });
                            });
                             $("#sup").click(function(){
                                    var form=$("#supfor").serialize();
                                    $.post("../../../Traitement/traitsuppers.php",form,function(data){
                                      $this.fadeOut(1000);
                                        //alert(data);
                                  //  ligne.hide();
                                    });   
                                });
                              $(this).children().css("backgroundColor","aqua");
                              $(this).siblings().children().css("backgroundColor","white");

                             // $("#libelle").attr("value",lib);

                              $("#avertissement").text("Voulez vous vraiment Supprimer "+lib+"?");

                        });
                              });
                   $(function () {
                         $("#de").hide();
                        $("#listede ").click(function(){
                             $("#formation").fadeOut(200);
                              $("#materiel").fadeOut(200);
                            $("#text").fadeOut(200);
                            $("#de").delay(200).fadeIn(500);
                            $(".page-header").hide();

                        });
                         
                
                      
                                    $("#de  .2 ").click(function () {
                              var i=$(this).children().first().text();
                              var l=$(this).children().last().text();

                              $(this).children().css("backgroundColor","aqua");
                              $(this).siblings().children().css("backgroundColor","white");

                              $("#libe").attr("value",l);

                              $("#averti").text("Voulez vous vraiment Supprimer le demandeur "+l+"?");

                        });
                              });
            $(function () {
                         $("#formation").hide();
                        $("#bf ").click(function(){
                              $("#materiel").fadeOut(200);
                            $("#text").fadeOut(200);
                             $("#de").fadeOut(200);
                            $("#formation").delay(200).fadeIn(500);
                            $(".page-header").hide();

                        });
                        });
                         $(function () {
                         $("#materiel").hide();
                        $("#bm").click(function(){
                             $("#formation").fadeOut(200);
                              $("#de").fadeOut(200);
                            $("#text").fadeOut(200);
                            $("#materiel").delay(200).fadeIn(500);
                            $(".page-header").hide();

                        });
                        });
                 
                       
            
        </script>


</body>

</html>
