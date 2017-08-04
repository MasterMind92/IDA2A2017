$(function () {
	$(".annuler").hide();
	//envoie du formulaire demandeur
	$("#frmdemander").on("submit",function (e) {
		// bloquons le comportement par defaut du formulaire
		e.preventDefault();
		// envoie du formulaire avec la methode post de jquery
		$.post("../traitement/expldemande.php",$(this).serialize(),function(data) {
			//alert(data.mail);
			if (data==1) {
				$.notify("demandeur enregistré avec succès","success");
				$(".annuler").trigger("click");
			}
			else{
				$.notify("enregistrement echoué","danger");
			}
			
		});
	});
});