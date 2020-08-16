<div class="container">
    <div class="jumbotron">
        <h2>formulario registro</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=usuario&action=registrar" method="post">
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">CODIGO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="codigo">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombre">PASSWORD:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidos">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" >
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">APELLIDO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">CORREO:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="correo">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">TELEFONO:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="telefono">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">FECHA INGRESO:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="fechaingreso">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">TIPO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tipo">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">ESTADO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="estado">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" value="registrar">
                    </div>
                </div>
            </form>            
        </div>
    </div>
</div>




