<div class="row">
	<div class="col-md-12">
	          <!-- Horizontal Form -->
	          <div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title"><?php echo "Usuario:".$this->session->userdata('s_usuario');?></h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form class="form-horizontal" action="<?php echo base_url();?>CPersona/actualizarDatos" method="POST">
	              <div class="box-body">
	                
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
	                  <div class="col-sm-10">
	                    <input type="text" name="txtNombre" class="form-control" id="inputEmail3" placeholder="Ingrese su Nombre">
	                  </div>
	                </div>

	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido paterno</label>
	                  <div class="col-sm-10">
	                    <input type="text" name="txtApePaterno" class="form-control" id="inputEmail3" placeholder="Ingrese su apellido">
	                  </div>
	                </div>

	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido materno</label>
	                  <div class="col-sm-10">
	                    <input type="text" name="txtApeMaterno" class="form-control" id="inputEmail3" placeholder="Ingrese su apellido">
	                  </div>
	                </div>

	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	                  <div class="col-sm-10">
	                    <input type="email" name="txtEmail" class="form-control" id="inputEmail3" placeholder="Ingrese su email">
	                  </div>
	                </div>

	              	<div class="box-footer">
	              		<div class="col-sm-10 pull-right">
		                	<button type="submit" class="btn btn-primary">Actualizar</button>
		                </div>
	              	</div>



	              </div>
	              <!-- /.box-body -->
	              
	              <!-- /.box-footer -->
	            </form>




	             <form class="form-horizontal" action="<?php echo base_url();?>CPersona/eliminarPersona" method="POST" >
	              <div class="box-body">
	                
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
	                  <div class="col-sm-10">
	                    <input type="text" name="txtIdPersona" class="form-control" id="inputEmail3" placeholder="Ingrese ID">
	                  </div>
	                </div>

	              	<div class="box-footer">
	              		<div class="col-sm-10 pull-right">
		                	<button type="submit" class="btn btn-danger">Eliminar</button>
		                </div>
	              	</div>


	              	
	              </div>
	              <!-- /.box-body -->
	              
	              <!-- /.box-footer -->
	            </form>
	          </div>
	          <!-- /.box -->
	          
	          <!-- /.box -->
	    </div>
</div>
