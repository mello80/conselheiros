<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="documentos">Nome do Documento</label>
			<input type="text" class="form-control" name="nomedoarquivo" required> 
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="documentos">Adicionar documentos</label>
			<input type="file" class="form-control-file" name="documentos[]" required> 
		</div>
	</div>
</div>

<div class="form-group">
	
	<input type="hidden" class="form-control" name="topico_id" value="{{isset($registro->id) ? $registro->id : ''}}">
	<input type="hidden" class="form-control" name="conselho_id" value="{{isset($registro->conselho_id) ? $registro->conselho_id : ''}}">
	
</div>
