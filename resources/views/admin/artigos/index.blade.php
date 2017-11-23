@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Listagem de Artigos" cor="panel-success">
            <tabela-lista 
                v-bind:titulos="['#','Titulo','Descrição']"
                v-bind:itens="[['1','PHP','Curso de PHP OO'],['2','Java','Curso de Java OO']]"
                criar="#criar" detalhe="#detalhe" editar="#criar" deletar="#deletar" token="123413412341"
            ></tabela-lista>
            
        </painel>
    </pagina>
@endsection



    

    


