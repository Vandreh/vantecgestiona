<?php  
	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/managercompras.php";
?>
<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/add_ventas.php" method="POST">
	<div class="row">
	    
		<div class="col-md-4">
    		<label>Nombre del Cliente: <br>
                <select name="user_name">
                <?php
                    select("tb_clientes", "cliente_name");
                ?>
                <?php foreach($data as $values): ?>
            	    <option value="<?php echo $values['cliente_name']; ?>"><?php echo $values['cliente_name']; ?></option>
            	<?php endforeach ?>
            	</select>
        	</label>
		</div>				

		<div class="col-md-4">
			<label> Fecha de Venta: </label><br>
			<input type="email" name="user_email" placeholder="Digite email" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Telefono: </label><br>
			<input type="text" name="user_phone" placeholder="Digite telefono" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Segundo Telefono: </label><br>
			<input type="text" name="user_cellphone" placeholder="Digite segundo telefono" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Dirección: </label><br>
			<input type="text" name="user_address" placeholder="Digite dirección" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Nascimiento: </label><br>
			<input type="date" name="user_birth" placeholder="Digite nacimiento" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Tipo de Piel </label><br>	
			<select name="Tipo_de_piel" class="form-control">
				<option disabled selected> -- Tipo --</option>
				<option value="1"> Mixta </option>
				<option value="2"> Normal </option>
				<option value="3"> Seca </option>
				<option value="4"> Oleaosa </option>
			</select>
		</div>
		
		<div class="col-md-4">
			<label> Favorito </label><br>	
			<select name="favorito" class="form-control">
				<option disabled selected> -- Favorito --</option>
				<option value="1"> Cuidado de la Piel </option>
				<option value="2"> Maquillaje </option>
				<option value="3"> Fragrancia </option>
			</select>
		</div>
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