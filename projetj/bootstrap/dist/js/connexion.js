$(function() {
	$("#login-form").on("submit",function(e){
		e.preventDefault();
		var login=$('#login').val(),
			mot=$('#key').val();
			if (login != '' && mot !='') {
				$.post("../Traitement/TraitConnex.php",$(this).serialize(),function(data){
					console.log(data);
				});
			}
			else{
				alert("veuillez renseignez tous les champs");
			}		
	});

});