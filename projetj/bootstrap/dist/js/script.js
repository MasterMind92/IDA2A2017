$(function () {
	$(".annuler").hide();
	//envoie du formulaire demandeur
	$("#frmdemander").on("submit",function (e) {
		// bloquons le comportement par defaut du formulaire
		e.preventDefault();
		// envoie du formulaire avec la methode post de jquery
		$.post("../Traitement/TraitDemandeur.php",$(this).serialize(),function(data) {
			//alert(data.mail);
			if (data==1) {
				$.notify({
					message:"demandeur enregistré avec succès"
				},
				{
					type:"success"
				});
				$(".annuler").trigger("click");
			}
			else{
				$.notify({
					message:"enregistrement echoué"
				},
				{
					type:"danger"
				});
			}
			
		},"json");
	});
});