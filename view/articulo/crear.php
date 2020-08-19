<div class="container">
    <div class="jumbotron">
        <h2>Ingreso de Articulos</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=articulo&action=registrar" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label">CODIGO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="codigo">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label">DESCRIPCION:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label">CATEGORIA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="categoria">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label">PRECIO:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="precio">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">IMAGEN:</label>
                    <div class="col-sm-10">
                        <input type="file" required="" name="imagen">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label">ESTADO:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="estado">
                            <option>Activo</option>
                            <option>Inactivo</option>
                            <option>Agotado</option>
                         </select>
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

