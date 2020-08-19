<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Listado de Productos</h2>
        
        
    </div>
    <div class="container">
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
                    <th>Accciones</th>
                    
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
                        <th>
                            <a href="index.php?controller=compras&action=comprar&id=<?=$articulo->getId();?>" class="btn btn-primary">Comprar</a>
                            <?php if(isset($_SESSION['usuarioLogueado'])): ?>
                            <a href="index.php?controller=articulo&action=editar&id=<?=$articulo->getId();?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?controller=articulo&action=eliminaArticulo&id=<?=$articulo->getId();?>" class="btn btn-danger">Eliminar</a>
                            <?php endif;?>
                        </th>
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>    
</div>
