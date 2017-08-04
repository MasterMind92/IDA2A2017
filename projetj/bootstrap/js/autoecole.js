$(function () {
	$(".annuler").hide();
	//envoie du formulaire autoecole
	/*$("#autoecole").on("submit",function (e) {
		// bloquons le comportement par defaut du formulaire
		e.preventDefault();
		// envoie du formulaire avec la methode post de jquery
		$.post("../traitement/traitementAuto.php",$(this).serialize(),function(data) {
			//alert(data.mail);
			if (data==1) {
				$.notify("Auto-ecole enregistré avec succès","success");
				$(".annuler").trigger("click");
			}
			else{
				$.notify("enregistrement echoué","danger");
			}
			
		});
	});*/

	$("#accueil").click(function(){
		window.location="ad/pages/admin.php";
	});
	$("#admin").on("show.bs.modal",function(){
		var auto=$("#autoecole").serialize();
		$.post("../Traitement/traitementAuto.php",auto,function(){
			$(".annuler").trigger("click");
		})
	});

});