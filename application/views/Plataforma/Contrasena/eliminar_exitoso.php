<!-- Content Wrapper. Contains page content -->


	<section class="content-header">
      <h1>
        Eliminar Usuario
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Usuarios</a></li>
        <li><a href="<?php echo base_url();?>Usuario/gestionar_usuario">Gestión de Usuarios</a></li>
		 <li class="active">Eliminar Usuario</li>
      </ol>
    </section>


	<section class="content">
   <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Eliminar Usuario</b></h3>
            </div>
            <?php echo form_open(base_url().'index.php/Intranet/eliminar_usuario/'.$RUN) ?>
              <div class="box-body" align="center">
                Usuario eliminado exitosamente!

              </div>
              <!-- /.box-body -->
              <div class="box-footer" align="center">
                <a href="<?php echo base_url();?>Usuario/gestionar_usuario" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
          </div>
	</section>
