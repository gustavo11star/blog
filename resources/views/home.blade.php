@extends('layouts.app')

@section('content')
    <pagina tamanho="5">
        <painel titulo="Dash" cor="panel-success">
                    
            <div class="row">
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <caixa qtd="178" titulo="Artigo" cor="orange" icone="ion ion-stats-bars" url="{{route('artigos.index')}}"></caixa>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <caixa qtd="50" titulo="Usuarios" cor="grey" icone="ion ion-ios-people" url="#"></caixa>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <caixa qtd="80" titulo="Autores" cor="#7FFFD4" icone="ion ion-ios-person" url="#"></caixa>
                </div>
            </div>
            
        </painel>
    </pagina>
@endsection
