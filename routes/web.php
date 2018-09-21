<?php



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

/***************** Conselho Curador ********************************/

/*Route::group(['middleware'=> 'auth', 'prefix'=>'admin'], function () {});*/


Route::get('/admin/conselho-curador',["as"=>"admin.conselho-curador","uses"=>"admin\ConselhoController@index"]);
Route::get('/admin/conselho-curador/adicionar',["as"=>"admin.conselho-curador.adicionar","uses"=>"admin\ConselhoController@adicionar"]);
Route::post('/admin/conselho-curador/salvar',["as"=>"admin.conselho-curador.salvar","uses"=>"admin\ConselhoController@salvar"]);
Route::get('/admin/conselho-curador/editar/{id}',["as"=>"admin.conselho-curador.editar","uses"=>"admin\ConselhoController@editar"]);
Route::put('/admin/conselho-curador/atualizar/{id}',["as"=>"admin.conselho-curador.atualizar","uses"=>"admin\ConselhoController@atualizar"]);
Route::get('/admin/conselho-curador/deletar/{id}',["as"=>"admin.conselho-curador.deletar","uses"=>"admin\ConselhoController@deletar"]);

Route::post('/admin/conselho-curador/pesquisar',["as"=>"admin.conselho-curador.pesquisar","uses"=>"admin\ConselhoController@pesquisar"]);


/**************** Tópicos Curador **************************************/

Route::get('/admin/conselho-curador/adicionar-topicos/{id}',["as"=>"admin.conselho-curador.adicionar-topicos","uses"=>"admin\ConselhoController@adicionarTopicos"]);

Route::post('/admin/conselho-curador/salvar-topicos',["as"=>"admin.conselho-curador.salvar-topicos","uses"=>"admin\ConselhoController@salvarTopicos"]);

Route::get('/admin/conselho-curador/visualizar-topicos/{id}',["as"=>"admin.conselho-curador.visualizartopicos","uses"=>"admin\ConselhoController@visualizarTopicos"]);

Route::get('/admin/conselho-curador/editar-topicos/{id}',["as"=>"admin.conselho-curador.editar-topicos","uses"=>"admin\ConselhoController@editarTopicos"]);

Route::put('/admin/conselho-curador/atualizar-topicos/{id}',["as"=>"admin.conselho-curador.atualizar-topicos","uses"=>"admin\ConselhoController@atualizarTopicos"]);

Route::get('/admin/conselho-curador/deletar-topicos/{id}',["as"=>"admin.conselho-curador.deletar-topicos","uses"=>"admin\ConselhoController@deletartopicos"]);

/**************** Documentos Curador **************************************/

Route::get('/admin/conselho-curador/adicionar-documentos/{id}',["as"=>"admin.conselho-curador.adicionar-documentos","uses"=>"admin\ConselhoController@adicionarDocumentos"]);

Route::post('/admin/conselho-curador/salvar-documentos',["as"=>"admin.conselho-curador.salvar-documentos","uses"=>"admin\ConselhoController@salvarDocumentos"]);

Route::get('/admin/conselho-curador/visualizar-documentos/{id?}',["as"=>"admin.conselho-curador.visualizar-documentos","uses"=>"admin\ConselhoController@visualizarDocumentos"]);

Route::get('/admin/conselho-curador/deletar-documentos/{id}',["as"=>"admin.conselho-curador.deletar-documentos","uses"=>"admin\ConselhoController@deletarDocumentos"]);

Route::get('/admin/conselho-curador/log-documentos/{id}',["as"=>"admin.conselho-curador.log-documentos","uses"=>"admin\ConselhoController@logDocumentos"]);


/***************** Usuário Curador ***************************/


Route::get('/conselho-curador',["as"=>"user.conselho-curador.conselho-curador","uses"=>"ConselhoCuradorUsuarioController@index"]);

Route::get('/conselho-curador/pautas-anteriores',["as"=>"user.conselho-curador.pautas-anteriores","uses"=>"ConselhoCuradorUsuarioController@pautasAnteriores"]);

Route::get('/conselho-curador/visualizar-pauta/{id}',["as"=>"user.conselho-curador.visualizar-pauta","uses"=>"ConselhoCuradorUsuarioController@visualizarPauta"]);

Route::post('/conselho-curador/pesquisar',["as"=>"user.conselho-curador.pesquisar","uses"=>"ConselhoCuradorUsuarioController@pesquisar"]);

Route::get('/conselho-curador/download/{id}',["as"=>"user.conselho-curador.download","uses"=>"ConselhoCuradorUsuarioController@download"]);


/*******************************************************/

Route::get('/admin/conselho-fiscal',["as"=>"admin.conselho-fiscal","uses"=>"admin\ConselhoFiscalController@index"]);

/***************** Conselho Fiscal ********************************/

/*Route::group(['middleware'=> 'auth', 'prefix'=>'admin'], function () {});*/


Route::get('/admin/conselho-fiscal',["as"=>"admin.conselho-fiscal","uses"=>"admin\ConselhoFiscalController@index"]);
Route::get('/admin/conselho-fiscal/adicionar',["as"=>"admin.conselho-fiscal.adicionar","uses"=>"admin\ConselhoFiscalController@adicionar"]);
Route::post('/admin/conselho-fiscal/salvar',["as"=>"admin.conselho-fiscal.salvar","uses"=>"admin\ConselhoFiscalController@salvar"]);
Route::get('/admin/conselho-fiscal/editar/{id}',["as"=>"admin.conselho-fiscal.editar","uses"=>"admin\ConselhoFiscalController@editar"]);
Route::put('/admin/conselho-fiscal/atualizar/{id}',["as"=>"admin.conselho-fiscal.atualizar","uses"=>"admin\ConselhoFiscalController@atualizar"]);
Route::get('/admin/conselho-fiscal/deletar/{id}',["as"=>"admin.conselho-fiscal.deletar","uses"=>"admin\ConselhoFiscalController@deletar"]);

Route::post('/admin/conselho-fiscal/pesquisar',["as"=>"admin.conselho-fiscal.pesquisar","uses"=>"admin\ConselhoFiscalController@pesquisar"]);


/**************** Tópicos Fiscal **************************************/

Route::get('/admin/conselho-fiscal/adicionar-topicos/{id}',["as"=>"admin.conselho-fiscal.adicionar-topicos","uses"=>"admin\ConselhoFiscalController@adicionarTopicos"]);

Route::post('/admin/conselho-fiscal/salvar-topicos',["as"=>"admin.conselho-fiscal.salvar-topicos","uses"=>"admin\ConselhoFiscalController@salvarTopicos"]);

Route::get('/admin/conselho-fiscal/visualizar-topicos/{id}',["as"=>"admin.conselho-fiscal.visualizartopicos","uses"=>"admin\ConselhoFiscalController@visualizarTopicos"]);

Route::get('/admin/conselho-fiscal/editar-topicos/{id}',["as"=>"admin.conselho-fiscal.editar-topicos","uses"=>"admin\ConselhoFiscalController@editarTopicos"]);

Route::put('/admin/conselho-fiscal/atualizar-topicos/{id}',["as"=>"admin.conselho-fiscal.atualizar-topicos","uses"=>"admin\ConselhoFiscalController@atualizarTopicos"]);

Route::get('/admin/conselho-fiscal/deletar-topicos/{id}',["as"=>"admin.conselho-fiscal.deletar-topicos","uses"=>"admin\ConselhoFiscalController@deletartopicos"]);

/**************** Documentos Fiscal **************************************/

Route::get('/admin/conselho-fiscal/adicionar-documentos/{id}',["as"=>"admin.conselho-fiscal.adicionar-documentos","uses"=>"admin\ConselhoFiscalController@adicionarDocumentos"]);

Route::post('/admin/conselho-fiscal/salvar-documentos',["as"=>"admin.conselho-fiscal.salvar-documentos","uses"=>"admin\ConselhoFiscalController@salvarDocumentos"]);

Route::get('/admin/conselho-fiscal/visualizar-documentos/{id?}',["as"=>"admin.conselho-fiscal.visualizar-documentos","uses"=>"admin\ConselhoFiscalController@visualizarDocumentos"]);

Route::get('/admin/conselho-fiscal/deletar-documentos/{id}',["as"=>"admin.conselho-fiscal.deletar-documentos","uses"=>"admin\ConselhoFiscalController@deletarDocumentos"]);

Route::get('/admin/conselho-fiscal/log-documentos/{id}',["as"=>"admin.conselho-fiscal.log-documentos","uses"=>"admin\ConselhoFiscalController@logDocumentos"]);


/***************** Usuário Fiscal ***************************/


Route::get('/conselho-fiscal',["as"=>"user.conselho-fiscal.conselho-fiscal","uses"=>"ConselhoFiscalUsuarioController@index"]);

Route::get('/conselho-fiscal/pautas-anteriores',["as"=>"user.conselho-fiscal.pautas-anteriores","uses"=>"ConselhoFiscalUsuarioController@pautasAnteriores"]);

Route::get('/conselho-fiscal/visualizar-pauta/{id}',["as"=>"user.conselho-fiscal.visualizar-pauta","uses"=>"ConselhoFiscalUsuarioController@visualizarPauta"]);

Route::post('/conselho-fiscal/pesquisar',["as"=>"user.conselho-fiscal.pesquisar","uses"=>"ConselhoFiscalUsuarioController@pesquisar"]);

Route::get('/conselho-fiscal/download/{id}',["as"=>"user.conselho-fiscal.download","uses"=>"ConselhoFiscalUsuarioController@download"]);




/***********************************************/


Route::get('/', function () {

 return view('user.login');
}

);

Auth::routes();

//Route::group ([ 'middleware' => [ 'auth' ]], function () {    


//Route::group(['middleware' => ['role:conselho-fiscal']], function () {
    


Route::resource('roles', 'Admin\RoleController');

Route::resource('users', 'Admin\UserController');

//});

//});

//Route::get('/',["as"=>"home","uses"=>"HomeController@index"]);

//Route::get('/login',["as"=>"login","uses"=>"HomeController@login"]);

//Route::post('/login',["as"=>"login","uses"=>"HomeController@login"]);

//Route::post('/logout', ["as"=>"logout", "uses"=>"HomeController@logout"]);

