$(document).ready(function(){
  
			var sendCmd = function set_datos(value){
				return $.getJSON("../php/json.php",{"action":value});
			}
 
			console.log('Comenzamos....');
			
			try {
				$("#on").click(function() {
					console.log('Enciende...:)');
					sendCmd(0);
				});
				
				$("#off").click(function() {
					console.log('Apaga...');
					sendCmd(1);
				});
			}
			catch(error) {
				console.log('<p>Error'+error+'</p>');
			}
});
