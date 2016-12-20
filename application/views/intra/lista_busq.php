<div id="content">

		<div class="wrap">

			<div id="main" class="autoridades-lista">

				<div class="stream">

					<h5 class="titulo-seccion">Buscando: "<?php echo $q;?>"</h5>
          <?php foreach ($usuarios as $row){ ?>
					<div class="post tarjeta">
						<div class="pic">
							<a href="#">
								<img src="<?php echo $row['IMAGEN']; ?>">
							</a>
						</div>
						<div class="texto">
							<h4 class="title"><a href="#"><?php echo $row['NOMBRE_PERSONAL']; ?></a></h4>
							<h5 class="cargo"><?php echo $row['NOMBRE_UNIDAD']; ?>
								<br>
								<?php echo $row['NOMBRE_DEPTO']; ?>
							</h5>

							<h5 class="institucion"><?php echo $row['NOMBRE_INSTITUCION']; ?></h5>
							<div class="links">
								<a class="biografia" href="<?php echo base_url();?>Intra_mostrar/buscar_esp/<?php echo $row['ID']; ?>">Ver detalle</a>
								<!-- <a class="sitio" href="#">Ir al sitio web</a> -->
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
          <?php } ?>




				</div>

			</div>

      <div id="sidebar">




<div class="clearfix"></div>

<div class="buscar clearfix" style="margin: 0 auto 20px; font-family: 'gobCL', Tahoma, Verdana, Segoe, sans-serif;">

<form action="<?php echo base_url();?>Intra_mostrar/buscar/" method="get">
	<label for="query" style="display: block; clear: both; font-size: 18px; font-weight: 500; color: #475156; margin-bottom: 6px;">Busca Funcionario:</label>
	<input type="text" id="query" name="s" placeholder="Ej.: Juan Pérez ">
	<input type="submit" id="boton" value="Buscar">
</form>

</div>



    <div class="clearfix"></div>


</div>

			<div class="clearfix"></div>

		</div>

	</div>
