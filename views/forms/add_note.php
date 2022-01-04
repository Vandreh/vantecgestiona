<form action="<?=$GLOBALS['project_index'];?>/controllers/add_note.php" method="POST">
	<div class="row">
		<div class="col-md-8">
			<label> Nome Completo: </label><br>
			<select class="form-control" name="user_id">

			</select>
		</div>			

		<div class="col-md-4">
			<label> Data: </label><br>
			<input type="date" name="note_date" placeholder="" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Valor: </label><br>
			<input type="number" name="note_value" placeholder="Digite o valor" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-12">
			<label> Descricao: </label><br>
			<textarea class="form-control" name="note_desc"></textarea>
		</div>		

</div>
</form>