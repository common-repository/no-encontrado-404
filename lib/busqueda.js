function busqueda(id){
	
	var search = "//api.noencontrado.org/v1/search.json";	

	jQuery.getJSON( search, function( MissingInfo ) {
		var s = MissingInfo["data"];

		var nombreCompleto      = s["nombre"] + " " + s["apellido"];
		var edad                = "Edad actual: " + s["edad"];
		var edadFoto          = "Edad en la foto: " + s["edad_foto"];
		var lugar               = "Residencia: " + s["residencia"];

		var missing = "<li>"+nombreCompleto+"</li>"+"<li>"+edad+"</li>"+"<li>"+edadFoto+"</li>"+"<li>"+lugar+"</li>";

		jQuery("ul#missing").html(missing);
		jQuery("#imagenChico").css("background-image","url(http://static.noencontrado.org/img/" + s["id"] + ".jpg)");
	});
}