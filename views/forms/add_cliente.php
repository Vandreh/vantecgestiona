<!-- Criação do Formulário -->
<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
?>

<form action="<?=$GLOBALS['project_index'];?>/controllers/add_cliente.php" method="POST">
    <br>
	<div class="row">
		<div class="col-md-8">
		<label> Nombre Cliente: </label><br>
			<input type="text" name="cliente_name" placeholder="Digite nombre del cliente" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> DNI: </label><br>
			<input type="text" name="DNI" placeholder="Digite el DNI" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" name="cliente_email" placeholder="Digite email" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Telefono: </label><br>
			<input type="text" name="cliente_phone" placeholder="Digite telefono" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Segundo Telefono: </label><br>
			<input type="text" name="cliente_cellphone" placeholder="Digite segundo telefono" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Dirección: </label><br>
			<input type="text" name="cliente_address" placeholder="Digite dirección" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Nascimiento: </label><br>
			<input type="date" name="cliente_birth" placeholder="Digite nacimiento" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Tipo de Piel </label><br>	
			<select name="tipo_piel" class="form-control">
				<option disabled selected> -- Tipo --</option>
				<option value="Mixta"> Mixta </option>
				<option value="Normal"> Normal </option>
				<option value="Seca"> Seca </option>
				<option value="Oleosa"> Oleosa </option>
			</select>
		</div>
		
		<div class="col-md-4">
			<label> Favorito </label><br>	
			<select name="favorito" class="form-control">
				<option disabled selected> -- Favorito --</option>
				<option value="Cuidado de la Piel"> Cuidado de la Piel </option>
				<option value="Maquillaje"> Maquillaje </option>
				<option value="Fragrancia"> Fragrancia </option>
			</select>
		</div>
		
		<input type="hidden" name="user_cpf" value="<?php echo $cpf;?>">
		
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