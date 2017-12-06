@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Listagem de Artigos" cor="panel-success">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            <modal-likn tipo="button" nome="novo" titulo="Novo" cssBtn=""></modal-likn>
            <tabela-lista 
                v-bind:titulos="['#','Titulo','Descrição']"
                v-bind:itens="[['1','PHP','Curso de PHP OO'],['2','Java','Curso de Java OO']]"
                ordem = "asc" ordemcol = "2"
                criar="#criar" detalhe="#detalhe" editar="#criar" deletar="#deletar" token="123413412341">
            </tabela-lista>
            
        </painel>
    </pagina>
    <modal nome="novo">
        <painel titulo="Adicionar" cor="painel-success">
            <formulario cssForm="" action="" method="" enctype="" token="">
                <div class="form-group">
                    <label class="control-label">Titulo</label>
                    <input type="text" class="form-control"  placeholder="Digite um titulo">
                </div>
                <div class="form-group">
                    <label class="control-label">Descrição</label>
                    <input type="text" class="form-control"  placeholder="Digite uma descrição">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <button type="submit" class="btn btn-info">Adicionar</button>
            </formulario>
        </painel>
    </modal>
@endsection



    

    


