<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Listado De Categorias</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $categoria): ?>
                    <tr>
                        <th><?=$categoria->getId();?></th>
                        <th><?=$categoria->getCodigo();?></th>
                        <th><?=$categoria->getDescripcion();?></th>
                        <th><?=$categoria->getFechacreacion();?></th>
                        
                         <th>
                            <a href="index.php?controller=categoria&action=editar&id=<?=$categoria->getId();?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?controller=categoria&action=eliminaCategoria&id=<?=$categoria->getId();?>" class="btn btn-danger">Eliminar</a>
                        </th>
                        
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>    
</div>


