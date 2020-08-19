<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Busqueda de Articulos</h2>
    </div>
    <div class="container">
        
        <form action="index.php?controller=articulo&action=busqueda" method="post">
            <div class="form-group">
                    <label class=" col-sm-2 control-label">Buscar Por Nombre, Apellido O Tipo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar" value="">
                    </div>
            </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" name="buscar" value="Buscar">
                    </div>
                </div>
        </form>
        
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Estado</th>
                 
                </tr>
            </thead>
            <tbody>
                 <?php foreach($articulos as $articulo): ?>
                    <tr>
                        <th><?=$articulo->getId();?></th>
                        <th><?=$articulo->getCodigo();?></th>
                        <th><?=$articulo->getNombrearticulo();?></th>
                        <th><?=$articulo->getDescripcion();?></th>
                        <th><?=$articulo->getCategoria();?></th>
                        <th><?=$articulo->getPrecio();?></th>
                        <th><img height="150px" src="data:image/jpg;base64,<?php echo base64_encode($articulo->getImagen());?>"/></th>
                        <th><?=$articulo->getEstado();?></th>
                        
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>    
</div>




