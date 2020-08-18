<div class="container">
    <div class="jumbotron">
        <h2>Edicion del Estado Del Articulo</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=articulo&action=guardarCambios" method="post" enctype="multipart/form-data">                    
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" readonly="" value="<?=$articulo->getId();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombre">CODIGO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="codigo" value="<?=$articulo->getCodigo();?>">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidos">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="nombrearticulo" value="<?=$articulo->getNombrearticulo();?>">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">DESCRIPCION:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="descripcion" value="<?=$articulo->getDescripcion();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">CATEGORIA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="categoria" value="<?=$articulo->getCategoria();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">PRECIO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="precio" value="<?=$articulo->getPrecio();?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">IMAGEN:</label>
                    <div class="col-sm-10">
                        <input type="file"  required="" class="form-control" name="imagen">
                   
                       
                        
                    </div>
                </div>
                              
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">ESTADO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="estado" value="<?=$articulo->getEstado();?>">
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



