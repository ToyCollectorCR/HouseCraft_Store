<div class="container">
    <div class="jumbotron">
        <h2>Confirmar Compra</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=compras&action=guardarCompra" method="post" enctype="multipart/form-data">                    
                
                
                
                 <div class="form-group">
                    <label class=" col-sm-2 control-label">Ingrese Su Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombrecomprador">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label">Telefono:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefono">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class=" col-sm-2 control-label">Direccion:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="direccion" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label">Número Tarjeta de Credito:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tc">
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" readonly="" value="<?=$articulo->getId();?>">
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
                    <label class=" col-sm-2 control-label" for="txt_edad">PRECIO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly="" name="precio" value="<?=$articulo->getPrecio();?>">
                    </div>
                </div>
                
                                
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  style="visibility:hidden"  readonly="" name="idartesano" value="<?=$articulo->getIdartesano();?>">
                    </div>
                </div>
                
      
                                
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" value="comprar">
                    </div>
                </div>
            </form>            
        </div>
    </div>    
</div>
