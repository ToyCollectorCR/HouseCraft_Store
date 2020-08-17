<div class="container">
    <div class="jumbotron">
        <h2>Registro De Categorías</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=categoria&action=registrar" method="post">
                <div class="form-group">
                    <label class=" col-sm-2 control-label">CODIGO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="codigo">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label">DESCRIPCION:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidos">FECHA CREACION:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="fechacreacion" >
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




