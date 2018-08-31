
<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="categoria">Categoria</label>
			<select class="form-control" name="categoria" value="{{isset($registro->categoria) ? $registro->categoria : ''}}">

				<option value="selecione" selected>Selecione</option>
				<option value="Informe Iniciais" >Informe Iniciais</option>
				<option value="Para Conhecimento" >Para Conhecimento</option>
				<option value="Para Deliberação" >Para Deliberação</option>
				<option value="Informes" >Informes</option>

			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-1">
		<div class="form-group">
			<label for="ordenacao">Ordenação</label>
			<input type="number" class="form-control" name="ordenacao" value="{{isset($registro->ordenacao) ? $registro->ordenacao : ''}}" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-9">
		<div class="form-group ">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}" placeholder="Digite o título" required>
		</div>
	</div>
</div>

<div class="form-group">
	
	<input type="hidden" class="form-control" name="conselho_id" value="{{isset($registro->id) ? $registro->id : ''}}">
	
</div>
