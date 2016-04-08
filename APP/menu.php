	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Test</a></li>
	
					<!-- Dropdown-->


					<li><a href="#" id="bit"><span class="glyphicon glyphicon-signal"></span> Bitacora</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div id="content"class="col-md-10 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Controles
	</div>
	<div class="panel-body">
  <input id="BAGALL_UP" type="button" value="SUBIR COMPLETO" />
    <input id="BAGALL_LOW" type="button" value="BAJAR COMPLETO" />
    <input id="BAGF_UP" type="button" value="SUBIR ENFRENTE" />
    <input id="BAGF_LOW" type="button" value="BAJAR ENFRENTE" />
    <input id="BAGR_UP" type="button" value="SUBIR ATRAS" />
    <input id="BAGR_LOW" type="button" value="BAJAR ATRAS" />
	</form>




	</div>
</div>
  		</div>

  		<script type="text/javascript">

$(document).ready(function(){
  
			var sendCmd = function set_datos(value){
				return $.getJSON("php/json.php",{"action":value});
			}
 
						console.log('Comenzamos....');
			
		try {
				$("#BAGALL_UP").click(function() {
					console.log('Enciende todas las bolsas');
					sendCmd(0);
				});
				
				$("#BAGALL_OFF").click(function() {
					console.log('Apaga todas las bolsas');
					sendCmd(9);

				});

				$("#BAGALL_LOW").click(function() {
					console.log('Enciende el baciado de las bolsas');
					sendCmd(11);
				});
				

				$("#BAGF_UP").click(function() {
					console.log('levantar bolsas delanteras');
					sendCmd(3);
				});

				$("#BAGF_LOW").click(function() {
					console.log('Enciende el vaciado de las bolsas ');
					sendCmd(4);
				});

				$("#BAGR_UP").click(function() {
					console.log('Levantar bolsas traseras');
					sendCmd(5);
				});

				$("#BAGR_LOW").click(function() {
					console.log('Enciende el vaciado de bolsas traseras');
					sendCmd(6);
				});


			}


			catch(error) {
				console.log('<p>Error'+error+'</p>');
			}


				 $("#bit").click(function(){
        $("#content").load("leerdbunoo.php");
    });

setInterval(Altura,100);

function Altura(){
$("#altura").load("leerdb.php");
}

       


});



</script>