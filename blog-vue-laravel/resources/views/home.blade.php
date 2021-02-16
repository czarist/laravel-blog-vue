@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    <h4>Teste conteudo</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <painel titulo="Conteúdo 1" cor="blue">
                                teste conteudo...
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Conteúdo 1" cor="orange">
                                teste conteudo...
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Conteúdo 1" cor="green">
                                teste conteudo...
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Conteúdo 1" cor="red">
                                teste conteudo...
                            </painel>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
