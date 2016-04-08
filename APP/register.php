<?php   


?>
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				
				<div class="form-group col-lg-12">
					<label>Username</label>		<label class="error" for="name" id="name_error">Debe introducir su nombre.</label><br><br>
					<input type="name" name="name" class="form-control" id="name" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Password</label>		<label class="error" for="pass" id="pass_error">Debe introducir su contrase&ntilde;a.</label><br><br>

					<input type="password" name="password" class="form-control" id="password1" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					<input type="password" name="pass2" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="" name="" class="form-control" id="email" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Email Address</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>			
				
				<div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Sign up for our newsletter
				</div>

				<div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Send notifications to this email
				</div>				
			
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
				</p>
				
				<button type="submit" class="btn btn-primary" id="enviar-btn">Registrar</button>
			</div>
		</div>
	</section>
</div>
 <script src="js/registro.js"></script>
