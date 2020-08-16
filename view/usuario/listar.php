<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Edicion de Usuarios</h2>
    </div>
    <div class="container">
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
                            <a href="index.php?controller=usuario&action=editar&id=<?=$usuario->getId();?>" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>    
</div>


