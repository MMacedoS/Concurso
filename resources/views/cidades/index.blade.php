@extends('layouts.app')



@section('content')
                    <div class="row">
                        <div class="container">
                            <div class="container-header">
                                <div class="text-center" >
                                    <h3 style="color: #ff05f7">Concurso Público</h3>
                                </div>

                                <div class="text-center shadow">
                                    <h4>Cadastro de Cidades</h4>
                                </div>
                            </div>

                            <div class="container-body" style="justify-content: center;">
                                <form action="{{ route('cidade.store'); }}" method="post">
                                    <div class="row">
                                        <hr>
                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>Nome
                                                <input type="text" class="form-input" required name="nome" id="nome" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">                                            </label>
                                        </div>

                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>Estado
                                                <select name="estado_id" id="estado" class="form-input" required>
                                                    <option value="">Selecione ...</option>
                                                    @foreach($estado as $item)
                                                        <option value="{{ $item->estado_id }}">{{ $item->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>


                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 right">
                                            <button class="primary" type="submit">Salvar Cidade</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

@endsection



