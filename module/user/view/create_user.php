<div class="formulario">
<h1>Libro Nuevo</h1>
	<form method="post" name="form" id="form" class="contacto"  action="index.php?page=controller_user&op=create">
		<div>
			<label for="ISBN">ISBN: </label>
			<input type='text' name="ISBN" id="ISBN" class="ISBN" value="<?php @$_POST['ISBN'] ?>">
			<span id="e_ISBN" class="error">
				<?php
					echo $error['ISBN'];
					?>
			</span>
		</div>
		<div>
			<label for="titulo">Titulo:</label>
			<input type='text' name="titulo" id="titulo" class="titulo" value="<?php @$_POST['titulo'] ?>">
			<span id="e_titulo" class="error">
				<?php
					echo $error['titulo'];
					?>
			</span>
		</div>
		<div>
			<label for="genero">Genero:</label>
			<input type='text' name="genero" class="genero" id="genero" value="<?php @$_POST['genero'] ?>">
			<span id="e_genero" class="error" >
				<?php
					echo $error['genero'];
					?>
			</span>
		</div>
		<div>
			<label for="tipo_de_tapa">Tipo de tapa: </label>
				<input type="radio" name="tipo_de_tapa", id="tipo_de_tapa" class="tipo_de_tapa" value="Dura">Tapa dura</option>
				<input type="radio" name="tipo_de_tapa", id="tipo_de_tapa" class="tipo_de_tapa" value="Blanda">Tapa Blanda</option>
		</div>
		<div>
			<label for="autor">Autor:</label>
			<input type='text' name="autor" id="autor" class="autor" value="<?php @$_POST['autor'] ?>">
			<span id="e_autor" class="error">
				<?php
					echo $error['autor'];
					?>
			</span>
		</div>
		<div>
			<label for="descripcion">Descripción:</label>
			<input type='text' name="descripcion" class="descripcion" id="descripcion" value="<?php @$_POST['descripcion'] ?>">
			<span id="e_descripcion" class="error" >
				<?php
					echo $error['descripcion'];
					?>
			</span>
		</div>
		<div>
			<label>idiomes:</label>
			<select name="idioma", id="idioma" class="idioma">
				<option value="Espanol">Español</option>
				<option value="Ingles">Ingles</option>
				<option value="Frances">Frances</option>
				<option value="Aleman">Aleman</option>
				<option value="Portugues">Portugues</option>
				<option value="Valenciano">Valenciano</option>
			</select>
		</div>
		<div>
			<label for="fecha_de_publicacion" >Fecha_de_publicacion:</label>
			<input type='datepicker' name="fecha_de_publicacion" class="fecha_de_publicacion" id="fecha_de_publicacion" value="">
			<span class="fecha_de_publicacion"></span>
		</div>

		<div class="demo">
			<input type='submit' name="boton" class="boton" value='Envia'>
		</div>
	</form>
	</div>
