////////////////////// functions


function validatePass(campo) {
    var RegExPattern = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
    var errorMessage = 'Password Incorrecta.';
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
        alert('Password Correcta'); 
    } else {
        alert(errorMessage);
        campo.focus();
    } 
}

////////////////////////////////////////////////////////////


function limpiaForm(miForm) {
// recorremos todos los campos que tiene el formulario
$(':input', miForm).each(function() {
	var type = this.type;
	var tag = this.tagName.toLowerCase();
//limpiamos los valores de los campos…
	if (type == 'text' || type == 'password' || tag == 'textarea')
		this.value = '';
// excepto de los checkboxes y radios, le quitamos el checked
// pero su valor no debe ser cambiado
	else if (type == 'checkbox' || type == 'radio')
		this.checked = false;
// los selects le ponesmos el indice a -
	else if (tag == 'select')
		this.selectedIndex = 0;
	});
}

///////////////////////////////////////////////////////


function cuadroDialogo(dialogo){

 $("#dialogo").html(dialogo);

 $( "#dialogo" ).dialog({
            modal: true,
            buttons: {
                Ok: function() {
                    $( this ).dialog( "close" );
                }
            }
        });

}



//////////////////////// Document ready 

$(document).ready(function(){

//////////////// function jquery
jQuery.fn.reset = function () {
  $(this).each (function() { this.reset(); });
}

///////////////// star document onready

	if($('#sessionEx').val()==1){
	$('#alert').append('<span style= "padding:5px;" class="offset1 label label-important">Se ha vencido el tiempo de uso de su sesión</span>');
	}

////////////////////////////	

 	$.ajaxSetup({

 		url : 'loginrequest.php' , 
 		type : 'POST',
 		cache : false,
 		async: false

 	});

$('#btn-login').click(function(){

	loginData = $('#formLogin').serialize();

	$.ajax({ 

			data:loginData+'&option=1',
 			success:function(result){

 			if(result == 'true'){

 				alert('logeado');
 				$('#sessionEx').val(0);
 			
 			}else{

 				$('#alert').empty();	
 				$('#warp-login').effect("shake", { times:3 }, 100);
 				$('#alert').append('<span style= "padding:5px;" class="offset1 label label-important">Usuario o contraseña no validos</span>');
 				
 			
 			}

 		} // end function success ajax
 	});

 }); // end #btn-login	


	$('#lb-lostPassword').click(function(){
	
	$('#alert').empty();
	$('#alert').append('<div class="alert">'+
						'<button type="button" class="close" data-dismiss="alert">×</button>'+
						'<input id="emailLostPassword" type="text" placeholder="Ingresa tu correo">'+
						'<button type="button" class="btn btn-primary" id="btn-lostPass" data-loading-text="Loading...">Enviar <i class="icon-circle-arrow-right icon-white"></i></button></div>')	

	}); //end #lb-lostPassword

//////////////////////////////////////////////////////////////// #a-loginOff	

	$('#a-loginOff').click(function(){
	$.ajax({ 
			data:'option=3',
 			success:function(result){

 			if(result=='true'){
 				location.href='index.php';
 			}
 		} // end function success ajax
 	});

 });// end #a-loginOff

//////////////////////////////////////////////////////////////// btn-register

$('#btn-register').click(function(){

	flag = 0;

	$('input').each(function(index){
		
		if($(this).val()==''){
		
		$('#alert').empty();
		$(this).css("border-color","red").effect("bounce", { times:3 }, 100);
 		/*$('#alert').append('<span style= "padding:5px;" class="offset1 label label-important">Debe completar los campos marcados con rojo</span>');*/
 		cuadroDialogo('<span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 50px 0;"></span>Debe completar los campos marcados con rojo');
		flag++;

		}

		else{
		$('#alert').empty();
		$(this).css("border-color","green");
	}

	});

if(flag==''){

	email = $('#email').val().indexOf('@');

	if(email!=-1){

	if($('#password').val() != $('#repassword').val()){
		$('#alert').empty();
		$('#alert').append('<span style= "padding:5px;" class="offset2 label label-important">Contraseña no es igual</span>');
		$('#password,#repassword').css("border-color","red").effect("bounce", { times:3 }, 100);
		
	}else{

	RegisterData = $('#formRegister').serialize();

	$.ajax({ 

		data:RegisterData+'&option=2',
 		success:function(result){
 			alert(result);
 		if(result == 'false'){
			$('#alert').empty();
			$('#username').css("border-color","red").effect("bounce", { times:3 }, 100);
 			$('#alert').append('<span style= "padding:5px;" class="offset1 label label-important">Usuario ya existe </span>');
 			}
 		else{
 			$('#alert,#formRegister').empty();
			$('#alert').append('<span style= "padding:5px;" class="offset2 label label-success">Datos se guardaron con exito</span>');
	
 					}// end if result
 				} // end function success ajax
 			});// end ajax
		} // end if password 
	}else{
		$('#alert').append('<span style= "padding:5px;" class="offset2 label label-important">Email incorrecto</span>');
		$('#email').css("border-color","red").effect("bounce", { times:3 }, 100);
	}// end if email 

}// end if flag
	
}); // end #btn-register function


////////////////////// Animation Submenu

 $("#btn-hide").click(function () {
      $("#submenu").slideToggle("slow");
    });

////////////////////////////////////////////////////////////////
	
$('#ul-submenu li').click(function(){

	opcionSubmenu = $(this).attr('id');
	
	switch(opcionSubmenu)
{

case 'agregar':

  $('#warp-login').removeClass('displaynone');
 	$('#formRegister').reset();
  break;

case 'editar':

  $('#warp-login').removeClass('displaynone');
  $('#name').val('hola');	

  break;

default:
  
}

});


function gridTable(arrayHead,arrayDatos){

	table = '<table id="grid-table">';
	
	// headtable

		thead = '<thead id="thead-grid-table"><tr>';

				for (var i = 0; i < arrayHead.length; i++) 
				{
				thead +='<td>'+arrayHead[i]+'<></td>';
				};

		thead +='</tr>'+	
			
			'</thead>';

// bodytable

		tbody = '<tbody id="tbody-grid-table">';

	
	$.each(arrayDatos,function(ixdex,item){

		tbody +='<tr>';

		for (var x = 0; x < item.length; x++) {
			if(x==0){
				tbody += '<td><input type="checkbox" value='+item[x]+'> '+item[x]+'</td>';
			}else{
				tbody += '<td>'+item[x]+'</td>';
			}
		}; 

		tbody +='</tr>';

	});

		tbody +='</tbody>';

	tableEnd = '</table>';			

//	alert(table+thead+tbody+tableEnd);

	$('#warp-table').append(table+thead+tbody+tableEnd);

}


$.ajax({
  dataType: 'json',
  data: 'option=4',
  success: function(result){
  	//alert(result);
  }
});

arrays = new Array('ID','Nombre','Username','Role');
obj = {id:["_1","nombre","rnombre",'admin'],nombre:["_2","pedro","luis","admin"],pato:["_23","mario","mmario","admin"]};

gridTable(arrays,obj);


});//end document ready.