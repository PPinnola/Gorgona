@extends('layouts.app')

@section('content')

    <section class="vh-100" style=" background-image: radial-gradient(circle at 67.21% 79.81%, #009ce3 0, #00699b 25%, #0c3956 50%, #000d1a 75%, #000000 100%);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="dist/img/Contrato.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form>
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="dist/img/Logo.png" alt="login form" class="img-fluid" width="7%" />
                                            <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                                            <span class="h1 fw-bold mb-0" style="margin-left: 20px;"> <a href="{{ route('welcome') }}" style="text-decoration: none; color:#0c3956">GORGONA</a></span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entra a tu cuenta</h5>

                                        @csrf
                                        <div class="form-outline mb-4" id="frm_cedula">
                                        <label class="form-label" for="form2Example17">Cedula de identidad</label>
                                            <input type="text" name="cedula" id="cedula" class="form-control form-control-lg" />
                                            <div class="invalid-feedback"></div>

                                        </div>

                                        <div class="form-outline mb-4" id="frm_password">
                                        <label class="form-label " for="form2Example27">Contraseña</label>
                                            <input type="password" name="password" id="password" class="form-control  form-control-lg @error('password') is-invalid @enderror" required  />
                                            <div class="invalid-feedback"></div>
                                            
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="button" class="btn btn-primary" onclick="Login()" id="btn-login">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scriptfooter')
<script src="{{asset('dist/js/rut.js')}}"></script>
<!-- sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

   /* Verifico si el rut es válido o no */
   $('#cedula').rut({ formatOn: 'keyup', validateOn: 'change' })
    .on('rutInvalido', function () {
        $('#cedula').addClass('is-invalid');
        $("#frm_cedula > div").html('El rut ingresado no existe');
        rutOk = false;
    })
    .on('rutValido', function () {
        $('#cedula').removeClass('is-invalid');
        $('#cedula').addClass('is-valid');
        rutOk = true;
    
    });

function validarCampos() {
   
    contador = 2;
    cedula = $('#cedula').val();
    password = $('#password').val();

    if(cedula === "" && password ===""){
        $("#cedula").addClass("is-invalid");
        $("#frm_cedula > div").html('Campo obligatorio');
        $('#password').addClass('is-invalid');
        $("#frm_password > div").html('Campo obligatorio');
        contador = 1;
    }

    if(cedula === "" && password !=""){
        $("#cedula").addClass("is-invalid");
        $("#frm_cedula > div").html('Campo obligatorio');
        $('#password').removeClass('is-invalid');
        contador = 1;
    }

    if(cedula !=""){
        if(rutOk === false){
            $('#cedula').addClass('is-invalid');
            $("#frm_cedula > div").html('El rut ingresado no existe');
            contador = 1;
        }else if(rutOk === true){
            $('#cedula').removeClass('is-invalid');
            contador = 0;
        }
    }
    if(password===""){
        $('#password').addClass('is-invalid');
        $("#frm_password > div").html('Campo obligatorio');
        contador = 1;
    }  
    return contador;  
    }
    
function Login(){
    valido = validarCampos();
    
    if(valido == 0){
        // elimino los invalid del formulario
        $('#cedula').removeClass('is-invalid');
        $('#password').removeClass('is-invalid');
        $.ajax({
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            },
            type: "POST",
            url: '{{ route('login') }}', // ruta del documento
            dataType: 'json',
            data: {
                cedula: $('#cedula').val(),
                password: $('#password').val(),
            }, 
            success: (result) => { // el 200 es el status de correcto NECESITO QUE ME ENVIES ESTE POR BACKEND UN 200 SI ESTA CORRECTO
                    $url = result.data
                    window.location.replace($url);
            },
            error: (result) => {
            switch(result.status) {
                case 400:
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El usuario no esta registrado en el sistema!'
                    
                })
                $('#cedula').val("").focus();
                $('#password').val("");
                $('#cedula').removeClass('is-invalid');
                $('#password').removeClass('is-invalid');
                $('#cedula').removeClass('is-valid');
                    break;
                case 401:
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error en las credenciales!'
                    
                })
                $('#cedula').val("").focus();
                $('#password').val("");
                $('#cedula').removeClass('is-invalid');
                $('#password').removeClass('is-invalid');
                $('#cedula').removeClass('is-valid');
                    break;
                default:
                    console.log("fallo al inicio de sesión");
                }
            }
            
        });
    }

}



</script>

@endsection

