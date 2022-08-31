@extends('layouts.app')



@section('content')
                    <div class="row">
                        <div class="container">
                            <div class="container-header">
                                <div class="text-center" >
                                    <h3 style="color: #ff05f7">Concurso Público</h3>
                                </div>

                                <div class="text-center shadow">
                                    <h4>Cadastro de Concurso</h4>
                                </div>
                            </div>

                            <div class="container-body" style="justify-content: center;">
                                <form action="{{ route('concurso.store'); }}" method="post">
                                    <div class="row">
                                        <hr>
                                        <div class="col-6 initial">
                                            <label for=""><span>*</span>Cargo
                                                <input type="text" class="form-input" required name="cargo" id="cargo" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-6 initial">
                                            <label for=""><span>*</span>Quantidade de Vagas
                                                <input type="text" class="form-input" required name="vagas" id="vagas" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>Observação
                                                <input type="text" class="form-input" required name="observacao" id="observacao" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')" oninput="setCustomValidity('')">
                                            </label>
                                        </div>

                                        <div class="col-4 initial">
                                            <label for=""><span>*</span>Estado
                                                <select name="estado" id="estado" class="form-input" required>
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

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 right">
                                            <button class="primary" type="submit">Salvar Concurso</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

@endsection



