<div class="page-header">

</div>

<div class="col-md-4">
	<div class="col-md-12 column " style="margin-bottom: 30px">
	  <ul class="nav nav-pills nav-stacked">
		  <li><a href="<?php echo $this->BaseUrl('index.php/admin/inicio'); ?>"><span class="glyphicon glyphicon-chevron-right"></span> Home</a></li>
		  <li <?php echo $_REQUEST['tipo'] == 1 ?  'class="active"' : null ; ?> ><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=1'); ?>"><span class="glyphicon glyphicon-chevron-right"></span>Paginas</a></li>
		  <li <?php echo $_REQUEST['tipo'] == 2 ?  'class="active"' : null ; ?>><a href="<?php echo $this->BaseUrl('index.php/admin/entrada/listar/?tipo=2'); ?>"><span class="glyphicon glyphicon-chevron-right"></span>Publicaciones</a></li>
		</ul>
	</div>
</div>
<div class="col-md-8">

	<h1>
				<?php echo $_REQUEST['tipo'] == 1 ? 'Páginas' : 'Publicaciones'; ?>
				<a href="<?php echo $this->BaseUrl('index.php/admin/entrada/ver/?tipo=' . $_REQUEST['tipo']); ?>" class="pull-right btn btn-default">
						<i class="glyphicon glyphicon-plus"></i> Nuevo
				</a>
		</h1>
	<div class="well well-sm table-responsive">
	    <div id="products"><table id="list1"></table><div id="pager1"></div></div>
	</div>

</div>


<script>
    $(document).ready(function () {
        CargarEntradas();
    })

    function CargarEntradas() {
        var config = {
            colNames: ['Nombre', 'Lectura', 'Fecha'],
            colModel: [
                {
                    name: 'Nombre', index: 'Nombre', formatter: function (cellvalue, options, rowObject) {
                        return jqGridCreateLink('entrada/ver/?id=' + rowObject.id, cellvalue);
                    }
                },
                {name: 'Lectura', index: 'Lectura', width: 30},
                {name: 'Fecha', index: 'Fecha', width: 30}
            ]
        };

        jqGridStart('list1', 'pager1', 'entrada/listar/?tipo=<?php echo $_REQUEST['tipo']; ?>', config);
    }
</script>
