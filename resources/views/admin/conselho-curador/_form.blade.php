<div class="row">
	<div class="col-sm-9">
		<div class="form-group">
			<label for="finalidade">Pauta</label>
			<input type="text" class="form-control" name="finalidade" value="{{isset($registro->finalidade) ? $registro->finalidade : ''}}" placeholder="Digite a pauta" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="data">Data</label>
			<input type="date" class="form-control" name="data" value="{{isset($registro->data) ? $registro->data : ''}}" placeholder="Digite a data" required>
		</div>
	</div>
</div>

<div class="form-group">
	<input type="hidden" class="form-control" name="grupo" value="Conselho Curador">
</div>

		