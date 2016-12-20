<!-- Content Wrapper. Contains page content -->


<section class="content-header">
    <h1>
      Modificar Cargo
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="#">Cargo</a></li>
      <li><a href="<?php echo base_url();?>Cargo/Gestionar_cargo">Gestión de Cargo</a></li>
  <li class="active">Modificar Cargo</li>
    </ol>
  </section>



	<section class="content">
   <div class="box box-warning">
            <!--<div class="box-header with-border">
              <h3 class="box-title"><b>Modificar Usuario</b></h3>
            </div>-->
            <?php echo form_open(base_url().'index.php/Institucion/modificar_institucion/'.$ID) ?>
              <div class="box-body" align="center">
                Cargo modificado exitosamente!

              </div>
              <!-- /.box-body -->
              <div class="box-footer" align="center">
                <a href="<?php echo base_url();?>Cargo/Gestionar_cargo" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
    </div>
	</section>
