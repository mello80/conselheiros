@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Decisões Estratégicas")

@section('conteudo')
<div class="container" style="margin-top: 50px;">
    <h3 class="text-center">Adicionar Decisão Estratégica</h3>
    
        <form action="{{route('admin.decisoes_estrategicas.salvar')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include("admin.decisoes_estrategicas._form")
        
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
            
</div>

@endsection