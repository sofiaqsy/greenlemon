
<div class="col-md-3">

  <h1>titulo </h1>
  <form style="margin-left:-15px" class="" action="<?php echo $this->BaseUrl('index.php/inicio/busqueda'); ?>" method="POST">
    <div class="form-group">
      <input type="text" class="form-control" name="buscar"  value="<?php echo isset($this->Attach['buscar']) ? $this->Attach['buscar'] : NULl   ?>"placeholder="¿Qué está buscando?">
      <button type="submit" data-ajax="true" class="btn btn-default">Buscar</button>

    </div>
  </form>
  </div>
  <div>
  <h1>categoria </h1>
  <form style="margin-left:-15px" class="navbar-form navbar-right" action="<?php echo $this->BaseUrl('index.php/inicio/BusquedaCate'); ?>" method="POST">
    <div class="form-group">
      <select name="buscarcate" id="" class="form-control">
        <option value="0">Seleccionar</option>
        <?php foreach($this->Attach['data2'] as $k => $e): ?>
          <option
            value=<?php echo $e->id; ?>
            <?php echo isset($this->Attach['buscarcate']) ? ($this->Attach['buscarcate']==$e->id)?'selected':'' : ''?>
          >
            <?php echo $e->Nombre; ?>
          </option>
        <?php endforeach; ?>
      </select>
      <button type="submit" data-ajax="true" class="btn btn-default">Buscar</button>
    </div>
  </form>
  </div>
</div>

<div class="col-md-9">
  <div id="news" class="row">
    <?php if(!empty($this->Attach['data'])) : ?>
     <?php foreach($this->Attach['data'] as $k => $e): ?>
    	<div class="item col-md-4 col-sm-6 col-xs-12" style="cursor:pointer;" data-id="<?php echo $e->id; ?>" data-nombre="<?php echo htmlspecialchars($e->Nombre); ?>">
    		<div class="well well-sm">
    			<img src="<?php echo $this->BaseUrl('uploads/' . $e->Imagen); ?>" class="img-thumbnail" />
    			<h3><?php echo $e->Nombre; ?></h3>
    			<p><?php echo $e->Descripcion; ?></p>
    		</div>
    	</div>
     <?php endforeach; ?>
   <?php else : ?>
     <div class="alert alert-default" role="alert" style="margin-top:66px">
     <strong>Oh!</strong> <a href="#" class="alert-link">Error</a> No se encontraron datos
     </div>
   <?php endif; ?>
  </div>
</div>

<script>
	$(document).ready(function(){
		var container = document.querySelector('#news');
		var msnry = new Masonry( container, {  // options
		  itemSelector: '.item'
		});

		$("#news .item").click(function(){
			CargarEntrada($(this).data('nombre'), $(this).data('id'));
		})
	})

	function CargarEntrada(titulo, id)
	{
		AjaxPopupModal('mEntrada', titulo, 'inicio/entrada/?id=' + id);
	}
</script>
