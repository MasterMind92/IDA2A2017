<?php 
//acquisition de la connexion
$conex=new PDO("mysql:host=localhost;dbname=projet","root","");



 //execution de la requete entre parenthese
    $req=$conex->query("select * from autoecole" );
    //recuperation des resultats dans la variable $result
 $result=$req->fetchAll(PDO::FETCH_ASSOC);

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

    <title>Admin </title>

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
                <a class="navbar-brand" href="index.html">INTERFACE ADMINISTRATEUR</a>

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
                            <a href="../../frmAuto.php"><i class="fa fa-edit fa-fw"></i>INSERTION</a>
                        </li>
                          <li id="liste"> <a> <i class="fa fa-list-alt fa-fw"></i>AUTO-ÉCOLES</a>
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
            <!-- /.row -->
        
         <div id="text" class="col-lg-8">
                <table class="table table-hover well">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Libellé</th>
                             <th>Contact</th>
                            <th>Situation-geographique</th>
                             <th>Adresse</th>
                            <th>E-mail</th>
                            
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        //utilisation de la boucle foreach
                        //pour parcourir le tableau $result
                        foreach ($result as $key => $value) :

                         ?>
                        <tr class="1">
                            <td> <?php //affichage de l' identifiant
                        echo $value['idAuto'];

                             ?>  </td>
                            <td> <?php //affichage de libbellé
                        echo $value['libeAuto'];

                             ?>  </td>
                              <td> <?php //affichage de l' identifiant
                        echo $value['contAuto'];

                             ?>  </td>
                            <td> <?php //affichage de libbellé
                        echo $value['situgeo'];

                             ?>  </td>
                              <td> <?php //affichage de l' identifiant
                        echo $value['adrs'];

                             ?>  </td>
                            <td> <?php //affichage de libbellé
                        echo $value['emailAuto'];

                             ?>  </td>


                        </tr>
                        <?php 

                        endforeach
                         ?>


                    </tbody>
                </table>
                 <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-4" ></div>
                        <div class="col-md-4">
                            <ul class="nav navbar-nav" style="margin-bottom:5px;">
                        <li style="margin-right:25px;">
                            <a class="btn btn-warning btn-block " data-toggle="modal" href='#modifier'>Modifier</a>
                     </li>
                      <li>
                                <a class="btn btn-danger btn-block "  data-toggle="modal" href='#supprimer'>Supprimer</a>
                        </li>
                    </ul> 
                        </div>
                        <div class="col-md-4" ></div>
                   
                </div>
            </div>
            </div>
                <div class=" col-xs-offset-3 col-xs-3  col-sm-offset-3 col-sm-3  col-md-offset-3 col-md-3  col-lg-offset-3 col-lg-3">
                  
               
                <div class="modal fade" id="modifier">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                <h4 class="modal-title"><legend>Form title</legend></h4>
                            </div>
                                <div class="modal-body">
                                    <form id="supfor" action="../../../Traitement/traitmodifauto.php" method="POST" role="form">
                                    
                                        <div class="form-group">

        
        <input type="hidden"  class="form-control" id="id"  name="id" >
    </div>
                                                    <div class="form-group">
        <label for="nom">NOM DE L'AUTO-ECOLE</label>
        <input type="text" class="form-control" id="nom" placeholder="votre nom ici" name="nom" autofocus>
    </div>
    <div class="form-group">
      <label for="contact">CONTACTS</label>
      <input type="text" class="form-control" id="contact" placeholder="vos contacts ici" name="contact">
      
    </div>  
    <div class="form-group">
        <label for="domicil">SITUATION GEOGRAPHIQUE</label>
        <input type="text" class="form-control" id="domicil" placeholder="votre lieu d'habitaion ici" name="domicil">
    </div>
    <div class="form-group">
      <label for="adress">ADRESSE DE L'AUTO-ECOLE</label>
      <input type="text" class="form-control" id="adress" placeholder="" name="adress" >
    </div>
    <div class="form-group">
        <label for="mail">E-mail</label>
        <input type="email" class="form-control" id="mail" placeholder="votre email ici" name="mail" required>
        
    </div>
    </div>
 <button type="submit" name="ok" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   
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
                                <button type="button" class="btn btn-default">NON</button>
                                <button type="button"  id="sup" class="btn btn-danger" data-dismiss="modal">OUI</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
             </div>
             </div>
            </section>
             
            
            
               
            
    
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
   
        
        <script type="text/javascript">
            




                  $(function () {
                    //tableau caché par defaut
                         $("#text").hide();
                         
                         //evenement d'affichage
                        $("#liste ").click(function(){

                           $("#text").toggle(500);
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
                                    $.post("../../../Traitement/traitsupauto.php",form,function(data){
                                      $this.fadeOut(1000);
                                        //alert(data);
                                  //  ligne.hide();
                                    });   
                                });
                              $(this).children().css("backgroundColor","aqua");
                              $(this).siblings().children().css("backgroundColor","white");

                             // $("#libelle").attr("value",lib);

                              $("#avertissement").text("Voulez vous vraiment Supprimer l'AUTO-ECOLE "+lib+"?");

                        });
                              });
                       
            
        </script>

</body>

</html>
