@extends('layouts.app')


@section('content')
                    <div class="row">
                        <div class="container">
                            <div class="container-header">
                                <div class="text-center" >
                                    <h3 style="color: #ff05f7">Concurso Público</h3>
                                </div>

                                <div class="text-center shadow">
                                    <h4>Comprovante de Inscrição</h4>
                                </div>
                            </div>

                            <div class="container-body">

                                    <div class="row">
                                        <hr>
                                        <div class="col-6 initial">
                                            <label for=""><span>*</span>Nome Completo
                                                <input type="text" class="form-input" readonly name="nome" value="{{ $dados->nome }}" id="nome" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-6 initial">
                                            <label for=""><span>*</span>CPF
                                                <input type="text" class="form-input" maxlength="11" readonly value="{{ $dados->cpf }}" required name="cpf" id="cpf" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')" >
                                            </label>
                                        </div>

                                        <div class="col-8 initial">
                                            <label for=""><span>*</span>Endereço
                                                <input type="text" class="form-input" required name="endereco" readonly value="{{ $dados->endereco }}" id="endereco" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-sm initial">
                                            <label for=""><span>*</span>Data de Inscrição
                                                <input type="text" class="form-input" required name="endereco" readonly value="{{ $dados->created_at->format('d/m/Y h:i:s') }}" id="endereco" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-5 initial">
                                            <label for=""><span>*</span>Estado
                                                <input type="text" class="form-input" required name="endereco" readonly value="{{ $dados->estado->nome }}">
                                            </label>
                                        </div>

                                        <div class="col-5 initial">
                                            <label for=""><span>*</span>Cidade
                                                <input type="text" class="form-input" required name="endereco" readonly value="{{ $dados->cidade->nome }}">
                                            </label>
                                        </div>

                                        <div class="col-5 initial">
                                            <label for=""><span>*</span>Cargo
                                            <input type="text" class="form-input" required name="endereco" readonly value="{{ $dados->inscricao->cargo }}">
                                            </label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row initial noprint">
                                    <div class="col-6 ">
                                            <a class="secondary " type="button" href="{{ route('home') }}">Voltar para Consursos</a>
                                        </div>
                                        <div class="col-6 right">
                                            <a class="primary " type="button" onClick="window.print()">Imprimir</a>
                                        </div>
                                    </div>

                            </div>
                        </div>

                    </div>

@endsection

<script>

</script>
