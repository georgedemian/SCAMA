$(document).ready(function() {

	$('.error').hide();

	$("#enviar-btn").click(function() {

		//Obtenemos el valor del campo nombre
		var name = $("input#name").val();

		//Validamos el campo nombre, simplemente miramos que no esté vacío
		if (name == "") {
			$("label#name_error").show();
			$("input#name").focus();
			return false;
		}

		//Obtenemos el valor del campo password
		var password = $("#password1").val();
		alert($("#password1").val());

		//Validamos el campo password, simplemente miramos que no esté vacío
		if (password == "") {
			$("label#pass_error").show();
			alert(password);
			$("input#password1").focus();
			return false;
		}

		var email = $("input#email").val();

			if (email == "") {
			$("label#email_error").show();
			$("input#email").focus();
			return false;
		}

		//Construimos la variable que se guardará en el data del Ajax para pasar al archivo php que procesará los datos
		var dataString = 'name=' + name + '&password=' + password + '&email='+email;

		$.ajax({
			type: "POST",
			url: "php/registro.php",
			data: dataString,
			success: function() {
		    	$('.content').html("<div id='message'></div>");
		        $('.content').html("<h2>Tus datos han sido guardados correctamente!</h2>");
		        
		    }
		});
		return false;
	});
});


	$("input#name").select().focus();
var pass1 = $('[name=pass1]');
	var pass2 = $('[name=pass2]');
	var confirmacion = "Las contraseñas si coinciden";
	var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
	var negacion = "No coinciden las contraseñas";
	var vacio = "La contraseña no puede estar vacía";
	//oculto por defecto el elemento span
	var span = $('<span></span>').insertAfter(pass2);
	span.hide();
	//función que comprueba las dos contraseñas
	function coincidePassword(){
	var valor1 = pass1.val();
	var valor2 = pass2.val();
	//muestro el span
	span.show().removeClass();
	//condiciones dentro de la función
	if(valor1 != valor2){
	span.text(negacion).addClass('negacion');	
	}
	if(valor1.length==0 || valor1==""){
	span.text(vacio).addClass('negacion');	
	}
	if(valor1.length<6 || valor1.length>10){
	span.text(longitud).addClass('negacion');
	}
	if(valor1.length!=0 && valor1==valor2){
	span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
	}
	}
	//ejecuto la función al soltar la tecla
	pass2.keyup(function(){



});


