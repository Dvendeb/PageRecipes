@extends('layout.layoutPublic')

@section('titulo')
    <title>Registrarse</title>
@endsection
@section('css')
@endsection

@section('contenido')
    <div class="container">
        <main>
            <div class="col-md-7 col-lg-8 mx-auto mt-3">
                <h4 class="mb-3">Inicio Sesión</h4>
                <form class="needs-validation" method="post" action="{{route('signInAdmin')}}">
                    {{csrf_field()}}
                    <label class="text-danger">
                        @if(isset($status))
                            {{mensaje}}
                        @endif
                    </label>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="username" placeholder="Username" required>
                                <div class="invalid-feedback">
                                    Es obligatorio llenar este campo.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Contraseña</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="password" placeholder="******" required>
                                <div class="invalid-feedback">
                                    Es obligatorio llenar este campo.
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">

                    <button class="w-100 btn bg-turqueza text-white btn-lg" type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </main>
    </div>
@endsection

@section('js')
@endsection
