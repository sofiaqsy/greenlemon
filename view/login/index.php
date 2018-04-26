<!DOCTYPE html>
<html lang="es">
	<head>
	    <title>Mi Red Social</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	    <link href="<?php echo $this->BaseUrl('Assets/css/bootstrap.css'); ?>" rel="stylesheet" />
	    <link href="<?php echo $this->BaseUrl('Assets/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" />
	</head>
	<body>


		<div class="container">
		  <div class="row">

		    <div class="main">

		      <h3>Ingrese su cuenta, o <a href="#">solicite</a></h3>
		      <div class="login-or">
		        <hr class="hr-or">
		        <span class="span-or"></span>
		      </div>
		      <form  action="<?php echo $this->BaseUrl('index.php/login/login'); ?>" method="POST" role="form">
		        <div class="form-group">
		          <label for="inputUsernameEmail">Email</label>
		          <input type="text" name="email" value="<?php echo isset($this->Attach['email']) ? $this->Attach['email'] : NULL ?>" class="form-control" id="inputUsernameEmail">
		        </div>
		        <div class="form-group">
		          <a class="pull-right" href="#">Olvidaste tu contraseña?</a>
		          <label for="inputPassword">Contraseña</label>
		          <input type="password" name="contrasena" class="form-control" id="inputPassword">
		        </div>
							<?php if(!empty($this->Attach['errors'])): ?>
								<div class="alert alert-danger" role="alert">
								<strong>Oh snap!</strong> <a href="#" class="alert-link">Error</a> <?php echo $this->Attach['errors']; ?>
								</div>
							<?php endif; ?>
		        <div class="checkbox pull-right">
		          <label>
								<button type="submit" class="btn btn btn-primary">
				          Log In
				        </button> </label>
		        </div>

		      </form>

		    </div>

		  </div>
</div>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	  <script src="<?php echo _BASE_URL_; ?>Assets/js/bootstrap.min.js"></script>
		<style media="screen">
		body {
 padding-top: 15px;
 font-size: 12px
}
.main {
 max-width: 320px;
 margin: 0 auto;
}
.login-or {
 position: relative;
 font-size: 18px;
 color: #aaa;
 margin-top: 10px;
				 margin-bottom: 10px;
 padding-top: 10px;
 padding-bottom: 10px;
}
.span-or {
 display: block;
 position: absolute;
 left: 50%;
 top: -2px;
 margin-left: -25px;
 background-color: #fff;
 width: 50px;
 text-align: center;
}
.hr-or {
 background-color: #cdcdcd;
 height: 1px;
 margin-top: 0px !important;
 margin-bottom: 0px !important;
}
h3 {
 text-align: center;
 line-height: 300%;
}
		</style>
	</body>
</html>
