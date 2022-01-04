<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/update_client.php" method="POST">
    
	<input type="hidden" name="id_cliente" value="<?=$cliente_r['id_cliente'];?>">

	<div class="row">
		<div class="col-md-8">
		<label> Nombre del Cliente: </label><br>
			<input type="text" name="cliente_name" placeholder="Digite el nombre" required class="form-control" value="<?=$cliente_r['cliente_name'];?>">
			<br><br>
		</div>				

		<div class="col-md-4">
			<label> DNI: </label><br>
			<input type="number" name="DNI" placeholder="Digite el DNI" required class="form-control" value="<?=$cliente_r['DNI'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" name="cliente_email" placeholder="Digite el email" required class="form-control" value="<?=$cliente_r['cliente_email'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Telefono 1: </label><br>
			<input type="text" name="cliente_phone" placeholder="Digite el telefono" required class="form-control" value="<?=$cliente_r['cliente_phone'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Telefone 2: </label><br>
			<input type="text" name="cliente_cellphone" placeholder="Digite el telefono" required class="form-control" value="<?=$cliente_r['cliente_cellphone'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Dirección: </label><br>
			<input type="text" name="cliente_address" placeholder="Digite la dirección" required class="form-control" value="<?=$cliente_r['cliente_address'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Cumbpleaños: </label><br>
			<input type="date" name="cliente_birth" placeholder="Digite el cumpleaños" required class="form-control" value="<?=$cliente_r['cliente_birth'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Tipo de Piel </label><br>	
			<select name="tipo_piel" class="form-control">
				<option disabled selected><?=$cliente_r['tipo_piel'];?></option>
				<option value="Mixta"> Mixta </option>
				<option value="Normal"> Normal </option>
				<option value="Seca"> Seca </option>
				<option value="Oleosa"> Oleosa </option>
			</select>
		</div>
		
		<div class="col-md-4">
			<label> Favorito </label><br>	
			<select name="favorito" class="form-control">
				<option disabled selected><?=$cliente_r['favorito'];?></option>
				<option value="Cuidado de la Piel"> Cuidado de la Piel </option>
				<option value="Maquillaje"> Maquillaje </option>
				<option value="Fragrancia"> Fragrancia </option>
			</select>
		</div>
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Actualizar Cadastro 
			</button>
			</p>
		</div>	
	</div>
</form>