<?php


Route::get('/', function () {
    return view('/home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

/***************** Humanograma ***********************/
Route::get('/admin/humanograma',["as"=>"admin.humanograma","uses"=>"admin\HumanogramaController@index"]);
Route::get('/admin/humanograma/adicionar',["as"=>"admin.humanograma.adicionar","uses"=>"admin\HumanogramaController@adicionar"]);
Route::post('/admin/humanograma/salvar',["as"=>"admin.humanograma.salvar","uses"=>"admin\HumanogramaController@salvar"]);
Route::get('/admin/humanograma/editar/{id}',["as"=>"admin.humanograma.editar","uses"=>"admin\HumanogramaController@editar"]);
Route::put('/admin/humanograma/atualizar/{id}',["as"=>"admin.humanograma.atualizar","uses"=>"admin\HumanogramaController@atualizar"]);
Route::get('/admin/humanograma/deletar/{id}',["as"=>"admin.humanograma.deletar","uses"=>"admin\HumanogramaController@deletar"]);


/****************** Decisões Estratégicas ****************/

Route::get('/admin/decisoes-estrategicas',["as"=>"admin.decisoes_estrategicas","uses"=>"admin\Decisoes_EstrategicasController@index"]);

Route::get('/admin/decisoes-estrategicas/adicionar',["as"=>"admin.decisoes_estrategicas.adicionar","uses"=>"admin\Decisoes_EstrategicasController@adicionar"]);

Route::post('/admin/decisoes-estrategicas/salvar',["as"=>"admin.decisoes_estrategicas.salvar","uses"=>"admin\Decisoes_EstrategicasController@salvar"]);

/***************** Conselhos ********************************/

Route::get('/admin/conselho-curador',["as"=>"admin.conselho-curador","uses"=>"admin\ConselhoController@index"]);
Route::get('/admin/conselho-curador/adicionar',["as"=>"admin.conselho-curador.adicionar","uses"=>"admin\ConselhoController@adicionar"]);
Route::post('/admin/conselho-curador/salvar',["as"=>"admin.conselho-curador.salvar","uses"=>"admin\ConselhoController@salvar"]);
Route::get('/admin/conselho-curador/editar/{id}',["as"=>"admin.conselho-curador.editar","uses"=>"admin\ConselhoController@editar"]);
Route::put('/admin/conselho-curador/atualizar/{id}',["as"=>"admin.conselho-curador.atualizar","uses"=>"admin\ConselhoController@atualizar"]);
Route::get('/admin/conselho-curador/deletar/{id}',["as"=>"admin.conselho-curador.deletar","uses"=>"admin\ConselhoController@deletar"]);
/*Route::get('/admin/conselho-curador/visualizar/{id}',["as"=>"admin.conselho-curador.visualizar","uses"=>"admin\ConselhoController@visualizar"]);*/

Route::post('/admin/conselho-curador/pesquisar',["as"=>"admin.conselho-curador.pesquisar","uses"=>"admin\ConselhoController@pesquisar"]);


/**************** Tópicos **************************************/

Route::get('/admin/conselho-curador/adicionar-topicos/{id}',["as"=>"admin.conselho-curador.adicionar-topicos","uses"=>"admin\ConselhoController@adicionarTopicos"]);

Route::post('/admin/conselho-curador/salvar-topicos',["as"=>"admin.conselho-curador.salvar-topicos","uses"=>"admin\ConselhoController@salvarTopicos"]);

Route::get('/admin/conselho-curador/visualizar-topicos/{id}',["as"=>"admin.conselho-curador.visualizartopicos","uses"=>"admin\ConselhoController@visualizarTopicos"]);

Route::get('/admin/conselho-curador/editar-topicos/{id}',["as"=>"admin.conselho-curador.editar-topicos","uses"=>"admin\ConselhoController@editarTopicos"]);

Route::put('/admin/conselho-curador/atualizar-topicos/{id}',["as"=>"admin.conselho-curador.atualizar-topicos","uses"=>"admin\ConselhoController@atualizarTopicos"]);

Route::get('/admin/conselho-curador/deletar-topicos/{id}',["as"=>"admin.conselho-curador.deletar-topicos","uses"=>"admin\ConselhoController@deletartopicos"]);

/**************** Documentos **************************************/

Route::get('/admin/conselho-curador/adicionar-documentos/{id}',["as"=>"admin.conselho-curador.adicionar-documentos","uses"=>"admin\ConselhoController@adicionarDocumentos"]);

Route::post('/admin/conselho-curador/salvar-documentos',["as"=>"admin.conselho-curador.salvar-documentos","uses"=>"admin\ConselhoController@salvarDocumentos"]);

Route::get('/admin/conselho-curador/visualizar-documentos/{id?}',["as"=>"admin.conselho-curador.visualizar-documentos","uses"=>"admin\ConselhoController@visualizarDocumentos"]);

Route::get('/admin/conselho-curador/deletar-documentos/{id}',["as"=>"admin.conselho-curador.deletar-documentos","uses"=>"admin\ConselhoController@deletarDocumentos"]);


/***************** Usuário ***************************/

Route::get('/conselho-curador',["as"=>"conselho-curador","uses"=>"ConselhoUsuarioController@index"]);

Route::get('/conselho-curador/visualizar-pauta/{id}',["as"=>"visualizar-pauta","uses"=>"ConselhoUsuarioController@visualizarPauta"]);

Route::post('/conselho-curador/pesquisar',["as"=>"pesquisar","uses"=>"ConselhoUsuarioController@pesquisar"]);