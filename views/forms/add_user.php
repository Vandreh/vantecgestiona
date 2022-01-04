<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/add_user.php" method="POST">
	<div class="row">
		<div class="col-md-8">
		<label> Nombre: </label><br>
			<input type="text" name="user_name" placeholder="Digite su nombre" required class="form-control">
			<br><br>
		</div>				

		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" name="user_email" placeholder="Digite su email" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Contraseña: </label><br>
			<input type="password" name="user_password" placeholder="Digite su contraseña" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> DNI: </label><br>
			<input type="text" name="user_cpf" placeholder="Digite su DNI" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Nacimiento: </label><br>
			<input type="date" name="user_birth" placeholder="Digite su fecha de nacimiento" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Celular: </label><br>
			<input type="text" name="user_phone" placeholder="Digite su celular" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Telefono de Referencia: </label><br>
			<input type="text" name="user_cellphone" placeholder="Digite el telefono" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Dirección: </label><br>
			<input type="text" name="user_address" placeholder="Digite su dirección" required class="form-control">
			<br><br>
		</div>
		
		<input type="hidden" name="profile_id" value="2">
		
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Finalizar Cadastro 
			</button>
			</p>
		</div>	
	</div>
</form>