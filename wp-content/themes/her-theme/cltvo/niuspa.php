<?php include 'header.php';?>
	<!-- n i u s p a -->
	<div class="niuspa">
		<section class="niuspa__brand">
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-1">
						<div class="">
							<img class="niuspa-image" src="<?php echo THEMEURL ?>images/menu/niuspa.svg" alt="">
							<p>¡Olvídate de la celulitis, las arrugas, la flacidez y los gorditos!</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="niuspa__tratamientos">
			<div class="grid__row niuspa__tratamientos-bandattl">
				<div class="grid__container">
					<div class="grid__col-1-1">
						<h3 class="niuspa__tratamientos-bandattl--ttl">TRATAMIENTOS</h3>
					</div>
				</div>
			</div>
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-1">
						<div class="">

							<p>Hemos traido desde Suiza uno de los tratamientos más modernos y eficacez
								en la actualidad: AWT ondas acústicas.</p>
							<p>Contamos con más de 4 años de experiencia.</p>

							<div>
								<p>Slimming  / Modeldeado Corporal</p>
							</div>
							<div>
								<p>¡Bye Celulitis!</p>
							</div>
							<div>
								<p>Suavizado de arrugas</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="niuspa__mejora">
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-1">
						<h3 class="niuspa__mejora-ttl">ADEMÁS AYUDA A MEJORAR</h3>
						<div class="niuspa__mejora-list">
							<?php
								for ($i = 0; $i < 5; $i++) {
								print "<div>la elasticidad de la piel</div>\n";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="niuspa__precios">
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-1 niuspa__precios-content">
						<div class="flex-between">
							<h4>Precios por sesion</h4>
							<p>desde</p>
						</div>

						<table>
							<!-- <thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
							</tr>
							</thead> -->
							<tbody>
							<?php
							for ($i = 0; $i < 7; $i++) {
							    print "<tr>
											<td>Cara</td>
											<td>$1465</td>
										</tr>\n";
							}
							?>

							</tbody>
						</table>

						<div class="flex-between">
							<h4>Masajes</h4>
							<p>desde</p>
						</div>
						<table>
							<!-- <thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
							</tr>
							</thead> -->
							<tbody>
							<?php
							for ($i = 0; $i < 7; $i++) {
							    print "<tr>
											<td>Cara</td>
											<td>$1465</td>
										</tr>\n";
							}
							?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="grid__row">
				<div class="grid__container">
					<div class="grid__col-1-1">
						<div>
							FOOTER
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php include 'footer.php';?>
