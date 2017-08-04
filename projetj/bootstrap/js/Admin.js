
/**************************************************************
*		SCRIPT DE GESTION DU COMPORTEMENT DE L'ADMINISTRATION 
***************************************************************/

$(function () {



	//NOUVEAU CODE D'AFFICHAGE DES INFOS PAR ZONE 

	$(".Departement").find("h2").click(function (event) {
		alert("wai c bon");
	});


	//GESTION DU CHANGEMENT DE LA CHARTE GRAPHIQUE

	var i=1;

	$("#theme").click(function (event) {
		 
		 if ((i%2)==0) {
		 	
		 	//arret de la redirection du lien 

			 event.preventDefault();

			 //changement visuel des elements de l'administration 

			 $("nav ").removeClass("navbar-inverse").addClass("navbar-orange");
			 $("nav .btn").removeClass("btn-success").addClass("btn-orange");
			 $("footer > div").addClass("btn-orange").css("backgroundColor","");	
			 i++;

		 }else {

		 	
			 //arret de la redirection du lien 

			 event.preventDefault();

			 //changement visuel des elements de l'administration 

			 $("nav ").removeClass("navbar-orange").addClass("navbar-inverse");
			 $("nav .btn").removeClass("btn-orange").addClass("btn-success");
			 $("footer > div").removeClass("btn-orange").css("backgroundColor","#34495e");
			 i++;

		 }
	});




	});
