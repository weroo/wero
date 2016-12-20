<div id="content">

		<div class="wrap">

			<div id="main" class="autoridades-single">

				<div id="breadcrumbs">
					<ul>
						<li><a href="/">Inicio</a></li>
						<li class="sep">/</li>
						<li> <a href="<?php echo base_url();?>Intra_mostrar/buscar/">Funcionario »</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>


				<div class="post">

<?php foreach($usuarios as $row){ ?>
					<div class="info">
						<div class="pic">
							<img src="<?php echo $row['IMAGEN'];?>">
							<div class="clearfix"></div>
						</div>
            <!--
						<ul>
							<li>
								<label>Twitter</label>
								<span><a href="#">@arroba</a></span>
							</li>
							<li>
								<label>Sitio Web</label>
								<span><a href="#">www.sitioweb.gob.cl</a></span>
							</li>
							<li>
								<label>Dirección</label>
								<span>Lorem ipsum, dolor sit amet</span>
							</li>
							<li>
								<label>Teléfono</label>
								<span>555 5555</span>
							</li>
							<li>
								<label><a href="#">Descarga Biografía</a></label>

							</li>
						</ul>
            -->
					</div>


					<div class="texto">
						<h4 class="title"><?php echo $row['NOMBRE_PERSONAL']; ?></h4>
						<h5><?php echo $row['NOMBRE_CARGO']; ?></h5>
            <h5><?php echo $row['NOMBRE_UNIDAD']; ?></h5>
            <h5><?php echo $row['NOMBRE_DEPTO']; ?></h5>
						<div class="contenido">
							<div class="datos tabla">
							<h6><b>Datos de contacto:</b></h6>
              <div>
                <span class="title"><b>Anexo:</b></span>
                <span class="dato"><?php echo $row['ANEXO']; ?></span>
              </div>
              <br>
              <div>
                <span class="title"><b>E-mail:</b></span>
                <span class="dato"><?php echo $row['MAIL']; ?></span>
              </div>

							<div class="clearfix"></div>
						</div>

						</div>
					</div>
          <?php } ?>
					<div class="clearfix"></div>
				</div>

			</div>

			<div id="sidebar">
				<?php if($cont_j>0){ ?>
        <div class="fotodeldia">
					<a href="#" class="foto">
						<h5><b>Superior:</b></h5>
					</a>

          <?php foreach($usuarios_j as $row2){ ?>
					<a href="<?php echo base_url();?>Intra_mostrar/buscar_esp/<?php echo $row2['ID']; ?>" class="foto">
						<div align="center"><img src="<?php echo $row2['IMAGEN']; ?>" style="margin-left: 20px;" alt="Foto Destacada"></div>
						<div class="clearfix"></div>
						<h5><?php echo $row2['NOMBRE_PERSONAL']; ?></h5>
						<p><?php echo $row2['NOMBRE_CARGO']; ?></p>
					</a>
					<div class="clearfix"></div>
          <?php } ?>


				</div>
				<?php } ?>

				<?php if($cont_s>0){ ?>
        <div class="fotodeldia">

					<a href="#" class="foto">
						<h5><b>Dependientes:</b></h5>
					</a>
          <?php foreach($usuarios_s as $row3){ ?>
					<a href="<?php echo base_url();?>Intra_mostrar/buscar_esp/<?php echo $row3['ID']; ?>" class="foto">

						<div align="center"><img src="<?php echo $row3['IMAGEN']; ?>" style="margin-left: 20px;" alt="Foto Destacada"></div>
						<div class="clearfix"></div>
						<h5><?php echo $row3['NOMBRE_PERSONAL']; ?></h5>
						<p><?php echo $row3['NOMBRE_CARGO']; ?></p>
					</a>
					<a href="#" class="foto">
						<br>
					</a>
          <?php } ?>
					<!--<a href="#" class="boton mas-fotos">+ Ver más <strong>Fotos Destacadas</strong></a>-->

				</div>
				<?php } ?>



				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>

		</div>

	</div>
