@extends('layouts.app')


@section('content')
                    <div class="row">
                        <div class="container">
                            <div class="container-header">
                                <div class="text-center" >
                                    <h3 style="color: #ff05f7">Concurso Público Disponiveis</h3>
                                </div>
                            </div>

                            <div class="container-body">
                                @foreach($concursos as $item)
                                    <div class="card shadow" onclick="abrir('{{ $item->id }}')">
                                        <div class="card-header">{{ $item->cargo }}</div>
                                        <div class="card-body">{{ $item->cidade->nome }}</div>
                                    </div>

                                @endforeach
                            </div>
                        </div>

                    </div>

@endsection
