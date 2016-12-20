<!-- Content Wrapper. Contains page content -->


  <section class="content-header">
      <h1>
        Gestión de Cargo
        <small>Ingreso, modificación y eliminación de Cargo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Cargo</a></li>
        <li class="active">Gestión de Cargo</li>
      </ol>
    </section>


<section class="content">
	<div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title"><b>Gestión de Usuarios</b></h3>
			  <br/>
			  <br/>-->
              <a href="<?php echo base_url();?>Cargo/ingresar_cargo"><button type="button" class="btn btn-block btn-success" style="width:200px;"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Agregar Nuevo Cargo</button></a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" name="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>

                  <!--<th align="center">&nbsp;&nbsp;Modificar</th>-->
                  <th align="center">&nbsp;&nbsp;Acción</th>
                </tr>
                </thead>
                <tbody>

                 <?php foreach ($cargo as $row): ?>
                <tr>
                  <td><?php echo $row['ID'] ?></td>
                  <td><?php echo $row['NOMBRE'] ?></td>

                  <td align="center"><a title="Modificar Usuario" href="<?php echo base_url();?>Cargo/modificar_cargo/<?php echo $row['ID'] ?>"><i class="fa fa-edit"></i><!--Modificar--></a><!--</td>-->
                  &nbsp;&nbsp;
				  <!--<td align="center">--><a title="Eliminar Usuario" href="<?php echo base_url();?>Cargo/eliminar_cargo/<?php echo $row['ID'] ?>"><i class="fa fa-remove"></i><!--Eliminar--></a></td>
                </tr>
                <?php endforeach ?>

				</tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>




</section>
  <!-- /.content-wrapper -->
