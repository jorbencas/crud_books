jQuery.fn.LlenarLimpiarCampos = function(){
	this.each(function(){
		$(".ISBN").attr("value","Introduzca el ISBN");
		$(".ISBN").focus(function(){
			if($(".ISBN").attr("value")=="Introduzca el ISBN"){
			$(".ISBN").attr("value","");
			}
		});
		$(".ISBN").blur(function(){
			if($(".ISBN").attr("value")==""){
		   $(".ISBN").attr("value","Introduzca el ISBN");
			}
		});
		$(".titulo").attr("value","Introduzca el titulo");
		$(".titulo").focus(function(){
			if($(".titulo").attr("value")=="Introduzca el titulo"){
			$(".titulo").attr("value","");
			}
		});
		$(".titulo").blur(function(){
			if($(".titulo").attr("value")==""){
		   $(".titulo").attr("value","Introduzca el titulo");
			}
		});
		$(".genero").attr("value","Introduzca el genero");
		$(".genero").focus(function(){
			if($(".genero").attr("value")=="Introduzca el genero"){
			$(".genero").attr("value","");
			}
		});
		$(".genero").blur(function(){
			if($(".genero").attr("value")==""){
		   $(".genero").attr("value","Introduzca el genero");
			}
		});
		$(".descripcion").attr("value","Introduzca la descripcion");
		$(".descripcion").focus(function(){
			if($(".descripcion").attr("value")=="Introduzca la descripcion"){
			$(".descripcion").attr("value","");
			}
		});
		$(".descripcion").blur(function(){
			if($(".descripcion").attr("value")==""){
		   $(".descripcion").attr("value","Introduzca la descripcion");
			}
		});
	 $(".autor").attr("value","Introduzca el nombre del autor");
	 $(".autor").focus(function(){
		if($(".autor").attr("value")=="Introduzca el nombre del autor"){
		$(".autor").attr("value","");
		}
	});
	$(".autor").blur(function(){
		if($(".autor").attr("value")==""){
		 $(".autor").attr("value","Introduzca el nombre del autor");
		}
	});
	$(".fecha_de_publicacion").attr("value","Introduzca la fecha de publicacion");
	$(".fecha_de_publicacion").focus(function(){
		if($(".fecha_de_publicacion").attr("value")=="Introduzca la fecha de publicacion"){
			$(".fecha_de_publicacion").attr("value","");
		}
	});
	$(".fecha_de_publicacion").blur(function(){
		if($(".fecha_de_publicacion").attr("value")==""){
		 $(".fecha_de_publicacion").attr("value","Introduzca la fecha de publicacion");
		}
	});
});
	return this;
};

function validate_tittle(titulo){
  if (titulo.length > 3) {
          var regexp = /^[a-zA-Z0-9]*$/;
          return regexp.test(titulo);
      }
      return false;
}

function validate_genere(genero){
  if (genero.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(genero);
    }
    return false;
}

function validate_author(autor){
  if (autor.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(autor);
    }
    return false;
}

function validate_description(descripcion){
  if (descripcion.length > 20) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(descripcion);
    }
    return false;
}


function validate_books(){
  var result = true;

	//var isbn = document.getElementById('ISBN').value;
  var titulo = document.getElementById('titulo').value;
  var genero = document.getElementById('genero').value;
  var autor = document.getElementById('autor').value;
  var descripcion = document.getElementById('descripcion').value;

	//var  v_ISBN = validate_ISBN(isbn);
  var  v_titulo = validate_tittle(titulo);
  var  v_genero = validate_genere(genero);
  var  v_autor = validate_author(autor);
  var  v_descripcion = validate_description(descripcion);

	/*if (!v_ISBN) {
				document.getElementById('e_ISBN').innerHTML =  "Mínimo 5 NUMEROS para el ISBN";
				result = false;
		} else {
				document.getElementById('e_ISBN').innerHTML = "";
		}*/

	if (!v_titulo) {
        document.getElementById('e_titulo').innerHTML =  "Mínimo 3 carácteres para el titulo";
        result = false;
    } else {
        document.getElementById('e_titulo').innerHTML = "";
    }

  if (!v_genero) {
        document.getElementById('e_genero').innerHTML = "Ingrese el genero correcto";
        result = false;
    } else {
        document.getElementById('e_genero').innerHTML = "";
    }

  if (!v_autor) {
        document.getElementById('e_autor').innerHTML = "Debes de introducir el nombre del autor";
        result = false;
    } else {
        document.getElementById('e_autor').innerHTML = "";
    }

  if (!v_descripcion) {
        document.getElementById('e_descripcion').innerHTML = "Mínimo 20 carácteres para el mensaje";
        result = false;
    } else {
        document.getElementById('e_descripcion').innerHTML = "";
    }

return result;
}

$(document).ready(function () {

	$(this).LlenarLimpiarCampos();
	//console.log(this);

  $('#fecha_de_publicacion').datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    yearRange: '0:+5',
    minDate: 0,
    onSelect: function(selectedDate) {
      var dataString = 'date='+selectedDate;
      //alert(dataString);
    }
  });

 $('#form').attr('onsubmit', 'return validate_books();');
/*

  */
});
