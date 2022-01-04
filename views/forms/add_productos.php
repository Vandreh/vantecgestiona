<!-- Criação do Formulário -->
<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
?>

<form action="<?=$GLOBALS['project_index'];?>/controllers/add_productos.php" method="POST">
    <br><br>
	<div class="row">
	    
		<div class="col-md-8">
		<label> Nombre del Producto: </label><br>
			<input type="text" name="product_name" placeholder="Digite el nombre del producto" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Código: </label><br>
			<input type="number" name="codigo" placeholder="Digite el código del producto" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Tipo de Producto </label><br>	
			<select name="tipo_producto" class="form-control">
				<option disabled selected> -- Tipos --</option>
				<option value="Cuidado de la Piel"> Cuidado de la Piel </option>
				<option value="Maquillaje"> Maquillaje </option>
				<option value="Fragrancia"> Fragrancia </option>
				<option value="Muestra"> Muestra </option>
				<option value="Accesorio"> Accesorio </option>
			</select>
		</div>
		
		<div class="col-md-4">
			<label> Precio de catalogo: </label><br>
			<input type="text" name="product_price" placeholder="Digite precio de catalogo" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Puntos: </label><br>
			<input type="number" min="0" name="puntos" placeholder="Digite los puntos" required class="form-control">
			<br><br>
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