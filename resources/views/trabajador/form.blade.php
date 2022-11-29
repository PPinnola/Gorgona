<div class="box box-info padding-1">
 <!-- ** PROPIEDAD * -->
 <div class="card">
    <div class="card-header">
        Datos del inmuble
    </div>

    <div class="card-body">
        <!-- <blockquote class="blockquote mb-0"> -->
        <h6>Dirección</h6>
        <br>

        <!-- ** Comprador * -->
        <div class="box-body" style="font-size: 13px">
            {{-- EDIFICIO --}}
            <div class="form-row">

                <div class="form-group col-md-12">
                    {{ Form::label('Nombre del edificio') }}
                    {{ Form::text('nombreUsuario', '', ['class' => 'form-control' . ($errors->has('nombreUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('nombreUsuario', '<label class="invalid-feedback">Ingrese un nombre válido</label>') !!}

                </div>
            </div>

            {{-- CALLE Y NUMEROS --}}
            <div class="form-row">
                <div class="form-group col-md-8">
                    {{ Form::label('Calle del edificio') }}
                    {{ Form::text('primerApellidoUsuario', '', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('primerApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-2">
                    {{ Form::label('Numero del edificio') }}
                    {{ Form::text('segundoApellidoUsuario','', ['class' => 'form-control' . ($errors->has('segundoApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('segundoApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-2">
                    {{ Form::label('Numero de departamento') }}
                    {{ Form::text('segundoApellidoUsuario', '',['class' => 'form-control' . ($errors->has('segundoApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('segundoApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
            </div>
            <hr>

            <h6>Documentación</h6>
            <br>
            {{-- Registro del documento, numero de decoumentos --}}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('Registro del documento') }}
                    {{ Form::text('primerApellidoUsuario','', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('primerApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('Numero de documento') }}
                    {{ Form::text('segundoApellidoUsuario', '',['class' => 'form-control' . ($errors->has('segundoApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('segundoApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('Numero de Plano') }}
                    {{ Form::text('segundoApellidoUsuario','', ['class' => 'form-control' . ($errors->has('segundoApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('segundoApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
            </div>
            <hr>

            <h6>Coordenadas</h6>
            <br>

            {{-- NACIONALIDAD Y ESTADO CIVIL --}}
            <div class="form-row">
                <div class="form-group col-md-3">
                    {{ Form::label('Norte') }}
                    {{ Form::text('NacionalidadComprador','', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('NacionalidadComprador', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('Sur') }}
                    {{ Form::text('NacionalidadComprador','', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('NacionalidadComprador', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('Este') }}
                    {{ Form::text('NacionalidadComprador','', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('NacionalidadComprador', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('Oeste') }}
                    {{ Form::text('NacionalidadComprador', '',['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('NacionalidadComprador', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
            </div>
            <br>

            <div class="box-footer mt20">
                <button type="submit" class="btn" style="background: #99c1de">Guardar</button>
            </div>

        </div>

        <footer class="blockquote-footer">Guardar datos del inmueble <cite title="Source Title"></cite></footer>
        <!-- </blockquote> -->
    </div>
</div>

<!-- ** VENDEDOR * -->
<div class="card">
    <div class="card-header">
        Datos Vendedor
    </div>
    <div class="card-body">
        <!-- <blockquote class="blockquote mb-0"> -->

        <!-- ** Comprador * -->
        <div class="box-body" style="font-size: 13px">
            {{-- PRIMER NOMBRE Y SEGUNDO NOMBRE --}}
            <div class="form-row">


                <div class="form-group col-md-6">
                    {{ Form::label('Primer nombre') }}
                    {{ Form::text('nombreUsuario','', ['class' => 'form-control' . ($errors->has('nombreUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('nombreUsuario', '<label class="invalid-feedback">Ingrese un nombre válido</label>') !!}

                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('Segundo nombre') }}
                    {{ Form::text('nombreUsuario','', ['class' => 'form-control' . ($errors->has('nombreUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('nombreUsuario', '<label class="invalid-feedback">Ingrese un nombre válido</label>') !!}

                </div>
            </div>

            {{-- PRIMER APELLIDO Y SEGUNDO APELLIDO --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('Primer apellido') }}
                    {{ Form::text('primerApellidoUsuario', '',['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('primerApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('Segundo apellido') }}
                    {{ Form::text('segundoApellidoUsuario','', ['class' => 'form-control' . ($errors->has('segundoApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('segundoApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
            </div>

            {{-- NACIONALIDAD Y ESTADO CIVIL --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('NacionalidadComprador') }}
                    {{ Form::text('NacionalidadComprador','', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('NacionalidadComprador', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>

                <div class="form-group col-md-6">
                    <label>Estado</label>
                    <select class="form-control" id="estadocivil" name="estado" required focus>

                        <option value="0" disabled selected> Estado civil </option>
                        <option value="1"> Soltero/a</option>
                        <option value="2"> Casado/a</option>
                        <option value="3"> Viudo/a</option>
                        <option value="4"> Conviviente civil</option>
                    </select>
                    {!! $errors->first('estadocivil', '<label class="invalid-feedback">Debe elegir un elemento de la lista</label>') !!}
                </div>
            </div>

            {{-- RUT Y ....--}}
            <div class="form-row">

                <div class="form-group col-md-6">
                    {{ Form::label('RUT') }}
                    {{ Form::text('rutUsuario', '',['oninput="checkRut(this)"','class' => 'form-control' . ($errors->has('rutUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('rutUsuario', '<label class="invalid-feedback">El RUT ya existe</label>') !!}
                </div>

            </div>

            {{-- EMAIL Y CONTRASEÑA --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('Email') }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>

                        {{ Form::text('email','', ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                        {!! $errors->first('email', '<label class="invalid-feedback">Ingrese un formato válido de correo</label>') !!}
                    </div>
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('Contrasena') }}
                    {{ Form::text('contrasena','', ['type=password' ,'class' => 'form-control' . ($errors->has('contrasena') ? ' is-invalid' : ''), 'placeholder' => 'Debe ingresar una contraseña', 'required']) }}
                    {!! $errors->first('contrasena', '<label class="invalid-feedback">La contraseña debe tener al menos 6 dígitos, una mayúscula, una minúscula y uno de estos caracteres: "@$!%*#?&_"</label>') !!}
                </div>
            </div>

            <hr>
            <h6 align-center;>Domicilio</h6>

            {{-- DIRECCIÓN --}}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('Calle') }}
                    {{ Form::text('domicilio','', ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('domicilio', '<label class="invalid-feedback">Ingrese un domicilio válido</label>') !!}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('Numero') }}
                    {{ Form::text('domicilio','', ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('domicilio', '<label class="invalid-feedback">Ingrese un domicilio válido</label>') !!}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('Comuna') }}
                    {{ Form::text('domicilio', '',['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('domicilio', '<label class="invalid-feedback">Ingrese un domicilio válido</label>') !!}
                </div>

            </div>

            <hr>

            <div class="box-footer mt20">
                <button type="submit" class="btn" style="background: #99c1de">Enviar</button>
            </div>

        </div>

        <footer class="blockquote-footer">Guardar datos del vendedor <cite title="Source Title"></cite></footer>
        <!-- </blockquote> -->
    </div>
</div>


<!-- ** COMPRADOR * -->
<div class="card">
    <div class="card-header">
        Datos Comprador
    </div>
    <div class="card-body">
        <!-- <blockquote class="blockquote mb-0"> -->

        <!-- ** Comprador * -->
        <div class="box-body" style="font-size: 13px">
            {{-- PRIMER NOMBRE Y SEGUNDO NOMBRE --}}
            <div class="form-row">


                <div class="form-group col-md-6">
                    {{ Form::label('Primer nombre') }}
                    {{ Form::text('nombreUsuario','', ['class' => 'form-control' . ($errors->has('nombreUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('nombreUsuario', '<label class="invalid-feedback">Ingrese un nombre válido</label>') !!}

                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('Segundo nombre') }}
                    {{ Form::text('nombreUsuario','', ['class' => 'form-control' . ($errors->has('nombreUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('nombreUsuario', '<label class="invalid-feedback">Ingrese un nombre válido</label>') !!}

                </div>
            </div>

            {{-- PRIMER APELLIDO Y SEGUNDO APELLIDO --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('Primer apellido') }}
                    {{ Form::text('primerApellidoUsuario','', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('primerApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('Segundo apellido') }}
                    {{ Form::text('segundoApellidoUsuario','', ['class' => 'form-control' . ($errors->has('segundoApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('segundoApellidoUsuario', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>
            </div>

            {{-- NACIONALIDAD Y ESTADO CIVIL --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('NacionalidadComprador') }}
                    {{ Form::text('NacionalidadComprador','', ['class' => 'form-control' . ($errors->has('primerApellidoUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('NacionalidadComprador', '<label class="invalid-feedback">Ingrese un apellido válido (sin caracteres especiales)</label>') !!}
                </div>

                <div class="form-group col-md-6">
                    <label>Estado</label>
                    <select class="form-control" id="estadocivil" name="estado" required focus>

                        <option value="0" disabled selected> Estado civil </option>
                        <option value="1"> Soltero/a</option>
                        <option value="2"> Casado/a</option>
                        <option value="3"> Viudo/a</option>
                        <option value="4"> Conviviente civil</option>
                    </select>
                    {!! $errors->first('estadocivil', '<label class="invalid-feedback">Debe elegir un elemento de la lista</label>') !!}
                </div>
            </div>

            {{-- RUT Y ....--}}
            <div class="form-row">

                <div class="form-group col-md-6">
                    {{ Form::label('RUT') }}
                    {{ Form::text('rutUsuario','', ['oninput="checkRut(this)"','class' => 'form-control' . ($errors->has('rutUsuario') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('rutUsuario', '<label class="invalid-feedback">El RUT ya existe</label>') !!}
                </div>

            </div>

            {{-- EMAIL Y CONTRASEÑA --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('Email') }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>

                        {{ Form::text('email','', ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                        {!! $errors->first('email', '<label class="invalid-feedback">Ingrese un formato válido de correo</label>') !!}
                    </div>
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('Contrasena') }}
                    {{ Form::text('contrasena','', ['type=password' ,'class' => 'form-control' . ($errors->has('contrasena') ? ' is-invalid' : ''), 'placeholder' => 'Debe ingresar una contraseña', 'required']) }}
                    {!! $errors->first('contrasena', '<label class="invalid-feedback">La contraseña debe tener al menos 6 dígitos, una mayúscula, una minúscula y uno de estos caracteres: "@$!%*#?&_"</label>') !!}
                </div>
            </div>

            <hr>
            <h6 align-center;>Domicilio</h6>

            {{-- DIRECCIÓN --}}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('Calle') }}
                    {{ Form::text('domicilio','', ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('domicilio', '<label class="invalid-feedback">Ingrese un domicilio válido</label>') !!}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('Numero') }}
                    {{ Form::text('domicilio','', ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('domicilio', '<label class="invalid-feedback">Ingrese un domicilio válido</label>') !!}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('Comuna') }}
                    {{ Form::text('domicilio','', ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => '', 'required']) }}
                    {!! $errors->first('domicilio', '<label class="invalid-feedback">Ingrese un domicilio válido</label>') !!}
                </div>

            </div>

            <hr>

            <div class="box-footer mt20">
                <button type="submit" class="btn" style="background: #99c1de">Guardar</button>
            </div>

        </div>

        <footer class="blockquote-footer">Guardar datos del comprador <cite title="Source Title"></cite></footer>
        <!-- </blockquote> -->
    </div>
</div>


<!-- ** CONTRATO ** -->
<div class="card">
    <!-- <img src=" ..." class="card-img-top" alt="..."> -->
    <div class="card-body">
        <h5 class="card-title">ESCRITURA DE COMPRAVENTA</h5>
        <p class="card-text">xxx</p>
        <p class="card-text">A</p>
        <p class="card-text">xxx</p>

    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            En <b>xxx</b>, República de Chile, a <b>xxx</b> de <b>xxx</b> de dos mil <b>xxx</b>, ante mí, <b>xxx</b>, Abogado, Notario Público, con oficio en calle <b>xxx</b> número <b>xxx</b>, comuna de <b>xxx</b>, Titular de la <b>xxx</b> Notaría de <b>xxx</b>, comparecen: don/ña <b>xxx</b>, de nacionalidad <b>xxx</b>, estado civil <b>xxx</b>, profesión <b>xxx</b>, cédula nacional de identidad número <b>xxx</b>, con domicilio en calle <b>xxx</b> número <b>xxx</b>, comuna de <b>xxx</b>, ciudad de <b>xxx</b>, en adelante el “vendedor” y don/ña <b>xxx</b>, de nacionalidad <b>xxx</b>, estado civil <b>xxx</b>, profesión <b>xxx</b>, cédula nacional de identidad número <b>xxx</b>, con domicilio en calle <b>xxx</b> número <b>xxx</b>, comuna de <b>xxx</b>, ciudad de <b>xxx</b>, en adelante el “comprador”, los comparecientes mayores de edad, quienes acreditan su identidad con las cédulas citadas y exponen que han convenido el siguiente contrato de compraventa:
        </li>
        <li class="list-group-item">
            <b>PRIMERO:</b> Don/ña <b>xxx</b> es dueño/a del departamento ubicado en el edificio <b>xxx</b>, calle XXX, número <b>xxx</b>, piso número <b>xxx</b>, departamento número <b>xxx</b>, comuna de <b>xxx</b>, ciudad de <b>xxx</b>., individualizado en el plano agregado con el número <b>xxx</b> del Registro de Documentos de <b>xxx</b> y de los derechos proporcionales en los bienes comunes. Los deslindes del inmueble donde se levanta el edificio, según plano agregado con el número <b>xxx</b> del Registro de Documentos de <b>xxx</b> son: norte: <b>xxx</b> ; sur: <b>xxx</b> ; este: <b>xxx</b> ; oeste: <b>xxx</b> .
            Lo adquirió por compra a don/ña <b>xxx</b>, según consta de la escritura pública extendida con fecha <b>xxx</b>, ante Notario Público de XXX don/ña <b>xxx</b>, habiéndose practicado la correspondiente inscripción de dominio a fojas <b>xxx</b>, número <b>xxx</b> del Registro de Propiedad del Conservador de Bienes Raíces de <b>xxx</b>, correspondiente al año <b>xxx</b>.
        </li>
        <li class="list-group-item">
            <b>SEGUNDO:</b> Por el presente instrumento don/ña <b> xxx </b>, vende, cede y transfiere a don/ña <b> xxx </b>, quien compra, adquiere y acepta para sí, el inmueble singularizado en la cláusula primera del presente contrato.
        </li>
        <li class="list-group-item">
            <b>TERCERO:</b> El precio de la compraventa es la suma de <b>xxx</b>, que se pagan de la siguiente forma:<b> xxx</b>.
            Las partes vienen en renunciar expresamente a las acciones resolutorias que pudieran emanar del presente contrato.
        </li>
        <li class="list-group-item">
            <b>CUARTO:</b> La venta, afecta a las normas del DFL dos de mil novecientos cincuenta y nueve y a las normas sobre propiedad horizontal, se hace ad corpus, en el estado en que se encuentra la propiedad, libre de hipotecas, gravámenes y prohibiciones, respondiendo el vendedor del saneamiento, conforme a la Ley.
        </li>
        <li class="list-group-item">
            <b>QUINTO:</b> Los gastos que origine la presente escritura serán de cargo del comprador.
        </li>
        <li class="list-group-item">
            <b>SEXTO:</b> El portador de copia autorizada de la presente escritura se encuentra facultado para requerir al Conservador de Bienes Raíces respectivo, las inscripciones, subinscripciones y anotaciones que procedan y para que rectifique, complemente y/o aclare la presente escritura, respecto de cualquier error u omisión existente en las cláusulas relativas a la individualización de las partes, al inmueble objeto del presente contrato, sus deslindes y/o inscripción de dominio, de acuerdo a sus títulos y/o antecedentes anteriores o actuales, como también de cualquier error u omisión de cualquiera cláusula no principal del contrato o requisito que fuera necesario, a juicio del Conservador de Bienes Raíces respectivo, para inscribir adecuadamente el dominio a nombre de la parte compradora. El mandatario queda especialmente facultado para suscribir todos los instrumentos públicos y/o privados necesarios para el cumplimiento de su cometido.
        </li>
        <li class="list-group-item">
            <b>SÉPTIMO:</b> La entrega material del departamento vendido se efectúa en este acto.
        </li>
        <li class="list-group-item">
            <b>OCTAVO:</b> Por el presente instrumento, las partes se dan el más amplio y completo finiquito respecto de cualquiera promesa de compraventa que hubiesen celebrado en relación con la propiedad objeto del presente contrato.
        </li>
        <li class="list-group-item">
            <b>NOVENO:</b> Declaran los comparecientes que los datos suministrados o proporcionados acerca de su identidad, actividades o estados de situación o patrimonio, les corresponden y son verdaderos.
        </li>
        <li class="list-group-item">
            <b>DÉCIMO:</b> Para todos los efectos derivados del presente contrato las partes fijan domicilio en <b>xxx</b> y se someten a la jurisdicción de sus Tribunales.
            En comprobante y previa lectura firman los comparecientes conjuntamente con el Notario que autoriza.
        </li>

    </ul>
    <div class="card-body">
        <div class="box-footer mt20">
            <button type="submit" class="btn" style="background: #99c1de">Guardar</button>
        </div>
        <footer class="blockquote-footer">Una vez guardado, no se podrá modificar el documento <cite title="Source Title"></cite></footer>
        
    </div>
</div>

</div>


<script>
function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.', '');
    // Despejar Guión
    valor = valor.replace('-', '');

    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0, -1);
    dv = valor.slice(-1).toUpperCase();

    // Formatear RUN
    rut.value = cuerpo + '-' + dv

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if (cuerpo.length < 7) {
        rut.setCustomValidity("RUT Incompleto");
        return false;
    }

    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;

    // Para cada dígito del Cuerpo
    for (i = 1; i <= cuerpo.length; i++) {

        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if (multiplo < 7) {
            multiplo = multiplo + 1;
        } else {
            multiplo = 2;
        }

    }

    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    dv = (dv == 'K') ? 10 : dv;
    dv = (dv == 0) ? 11 : dv;

    // Validar que el Cuerpo coincide con su Dígito Verificador
    if (dvEsperado != dv) {
        rut.setCustomValidity("RUT Inválido");
        return false;
    }

    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}
</script>

<!-- * PASAR EL INPUT AL CONTRATO * -->
<script>

</script>