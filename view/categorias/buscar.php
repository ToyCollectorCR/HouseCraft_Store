<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Busqueda de Usuarios</h2>
    </div>
    <div class="container">
        
        <form action="index.php?controller=usuario&action=busqueda" method="post">
            <div class="form-group">
                    <label class=" col-sm-2 control-label">Buscar Se Hace Por Nombre, Apellido O Tipo</label>
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
                    <th>Password</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>FechaIngreso</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <th><?=$usuario->getId();?></th>
                        <th><?=$usuario->getCodigo();?></th>
                        <th><?=$usuario->getPassword();?></th>
                        <th><?=$usuario->getNombre();?></th>
                        <th><?=$usuario->getApellido();?></th>
                        <th><?=$usuario->getCorreo();?></th>
                        <th><?=$usuario->getTelefono();?></th>
                        <th><?=$usuario->getFechaingreso();?></th>
                        <th><?=$usuario->getTipo();?></th>
                        <th><?=$usuario->getEstado();?></th>
                        
                        <th>

                        </th>
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>    
</div>




