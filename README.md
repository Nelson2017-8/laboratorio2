Bienvenidos todos

Esta es la serie de ejercicios en PHP y Mysql. Esta serie de ejercicios la hago para que sean capaces de valerse por sí mismo en el área de Programación II y base de datos

---------------------------------------------------------------------

Ejercicio 1 (resuelto):

Teniendo una tabla en MySQL, crear un formulario en html para insertar datos en nuestra base de datos mediante PHP. Donde “dbprueba” esta compuesta de la siguiente forma.

dbprueba  > tusuario
			/ Nombre    / Tipo     / Longitud / Indice
			/ cedula    / varchar  /   20     /  primario
			/ nombre    / varchar  /   50     /  primario
			/ apelido   / varchar  /   50     /  primario
			/ sexo      / varchar  /   15     /  primario

---------------------------------------------------------------------

Ejercicio 2 (resuelto):

A partir del ejercicio 1 cambiar el método de envio del formulario de post a get

	1. Del atributo method de la etiqueta form, cambiar de POST a GET en el archivo index.html
	2. Dentro del archivo insert.php modificar todos los $_POST por $_GET
	3. Ir a http://localhost/prueba/
	4. Insertar un Dato nuevamente y ver que sucede en la dirección URL

---------------------------------------------------------------------

Ejercicio 3 (resuelto):

A partir del ejercicio dos cambiar el formulario de síncrono a asíncrono.

Denoto asíncrono es básicamente enviar los datos sin necesidad de recargar o cambiar la pagina
