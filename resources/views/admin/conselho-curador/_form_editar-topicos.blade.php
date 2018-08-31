<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="categoria">Categoria</label>
			<select class="form-control" name="categoria" value="{{isset($registro->categoria) ? $registro->categoria : ''}}">

				<option value="selecione" @if ($registro->categoria === 'selecione') selected @endif >Selecione</option>
				<option value="Informe Iniciais" @if ($registro->categoria === 'Informe Iniciais') selected @endif >Informe Iniciais</option>
				<option value="Para Conhecimento" @if ($registro->categoria === 'Para Conhecimento') selected @endif >Para Conhecimento</option>
				<option value="Para Deliberação" @if ($registro->categoria === 'Para Deliberação') selected @endif >Para Deliberação</option>
				<option value="Informes" @if ($registro->categoria === 'Informes') selected @endif >Informes</option>

			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-1">
		<div class="form-group">
			<label for="ordenacao">Ordenação</label>
			<input type="number" class="form-control" name="ordenacao" value="{{isset($registro->ordenacao) ? $registro->ordenacao : ''}}" placeholder="Digite a ordenação" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-9">
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}" placeholder="Digite o título" required>
		</div>
	</div>
</div>

<div class="form-group">
	
	<input type="hidden" class="form-control" name="id" value="{{isset($registro->id) ? $registro->id : ''}}">
	
</div>
