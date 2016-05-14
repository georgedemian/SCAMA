$(document).ready(function(){

  $("#btn-login").click(function(){
 
        var user = $("#user").val();
        var password = $("#password").val();

        if(user == ""){
                  $( "#user" ).focus();
                  $("#labeluser").addClass('has-error'); 
                  return false;
        }if(password == ""){
                  $( "#password" ).focus();
                  $("#labelpassword").addClass('has-error');
                  $("#labeluser").removeClass('has-error'); 
                  return false;
        }else{

        	$("#labeluser").removeClass('has-error'); 
        	$("#labelpassword").removeClass('has-error'); 
        }
                    $.ajax({
                        type:  'POST',
                        url: "php/login.php",
                        data:{user: user, password: password}, 
                        success:function(msj){
                        if ( msj == 1 ){
                        

        location.href="index.php";
				console.log(msj); 
                        }else{  
                           $('#respuesta').html("<div class='alert alert-danger text-center'> Contraseña o usuario incorrecto</div>");
			console.log(msj);                        
			}
                    },
                    error:function(){
                        alert('ERROR');
                    }
                  });
        return false;
  });

  $(".btn-reset").click(function(){

            $("#labeluser").removeClass('has-error'); 
        	$("#labelpassword").removeClass('has-error');
        	$('#respuesta').empty();
  });

});
