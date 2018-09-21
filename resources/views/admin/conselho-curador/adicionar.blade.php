@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container topoConteudo">
    <h3 class="text-center mb-5 text-muted" >Adicionar Reunião</h3>
    
        <form action="{{route('admin.conselho-curador.salvar')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include("admin.conselho-curador._form")
        
            <button type="submit" class="btn btn-primary">Salvar</button>
            
        </form>
            
</div>

@endsection