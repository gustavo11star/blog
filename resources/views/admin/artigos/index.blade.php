@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Listagem de Artigos" cor="panel-success">
            <a href="#">Novo</a>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th>Autor</th>
                            <th>Data</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th>Autor</th>
                            <th>Data</th>
                            <th>Ação</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </painel>
    </pagina>
@endsection
