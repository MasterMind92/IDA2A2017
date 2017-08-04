<!DOCTYPE html>
	<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>connexion</title>
		<link  type="text/css" href="../bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="modal.css">
	</head>
		<body>
		
		<section id="login">
    <div class="container">
        <div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>LOGIN</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="login@typemmail.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Mot de Passe</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Mot de passe...">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Afficher le mot de passe </span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Mot de Passe Oublié ?</a>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recuperation du Mot de Passe</h4>
			</div>
			<div class="modal-body">
				<p>Saisissez Votre email</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
				<button type="button" class="btn btn-custom">Recuperation</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Powered by JERENHO L'INÉBRANLABLE,L'INEXTINGUIBLE,L'IRRÉSISTIBLE © </p>
                <p> <strong><a href="http://www.facebook.com/Degbe jeremie" target="_blank">FB</a></strong></p>
            </div>
        </div>
    </div>
</footer>
		<script src="../bootstrap/dist/js/jquery.js"></script>
		<script src="../bootstrap/dist/js/bootstrap.js"></script>
		 <script src="../bootstrap/js/jquery.js"></script> <script>
      	function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}

		 </script>
		</body>
</html>