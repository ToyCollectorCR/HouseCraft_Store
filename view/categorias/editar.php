<div class="container">
    <div class="jumbotron">
        <h2>Edicion de Categorias</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=categoria&action=guardarCambios" method="post">                    
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" readonly="" value="<?=$categoria->getId();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombre">CODIGO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="codigo" value="<?=$categoria->getCodigo();?>">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidos">DESCRIPCION:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" value="<?=$categoria->getDescripcion();?>">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">FECHA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="fechacreacion" value="<?=$categoria->getFechacreacion();?>">
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



