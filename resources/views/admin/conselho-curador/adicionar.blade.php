@extends ("layout_padrao.layout_padrao")

@section ("titulo", "Conselho Curador")

@section('conteudo')
<div class="container" style="margin-top: 50px;">
    <h3 class="text-center">Adicionar Pauta</h3>
    
        <form action="{{route('admin.conselho-curador.salvar')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include("admin.conselho-curador._form")
        
            <button type="submit" class="btn btn-primary">Salvar</button>
            
        </form>
            
</div>

@endsection