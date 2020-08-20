<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Ordenes de Compras</h2>
        
        
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NombreComprador</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>TC</th>
                    <th>Articulo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Artesano</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($compras as $compra): ?>
                    <tr>
                        <th><?=$compra->getId();?></th>
                        <th><?=$compra->getNombrecomprador();?></th>
                        <th><?=$compra->getTelefono();?></th>
                        <th><?=$compra->getDireccion();?></th>
                        <th><?=$compra->getTc();?></th>
                        <th><?=$compra->getNombrearticulo();?></th>
                        <th><?=$compra->getDescripcion();?></th>
                        <th><?=$compra->getPrecio();?></th>                       
                        <th><?=$compra->getIdartesano();?></th>

                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>    
</div>


 
