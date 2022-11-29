@extends('layouts.plantilla')

@section('migadepan')
    <li class="breadcrumb-item "><a href="{{ route('trabajador.index') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Crear compraventa</li>
@endsection


@section('content')
    <section class="content-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-header" style="background-color: #11153A">
                      <div class="float-left">
                        <span class="card-title h4" style="color: white">CREAR COMPRAVENTA</span>
                      </div>
                        
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('compraventa.submit') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('trabajador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection