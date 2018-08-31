

<ul class="nav flex-column flex-sm-row nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Perfil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="endereco-tab" data-toggle="tab" href="#endereco" role="tab" aria-controls="endereco" aria-selected="false">Endereço</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Secretária</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Currículo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="dadosbancarios-tab" data-toggle="tab" href="#dadosbancarios" role="tab" aria-controls="dadosbancarios" aria-selected="false">Dados Bancários</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}" placeholder="Digite o nome" required>
		</div>

		<div class="form-group">
			<label for="cargo">Cargo</label>
			<input type="text" class="form-control" name="cargo" value="{{isset($registro->cargo) ? $registro->cargo : ''}}" placeholder="Digite o cargo" required>
		</div>

		<div class="form-group">
			<label for="conselheiro_fbb">Conselheiro FBB</label>
			<select class="form-control" name="fbb_conselheiro_id" value="{{isset($registro->fbb_conselheiro_id) ? $registro->fbb_conselheiro_id : ''}}">
				@foreach($fbb_conselheiros as $fc)
				<option value="{{$fc->id}}">{{$fc->nome}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="investimento">Participa do Comitê de Investimento?</label>
			<select class="form-control" name="comite_investimento" value="{{isset($registro->comite_investimento) ? $registro->comite_investimento : ''}}">
				
				<option value="sim" >Sim</option>
				<option value="nao" selected>Não</option>
				
			</select>
		</div>

		
		<div class="form-group">
			<label for="aniversario">Aniversário</label>
			<input type="date" class="form-control" name="aniversario" value="{{isset($registro->aniversario) ? $registro->aniversario : ''}}" placeholder="Digite a data do aniversário" required>
		</div>

		<div class="form-group">
			<label for="foto">Foto</label>
			<input type="file" class="form-control-file" class="form-control-file" name="foto"  placeholder="Enter email" required>
		</div>

		@if(isset($registro->foto))
		<div class="form-group">
			<img src="{{asset($registro->foto)}}" width="200">
		</div>
		@endif
	</div>

	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

		<div class="form-group">
			<label for="NomeSecretaria">Nome</label>
			<input type="text" class="form-control" name="nome_secretaria" value="{{isset($registro->nome_secretaria) ? $registro->nome_secretaria : ''}}" placeholder="Digite o nome">
		</div>

		<div class="form-group">
			<label for="TelefoneSecretaria">Telefone</label>
			<input type="text" class="form-control" name="telefone_secretaria" value="{{isset($registro->telefone_secretaria) ? $registro->telefone_secretaria : ''}}" placeholder="Digite o telefone">
		</div>

	</div>

	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

		<div class="form-group">
			<label for="desccurriculo">Descrição</label>
			<textarea type="text" class="form-control" name="desccurriculo" value="{{isset($registro->desccurriculo) ? $registro->desccurriculo : ''}}" placeholder="Digite o nome">
			</textarea>
		</div>

	</div>

	<div class="tab-pane fade" id="dadosbancarios" role="tabpanel" aria-labelledby="dadosbancarios-tab">

		<div class="form-group">
			<label for="nome_banco">Nome</label>
			<input type="text" class="form-control" name="nome_banco" value="{{isset($registro->nome_banco) ? $registro->nome_banco : ''}}" placeholder="Digite o nome do banco">
		</div>

		<div class="form-group">
			<label for="codigo_banco">Código</label>
			<input type="text" class="form-control" name="codigo_banco" value="{{isset($registro->codigo_banco) ? $registro->codigo_banco : ''}}" placeholder="Digite o código" maxlength="3">
		</div>

		<div class="form-group">
			<label for="agencia_banco">Agência</label>
			<input type="text" class="form-control" name="agencia_banco" value="{{isset($registro->agencia_banco) ? $registro->agencia_banco : ''}}" placeholder="Digite a agência">
		</div>

		<div class="form-group">
			<label for="conta_banco">Conta</label>
			<input type="text" class="form-control" name="conta_banco" value="{{isset($registro->conta_banco) ? $registro->conta_banco : ''}}" placeholder="Digite a conta">
		</div>

	</div>

	<div class="tab-pane fade" id="endereco" role="tabpanel" aria-labelledby="endereco-tab">

		<div class="form-group">
			<label for="cargo">Telefone</label>
			<input type="text" class="form-control" name="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}" placeholder="Digite o telefone" required>
			

		</div>
		<div class="form-group">
			<label for="cargo">Telefone Celular</label>
			<input type="text" class="form-control" name="celular" value="{{isset($registro->celular) ? $registro->celular : ''}}" placeholder="Digite o telefone celular" required>
		</div>
		<div class="form-group">
			<label for="cargo">E-mail</label>
			<input type="email" class="form-control" name="email" value="{{isset($registro->email) ? $registro->email : ''}}" placeholder="Digite o e-mail" required>
		</div>
		<div class="form-group">
			<label for="nome_banco">Endereço</label>
			<input type="text" class="form-control" name="endereco" value="{{isset($registro->endereco) ? $registro->endereco : ''}}" placeholder="Digite o endereço">
		</div>

		<div class="form-group">
			<label for="codigo_banco">Cidade</label>
			<input type="text" class="form-control" name="cidade" value="{{isset($registro->cidade) ? $registro->cidade : ''}}" placeholder="Digite a cidade" >
		</div>

		<div class="form-group">
			<label for="agencia_banco">Estado</label>
			<input type="text" class="form-control" name="estado" value="{{isset($registro->estado) ? $registro->estado : ''}}" placeholder="Digite o estado" maxlength="2">
		</div>

		<div class="form-group">
			<label for="conta_banco">CEP</label>
			<input type="text" class="form-control" name="cep" value="{{isset($registro->cep) ? $registro->cep : ''}}" placeholder="Digite o CEP">
		</div>

	</div>
</div>



