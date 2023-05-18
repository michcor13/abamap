@extends('layouts.app')
@section('content')
    <section class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <h2 class="text-center">Contacta con nosotros</h2>
                <form method="post" action="{{route('send.mail')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="material">Material</label>
                        <select class="form-select" name="material" id="material">
                            <option></option>
                            <option value="Acético">Acético</option>
                            <option value="Cítrico">Cítrico</option>
                            <option value="Fumárico">Fumárico</option>
                            <option value="Láctico">Láctico</option>
                            <option value="Málico">Málico</option>
                            <option value="Ascórbico">Ascórbico</option>
                            <option value="Sórbico">Sórbico</option>
                            <option value="Tartárico">Tartárico</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                    </div>
                    <div class="row row-sm justify-content-center">
                        <div class="col-4 text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@stop
