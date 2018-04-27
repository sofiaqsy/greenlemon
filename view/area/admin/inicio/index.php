<div class="page-header">
</div>

<div class="col-md-4">
	<div class="col-md-12 column " style="margin-bottom: 30px">
	  <ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Home</a></li>
		  <li><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=1'); ?>"><span class="glyphicon glyphicon-chevron-right"></span>Paginas</a></li>
		  <li><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=2'); ?>"><span class="glyphicon glyphicon-chevron-right"></span>Publicaciones</a></li>
		</ul>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-default">
	  <div class="panel-heading">Entradas</div>
	  <ul class="list-group">
			<li class="list-group-item"><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=1'); ?>">Páginas <span class="badge pull-right"><?php echo $this->Attach['publicaciones'][0]['COUNT(*)']; ?> publicaciones</span></a></li>
	    <li class="list-group-item"><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=2'); ?>">Publicaciones<span class="badge pull-right"><?php echo $this->Attach['publicaciones'][1]['COUNT(*)'];?> publicaciones</span></a></li>
	  </ul>
	  <div class="panel-heading">Publicaciones populares</div>
	  <ul class="list-group">
	    <li class="list-group-item"><a href=" <?php echo $this->BaseUrl('index.php/admin/entrada/ver/?id='.$this->Attach['vistas'][0]['id']) ;?> "><?php echo $this->Attach['vistas'][0]['Nombre'];?> </a> <span class="badge pull-right"><?php echo $this->Attach['vistas'][0]['Lectura'];?> vistas</span></li>
	    <li class="list-group-item"><a href=" <?php echo $this->BaseUrl('index.php/admin/entrada/ver/?id='.$this->Attach['vistas'][1]['id']) ;?> "><?php echo $this->Attach['vistas'][1]['Nombre'];?> </a> <span class="badge pull-right"><?php echo $this->Attach['vistas'][1]['Lectura'];?> vistas</span></li>
	  </ul>
	</div>
</div>

<style media="screen">

</style>
