// INICIAMOS UNA FUNCION DE JQUERY

$(document).ready(function() {

	// creamos una variable formulario donde selecciona la etiqueta <form> de manera que podamos manipularlo
	var formulario = $("form");

	// creamos un evento submit, es decir, cuando el formulario envie datos (submit) realizará dicha acción
	formulario.submit(function(event) {
		// detener el event, es decir cuando ocurra el envento submit "enviar" evitar que envie datos
		// de esta forma no va a redimensionar a otra pagina
		event.preventDefault();

		// creamos una variable y con la funcion serialize() recogemos todos los datos del formulario
		var datosFormulario = formulario.serialize();
		// la url o archivo que recibira los datos
		var action = "insert.php";
		$.ajax({
			url: action,
			type: 'GET', // Tipo GET o POST, si resolviste el ejercicio 2 ya sabes la diferencia entre ambos
			data: datosFormulario,
		})

		// si, el sevidor te da respuesta ya sea negativa o positiva se ejecuta
		.done(function(respuesta) {

			// Te muestra un mensaje, presiona F12 y posiciónate en CONSOLA para ver el mensaje
			console.log("El servidor te respondio dice: ");
			console.log(respuesta);
		})
		// si, el sevidor te NO te da respuesta alguna se ejecuta
		.fail(function(respuesta) {

			// Te muestra un mensaje, presiona F12 y posiciónate en CONSOLA para ver el mensaje
			console.log("El servidor NO te respondio dice error: ");
			console.log(respuesta);
		})
		// si, ya termino el proceso, aun si el servidor te dio o no respuesta se ejecuta
		.always(function() {

			// Te muestra un mensaje, presiona F12 y posiciónate en CONSOLA para ver el mensaje
			console.log("Petición completada.");
		});


	});
});