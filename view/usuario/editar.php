<div class="container">
    <div class="jumbotron">
        <h2>formulario registro</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=usuario&action=guardarCambios" method="post">                    
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" readonly="" value="<?=$usuario->getId();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombre">CODIGO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="codigo" value="<?=$usuario->getCodigo();?>">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidos">PASSWORD:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password" value="<?=$usuario->getPassword();?>">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" value="<?=$usuario->getNombre();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">APELLIDO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="apellido" value="<?=$usuario->getApellido();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">CORREO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="correo" value="<?=$usuario->getCorreo();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">TELEFONO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefono" value="<?=$usuario->getTelefono();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">INGRESO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="fechaingreso" value="<?=$usuario->getFechaingreso();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">TIPO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tipo" value="<?=$usuario->getTipo();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">ESTADO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="estado" value="<?=$usuario->getEstado();?>">
                    </div>
                </div>
                                
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" value="actualizar">
                    </div>
                </div>
            </form>            
        </div>
    </div>    
</div>



