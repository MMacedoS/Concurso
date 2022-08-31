@extends('layouts.app')



@section('content')
                    <div class="row">
                        <div class="container">
                            <div class="container-header">
                                <div class="text-center" >
                                    <h3 style="color: #ff05f7">Concurso Público</h3>
                                </div>

                                <div class="text-center shadow">
                                    <h4>Cadastro de Estados</h4>
                                </div>
                            </div>

                            <div class="container-body" style="justify-content: center;">
                                <form action="{{ route('estados.store'); }}" method="post">
                                    <div class="row">
                                        <hr>
                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>Nome
                                                <input type="text" class="form-input" required name="nome" id="nome" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">                                            </label>
                                        </div>

                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>SIGLA
                                                <input type="text" class="form-input" maxlength="2" required name="sigla" id="nome">                                            </label>
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



