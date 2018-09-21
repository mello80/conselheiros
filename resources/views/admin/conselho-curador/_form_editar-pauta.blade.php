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

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="categoria">Arquivar</label>
			<select class="form-control" name="arquivar" value="{{isset($registro->arquivar) ? $registro->arquivar : ''}}">

				
				<option value="nao" @if ($registro->arquivar === 'nao') selected @endif >Não</option>
				<option value="sim" @if ($registro->arquivar === 'sim') selected @endif >Sim</option>

			</select>
		</div>
	</div>
</div>


<div class="form-group">
	<input type="hidden" class="form-control" name="grupo" value="Conselho Curador">
</div>

		