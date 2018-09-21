<div class="row">
	<div class="col-sm-9">
		<div class="form-group">
			<label for="finalidade">Nome</label>
			<input type="text" class="form-control" name="finalidade" value="{{isset($registro->finalidade) ? $registro->finalidade : ''}}" placeholder="Digite o nome da reunião" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="data">Data</label>
			<input type="text" class="form-control" name="data" id="datepicker" value="{{isset($registro->data) ? $registro->data : ''}}" placeholder="Digite a data" required>
		</div>
	</div>
</div>


<div class="form-group">
	<input type="hidden" class="form-control" name="arquivar" value="nao">
</div>

<div class="form-group">
	<input type="hidden" class="form-control" name="grupo" value="Conselho Fiscal">
</div>

		