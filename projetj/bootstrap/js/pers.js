$(function () {
	$(".annuler").hide();	
	$("#perso").on("submit",function (e) {		
		e.preventDefault();		
		$.post("../Traitement/traitementPers.php",$(this).serialize(),function(data) {
			//alert(data);
			if (data==1) {
				$.notify("Personnel enregistré avec succès","success");
				$(".annuler").trigger("click");
			}
			else{
				$.notify("enregistrement echoué","danger");
			}
			
		});
	});
});