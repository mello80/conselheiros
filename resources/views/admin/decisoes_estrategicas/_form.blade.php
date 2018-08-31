

<ul class="nav flex-column flex-sm-row nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informações Básicas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="endereco-tab" data-toggle="tab" href="#endereco" role="tab" aria-controls="endereco" aria-selected="false">Informações Reuniões</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Histórico/Cumprimento</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

		<div class="form-group">
			<label for="decisaonr">Decisão Nr.</label>
			<input type="integer" class="form-control" name="decisaonr" value="{{isset($registro->nome) ? $registro->nome : ''}}" placeholder="Digite o número da decisão" required>
		</div>

		<div class="form-group">
			<label for="cargo">Ano</label>
			<input type="integer" class="form-control" name="ano" value="{{isset($registro->cargo) ? $registro->cargo : ''}}" placeholder="Digite o ano" required>
		</div>

		<div class="form-group">
			<label for="assunto">Assunto</label>
			<input type="text" class="form-control" name="assunto" value="{{isset($registro->nome) ? $registro->nome : ''}}" placeholder="Digite o assunto" required>
		</div>

		<div class="form-group">
			<label for="datainicio">Data Início</label>
			<input type="date" class="form-control" name="datainicio" value="{{isset($registro->cargo) ? $registro->cargo : ''}}" placeholder="Digite a data início" required>
		</div>

		<div class="form-group">
			<label for="datalimite">Data Limite</label>
			<input type="date" class="form-control" name="datalimite" value="{{isset($registro->cargo) ? $registro->cargo : ''}}" placeholder="Digite a data limite" required>
		</div>
		
		<div class="form-group">
			<label for="textodecisao">Texto da Decisão</label>
			<textarea type="text" class="form-control" name="textodecisao" value="{{isset($registro->desccurriculo) ? $registro->desccurriculo : ''}}" placeholder="Digite o texto da decisão">
			</textarea>
		</div>

		<div class="form-group">
			<label for="responsavelatendimento">Responsável pelo atendimento</label>
			<select class="form-control" name="responsavelatendimento" value="{{isset($registro->comite_investimento) ? $registro->comite_investimento : ''}}">
				
				<option value="selecione" selected>Selecione</option>
				<option value="COI" >COI</option>
				<option value="Geate" >Geate</option>
				<option value="Gecom" >Gecom</option>
				<option value="Gefic" >Gefic</option>
				<option value="Geimp" >Geimp</option>
				<option value="Gepem" >Gepem</option>
				<option value="Gepin" >Gepin</option>
				<option value="Gepro" >Gepro</option>
				<option value="Gerae" >Gerae</option>
				<option value="Gerap" >Gerap</option>
				<option value="Secex" >Secex</option>
				
			</select>
		</div>


	</div>

	<div class="tab-pane fade" id="endereco" role="tabpanel" aria-labelledby="endereco-tab">

		<div class="form-group">
			<label for="decisaoemitida">Decisão emitida por:</label>
			<select class="form-control" name="decisaoemitida" value="{{isset($registro->comite_investimento) ? $registro->comite_investimento : ''}}">
				
				<option value="selecione" selected>Selecione</option>
				<option value="Comitê Estratégico" >Comitê Estratégico</option>
				<option value="Comitê Diges" >Comitê Diges</option>
				<option value="Comitê de Gestores" >Comitê de Gestores</option>
				<option value="Comitê de Investimento" >Comitê de Investimento</option>
				<option value="Conselho Curador" >Conselho Curador</option>
				<option value="Conselho Fiscal" >Conselho Fiscal</option>
				
			</select>
		</div>

	<div class="form-group">
			<label for="datareuniao">Data da Reunião</label>
			<input type="date" class="form-control" name="datareuniao" value="{{isset($registro->cargo) ? $registro->cargo : ''}}" placeholder="Digite a data limite" required>
		</div>
	
	<div class="form-group">
			<label for="reuniaonr">Reunião Nr.</label>
			<textarea type="text" class="form-control" name="reuniaonr" value="{{isset($registro->desccurriculo) ? $registro->desccurriculo : ''}}" placeholder="Digite a decisão"></textarea>
	</div>

	<div class="form-group">
			<label for="linkdecisao">Link decisão</label>
			<input type="file" class="form-control-file" class="form-control-file" name="linkdecisao"  placeholder="Enter email" required>
	</div>

		@if(isset($registro->linkdecisao))
		<div class="form-group">
			<img src="{{asset($registro->linkdecisao)}}" width="200">
		</div>
		@endif

	</div>

	
	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

		<div class="form-group">
			<label for="status">Status</label>
			<select class="form-control" name="status" value="{{isset($registro->comite_investimento) ? $registro->comite_investimento : ''}}">
				
				<option value="selecione" selected>Selecione</option>
				<option value="Pendente" >Pendente</option>
				<option value="Cumprida" >Cumprida</option>
				
			</select>
		</div>

		<div class="form-group">
			<label for="historico">Acompanhamento/Histórico</label>
			<textarea type="text" class="form-control" name="historico" value="{{isset($registro->desccurriculo) ? $registro->desccurriculo : ''}}" placeholder="Digite o histórico"></textarea>
		</div>

		
	</div>
</div>



