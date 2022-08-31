@extends('layouts.app', ['pageSlug' => 'inscricao'])


@section('content')
                    <div class="row">
                        <div class="container">
                            <div class="container-header">
                                <div class="text-center" >
                                    <h3 style="color: #ff05f7">Concurso Público</h3>
                                </div>

                                <div class="text-center shadow">
                                    <h4>Inscrição de Candidato</h4>
                                </div>
                            </div>

                            <div class="container-body">
                                <form action="{{ route('inscricao.store'); }}" method="post">
                                    <div class="row">
                                        <hr>
                                        <div class="col-6 initial">
                                            <label for=""><span>*</span>Nome Completo
                                                <input type="text" class="form-input" required name="nome" id="nome" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-6 initial">
                                            <label for=""><span>*</span>CPF
                                                <input type="text" class="form-input" maxlength="11" required name="cpf" id="cpf" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')" >
                                            </label>
                                        </div>

                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>Endereço
                                                <input type="text" class="form-input" required name="endereco" id="endereco" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-4 initial">
                                            <label for=""><span>*</span>Estado
                                                <select name="estado_id" id="estado" class="form-input" required>
                                                    <option value="">Selecione ...</option>
                                                    @foreach($estado as $item)
                                                        <option value="{{ $item->estado_id }}">{{ $item->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>

                                        <div class="col-4 initial">
                                            <label for=""><span>*</span>Cidade
                                                <select name="cidade_id" id="cidade" class="form-input" readonly required>
                                                    <option value="">Selecione ...</option>
                                                </select>
                                            </label>
                                        </div>

                                        <div class="col-4 initial">
                                            <label for=""><span>*</span>Cargo
                                                <select name="cargo" id="cargo" class="form-input" required>
                                                    <option value="">Selecione ...</option>
                                                </select>
                                            </label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 right">
                                            <button class="primary" type="submit">Salvar Inscrição</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

@endsection

<script>

</script>
