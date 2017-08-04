$(function () {
	$("form").on("submit", function() {  
	    
	    if($("input").val().length < 3) {    
	        $("div.form-group").addClass("has-error");        $("div.alert").show("slow").delay(4000).hide("slow");  
	            return false;   
	     }   
	});
	$(".annuler").hide();	
	$("#frmadmin").on("submit",function (e) {		
		e.preventDefault();		
		$.post("../traitement/traitementAdmin.php",$(this).serialize(),function(data) {
			alert(data);
			/*if (data==1) {
				$.notify("un utilisateur enregistré avec succès","success");
				$(".annuler").trigger("click");
			}
			else{
				$.notify("enregistrement echoué","danger");
			}*/
			
		});
	});
});