@extends('layouts.app', ['pageSlug' => 'login'])


@section('content')
                    <div class="row">
                        <div class="container">
                            <div class="container-header">
                                <div class="text-center" >
                                    <h3 style="color: #ff05f7">Concurso Público Disponiveis</h3>
                                </div>
                                <div class="text-center shadow">
                                    <h4>Login do Candidato</h4>
                                </div>
                            </div>

                            <div class="container-body" style="justify-content: center;">
                            <form action="{{ route('login.store'); }}" method="post">
                                    <div class="row">
                                        <hr>
                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>Email
                                                <input type="email" class="form-input" required name="email" id="email" oninvalid="this.setCustomValidity('Por favor, entre com um email')" oninput="setCustomValidity('')" >
                                            </label>
                                        </div>

                                        <div class="col-12 initial">
                                            <label for=""><span>*</span>Senha
                                                <input type="password" class="form-input" required name="password" id="password">
                                            </label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6 initial">
                                            <a class="secondary" href="{{ route('registrar') }}" type="submit">Registrar-se</a>
                                        </div>
                                        <div class="col-6 right">
                                            <button class="primary" type="submit">Entrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

@endsection
