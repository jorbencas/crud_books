<div class="formulario">
<h1>Actualizado libro</h1>
	<form method="post" name="form" id="form" class="contacto"  action="index.php?page=controller_user&op=update">
		<div>
			<label for="ISBN">ISBN: </label>
			<input type='text' name="ISBN" id="ISBN" value="<?php echo $user['ISBN']?>" readonly>
			<span id="e_ISBN" class="error">
				<?php
					echo $error['ISBN'];
					?>
			</span>
		</div>
		<div>
			<label for="titulo" >Titulo:</label>
			<input type='text' name="titulo" id="titulo" value="<?php echo $user['titulo']?>">
			<span id="e_titulo" class="error">
				<?php
					echo $error['titulo'];
					?>
			</span>
		</div>
		<div>
			<label for="genero" >Genero:</label>
			<input type='text' name="genero" id="genero" value="<?php echo $user['genero']?>">
			<span id="e_genero" class="error" >
				<?php
					echo $error['genero'];
					?>
			</span>
		</div>
		<div>
			<label for="tipo_de_tapa" >Tipo de tapa: </label>
				<?php if ($user['tipo_de_tapa']==="Dura") {  ?>
				<input type="radio" name="tipo_de_tapa", id="tipo_de_tapa" class="tipo_de_tapa" value="Dura" checked="si">Tapa dura</option>
				<input type="radio" name="tipo_de_tapa", id="tipo_de_tapa" class="tipo_de_tapa" value="Blanda">Tapa Blanda</option>
			<?php	} else if ($user['tipo_de_tapa']==="Blanda") { ?>
				<input type="radio" name="tipo_de_tapa", id="tipo_de_tapa" class="tipo_de_tapa" value="Dura">Tapa dura</option>
				<input type="radio" name="tipo_de_tapa", id="tipo_de_tapa" class="tipo_de_tapa" value="Blanda" checked="si">Tapa Blanda</option>
				<?php } ?>
		</div>
		<div>
			<label for="autor">Autor:</label>
			<input type='text' name="autor" id="autor" value="<?php echo $user['autor']?>">
			<span id="e_autor" class="error">
				<?php
					echo $error['autor'];
					?>
			</span>
		</div>
		<div>
			<label for="descripcion">Descripción:</label>
			<input type='text' name="descripcion" id="descripcion" value="<?php echo $user['descripcion']?>">
			<span id="e_descripcion" class="error" >
				<?php
					echo $error['descripcion'];
					?>
			</span>
		</div>

		<div>
			<label>idiomes:</label>
	<?php
 if  ($user['idioma']==="Espanol"){
	 ?>

			<select name="idioma", id="idioma" class="idioma">
				<option value="Espanol" selected>Español</option>
				<option value="Ingles">Ingles</option>
				<option value="Frances">Frances</option>
				<option value="Aleman">Aleman</option>
				<option value="Portugues">Portugues</option>
				<option value="Valenciano">Valenciano</option>
			</select>
			<?php

}else if ($user['idioma']==="Ingles"){

	 ?>
	 <select name="idioma", id="idioma" class="idioma">
		 <option value="Espanol">Español</option>
		 <option value="Ingles" selected>Ingles</option>
		 <option value="Frances">Frances</option>
		 <option value="Aleman">Aleman</option>
		 <option value="Portugues">Portugues</option>
		 <option value="Valenciano">Valenciano</option>
	 </select>
	 <?php

}else if   ($user['idioma']==="Frances"){

	 ?>
	 <select name="idioma", id="idioma" class="idioma">
		 <option value="Espanol">Español</option>
		 <option value="Ingles">Ingles</option>
		 <option value="Frances" selected>Frances</option>
		 <option value="Aleman">Aleman</option>
		 <option value="Portugues">Portugues</option>
		 <option value="Valenciano">Valenciano</option>
	 </select>
	 <?php

}else if   ($user['idioma']==="Aleman"){

	 ?>
	 <select name="idioma", id="idioma" class="idioma">
		 <option value="Espanol">Español</option>
		 <option value="Ingles">Ingles</option>
		 <option value="Frances">Frances</option>
		 <option value="Aleman" selected>Aleman</option>
		 <option value="Portugues">Portugues</option>
		 <option value="Valenciano">Valenciano</option>
	 </select>
	 <?php

}else if   ($user['idioma']==="Portugues"){

	 ?>
	 <select name="idioma", id="idioma" class="idioma">
		 <option value="Espanol">Español</option>
		 <option value="Ingles">Ingles</option>
		 <option value="Frances">Frances</option>
		 <option value="Aleman">Aleman</option>
		 <option value="Portugues" selected>Portugues</option>
		 <option value="Valenciano">Valenciano</option>
	 </select>
	 <?php

}else if ($user['idioma']==="Valenciano"){

	 ?>
	 <select name="idioma", id="idioma" class="idioma">
		 <option value="Espanol">Español</option>
		 <option value="Ingles">Ingles</option>
		 <option value="Frances">Frances</option>
		 <option value="Aleman">Aleman</option>
		 <option value="Portugues">Portugues</option>
		 <option value="Valenciano" selected>Valenciano</option>
	 </select>
	 <?php
 }
 ?>
	</div>
	<div>
		<label for="fecha_de_publicacion" >Fecha_de_publicacion:</label>
		<input type='datepicker' name="fecha_de_publicacion" id="fecha_de_publicacion" value="<?php echo $user['fecha_de_publicacion']?>">
		<span class="fecha_de_publicacion"></span>
	</div>
	<div class="demo"><input type='submit' name="boton" class="boton" value='Envia'></div>
	</form>
	</div>
