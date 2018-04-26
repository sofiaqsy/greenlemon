<!DOCTYPE html>
<html lang="es">
	<head>
	    <title>Backend -  Super Technology SAC.</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	    <link href="<?php echo $this->BaseUrl('assets/admin/css/bootstrap.css'); ?>" rel="stylesheet" />
	    <link href="<?php echo $this->BaseUrl('assets/admin/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" />

	    <!-- jqgrid -->
	    <link href="<?php echo $this->BaseUrl('assets/admin/js/jqGrid/css/ui.jqgrid.css'); ?>" rel="stylesheet" />

	    <!-- jquery-ui CSS -->
		<link href="<?php echo $this->BaseUrl('assets/admin/js/jquery-ui/css/overcast/jquery-ui-1.10.4.custom.min.css'); ?>" rel="stylesheet">

	    <!-- CKEditor -->
	    <link href="<?php echo $this->BaseUrl('assets/admin/js/ckeditor/'); ?>" rel="stylesheet" />

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

		<style>
			.cke_dialog_ui_input_file{height:400px;}
		</style>
	</head>
	<body>

		<script>
			function base_url(url) { return '<?php echo $this->BaseUrl('index.php/admin/'); ?>' + url; } function redirect(href) { window.location.href = '<?php echo $this->BaseUrl('index.php/admin/'); ?>' + href; }
		</script>
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

		<div class="container" style="margin-top:110px; min-height: 640px">
			<nav class="navbar navbar-default" role="navigation" >
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-left">
			        <li><a href="">Inicio</a></li>
							<li><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=1'); ?>s">Paginas</a></li>
							<li><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=2'); ?>">Blogs</a></li>

			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

			<?php require_once $this->View; ?>

			<hr />
		</div>
		<div class="text-center">
			Super Technology SAC.  •  Av. Jorge Chavez 657 - Lima  •  <a href="atencionalcliente@supertechnology.com">atencionalcliente@supertechnology.com</a>  •  Telf. (01) 2614823 - (084) 233111
		</div>

	    <script src="<?php echo $this->BaseUrl('assets/admin/js/bootstrap.min.js'); ?>"></script>
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/ini.js'); ?>"></script>
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/jquery.form.js'); ?>"></script>
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/jqGrid/js/jquery.jqGrid.min.js'); ?>"></script>
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/jqGrid/js/i18n/grid.locale-es.js'); ?>"></script>

	    <!-- CKEditor -->
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/ckeditor/ckeditor.js'); ?>"></script>
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/ckeditor/adapters/jquery.js'); ?>"></script>
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/ckeditor/lang/es.js'); ?>"></script>

	    <!-- jQuery UI -->
	    <script src="<?php echo $this->BaseUrl('assets/admin/js/jquery-ui/js/jquery-ui-1.10.4.custom.min.js'); ?>"></script>
	</body>
</html>
