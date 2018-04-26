<!DOCTYPE html>
<html lang="es">
	<head>
	    <title>Super Technology SAC.</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	    <link href="<?php echo $this->BaseUrl('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
	    <link href="<?php echo $this->BaseUrl('assets/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" />

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

		<script>
		function base_url(url) { return '<?php echo $this->BaseUrl('index.php/'); ?>' + url; } function redirect(href) { window.location.href = '<?php echo $this->BaseUrl('index.php/'); ?>' + href; }
		function AjaxPopupModal(id, title, url, params)
		{
			$("#" + id).remove();
		    $("body").append('<div data-backdrop="static" id="' + id + '" class="modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">' + title + '</h4></div><div class="modal-body"></div></div></div></div>');
		    $("#" + id).modal();

		    //Cargando
		    $("#" + id).find('.modal-body').html('<blink>Cargando el formulario...</blink>');
		    $.post(base_url(url),params, function(r){
		    	$("#" + id).find('.modal-body').html(r);
		    });
		}
		</script>

	</head>
	<body>

<nav class="navbar navbar-default navbar-fixed-top" style="padding :20px; background-color: #304554;">
	<div class="container" >
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header" >
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand text-white"  style="color:white" href="#">Green Lemon</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<form class="navbar-form navbar-right" action="<?php echo $this->BaseUrl('index.php/inicio/busqueda'); ?>" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="buscar" placeholder="¿Qué está buscando?">
						<button type="submit" data-ajax="true" class="btn btn-default">Buscar</button>
					</div>
				</form>
	      <ul class="nav navbar-nav navbar-right ">
	            <li><a style="color:white" href="<?php echo $this->BaseUrl('/'); ?>">Inicio</a></li>
						<?php if(!isset($_SESSION["loggedin"])):?>
	            <li><a  style="color:white" href="<?php echo $this->BaseUrl('index.php/login'); ?>">Iniciar sesion</a></li>
						<?php else: ?>
							<li><a  style="color:white" href="<?php echo $this->BaseUrl('index.php/admin/inicio'); ?>"><?php echo $_SESSION["nombre"]?></a></li>
							<li><a  style="color:WHITE;background-color:#f15500 ;border-radius: 10px ;font-weight: bold; margin: 5px 20px 5px 0px ; padding : 10px 35px" href="<?php echo $this->BaseUrl('index.php/login/logout'); ?>">SALIR</a></li>
						<?php endif; ?>

	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
		</div>
</nav>

<div class="container" style="margin-top:110px; min-height: 640px"; >

			<?php
			//Aqui cargamos la vista actual
			require_once $this->View;
			?>

			<div class="clearfix"></div>
		</div>
	</div>

	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">

				<div class="col-xs-12 col-sm-12 col-md-12">
					<ul class="list-unstyled quick-links">
						<li><a href="<?php echo $this->BaseUrl('index.php/inicio/nosotros'); ?>"><i class="fa fa-angle-double-right"></i>Nosotros</a></li>
						<li><a href="<?php echo $this->BaseUrl('index.php/inicio/valores'); ?>"><i class="fa fa-angle-double-right"></i>Especiales</a></li>
						<li><a href="<?php echo $this->BaseUrl('index.php/inicio/visionymision'); ?>"><i class="fa fa-angle-double-right"></i>Vision mision</a></li>
					</ul>
				</div>
			</div>

			<div class="row" >
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p style="color:white" >National Transaction Corporation is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p  style="color:white" class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				</hr>
			</div>
		</div>
	</section>

	    <script src="<?php echo $this->BaseUrl('assets/js/bootstrap.min.js'); ?>"></script>
	    <script src="<?php echo $this->BaseUrl('assets/js/masonry.pkgd.min.js'); ?>"></script>
	</body>
</html>
<style media="screen">
section {
	padding: 40px 0px;
}

section .section-title {
	text-align: center;
	color: #304554;
	margin-bottom: 50px;
	text-transform: uppercase;
}


#footer {
	background: #304554 !important;
  width: 100%;
  height: 200px;
  color: white;
	left:0px;
	bottom:0px;

}

#footer a {
	color: #ffffff;
	text-decoration: none !important;
	background-color: transparent;
	-webkit-text-decoration-skip: objects;
}
#footer ul.social li{
padding: 3px 0;
}
#footer ul.social li a i {
	margin-right: 5px;
font-size:25px;
-webkit-transition: .5s all ease;
-moz-transition: .5s all ease;
transition: .5s all ease;
}
#footer ul.social li:hover a i {
font-size:30px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
color:#ffffff;
}
#footer ul.social li a:hover{
color:#eeeeee;
}
#footer ul.quick-links li{
padding: 3px 0;
-webkit-transition: .5s all ease;
-moz-transition: .5s all ease;
transition: .5s all ease;
}
#footer ul.quick-links li:hover{
padding: 3px 0;
margin-left:5px;
font-weight:700;
}
#footer ul.quick-links li a i{
margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
	font-weight: 700;
}

@media (max-width:767px){
#footer h5 {
	padding-left: 0;
	border-left: transparent;
	padding-bottom: 0px;
}

}

</style>
