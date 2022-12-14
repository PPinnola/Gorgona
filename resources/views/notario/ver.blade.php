<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/img/Logo.png') }}">
    <title>Gorgona</title>
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('extra-libs/prism/prism.css') }}">
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <div class="navbar-brand">
                            <!-- Logo icon -->
                            <a href="{{ route('notario.index') }}">
                                <b class="logo-icon">
                                    <!-- Dark Logo icon -->
                                    <img src="{{asset('images/logoGorgona.jpeg')}}" alt="homepage" style="width: 70%; height: 60p%;"/>
                                    <!-- Light Logo icon -->
                                    
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                    <!-- dark Logo text -->
                                    {{-- <img src="{{asset('images/logo-text.png')}}" alt="homepage" class="dark-logo" /> --}}
                                    <!-- Light Logo text -->
                                    {{-- <img src="{{asset('images/logo-light-text.png')}}" class="light-logo" alt="homepage" /> --}}
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    </ul>

                    <ul class="navbar-nav float-right">

                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('dist/img/PPT- Gorgona.png') }}" alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hola!</span>
                                <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    Cerrar sesi??n</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('notario.index') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Compraventas</span></a></li>
                        <li class="list-divider"></li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ACAAAA EMPIEZA EL CONTENIDO DE AL MEDIO  -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href={{ route ('notario.index')}} class="text-muted">Atr??s</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Ver documento</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header" style="background: linear-gradient(90deg, rgba(98,118,233,1) 0%, rgba(128,114,235,1) 45%, rgba(134,113,234,1) 71%);"></div>
                            <div class="card-body">
                                <!-- <h4 class="card-title mb-3">Generar una escritura</h4> -->
                                <!-- inicio del formulario -->
                                <!-- FIN DEL SEGUNDO -->
                                <div class="tab-pane" id="document1">
                                    <form method="POST" action="#" id="compraventaCreate" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h5 class="text-center mt-5">ESCRITURA DE COMPRAVENTA</h5>
                                            {{-- @foreach ($compraventas as $compraventas) --}}
                                            <p class="text-center" id="id1">{{ $compraventas->nombreVendedor }}</p>
                                            <p class="text-center">A</p>
                                            <p class="text-center" id="id2">{{ $compraventas->nombreComprador }}</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-justify">
                                                    En <b id="id3">{{ $compraventas->ciudadDoc }}</b>, Rep??blica de Chile, a <b id="id4">{{ $compraventas->fechaDoc }}</b>, ante m??, <b id="id5">{{ $compraventas->nombreNotarioDoc }}</b>, Abogado, Notario P??blico, con
                                                    oficio en calle
                                                    <b id="id6">{{ $compraventas->calleNotarioDoc}}</b> n??mero <b id="id7">{{ $compraventas->numeroCalleNotario }}</b>,
                                                    comparecen: don/??a <b id="id13">{{ $compraventas->nombreVendedor }}</b>, de
                                                    nacionalidad
                                                    <b id="id18">{{ $compraventas->nacionalidadVendedor }}</b>, estado civil <b id="id19">{{ $compraventas->estadoCivilVendedor }}</b>, profesi??n <b id="id20">{{ $compraventas->profesionVendedor }}</b>, c??dula nacional de identidad n??mero
                                                    <b id="id21">{{ $compraventas->rutVendedor }}</b>,
                                                    con domicilio en calle <b id="id22">{{ $compraventas->calleVendedor }}</b> n??mero <b id="id23">{{ $compraventas->numeroVendedor }}</b>, comuna de <b id="id24">{{ $compraventas->comunaVendedor }}</b>, en adelante
                                                    el ???vendedor???
                                                    y don/??a <b id="id26">{{ $compraventas->nombreComprador }}</b> 
                                                    , de nacionalidad
                                                    <b id="id31">{{ $compraventas->nacionalidadComprador }}</b>, estado civil <b id="id32">{{ $compraventas->estadoCivilComprador }}</b>, profesi??n <b id="id33">{{ $compraventas->profesionComprador }}</b>, c??dula nacional de identidad n??mero
                                                    <b id="id34">{{ $compraventas->rutComprador }}</b>,
                                                    con domicilio en calle <b id="id35">{{ $compraventas->calleComprador }}</b> n??mero <b id="id36">{{ $compraventas->numeroComprador }}</b>, comuna de <b id="id37">{{ $compraventas->comunaComprador }}</b>, en adelante
                                                    el ???comprador???, los comparecientes mayores de edad, quienes
                                                    acreditan su identidad con las c??dulas citadas y exponen que han
                                                    convenido el siguiente
                                                    contrato de compraventa:
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>PRIMERO:</b> Don/??a <b id="id80">{{ $compraventas->nombreVendedor }}</b>
                                                    es due??o/a del departamento ubicado en el edificio <b id="id39">{{ $compraventas->nombreEdificio }}</b>, calle <b id="id40">{{ $compraventas->calleEdificio}}</b>,
                                                    n??mero <b id="id41">{{ $compraventas->numeroEdificio }}</b>,
                                                    piso n??mero <b id="id42">{{ $compraventas->numeroPisoDpto }}</b>, departamento n??mero <b id="id43">{{ $compraventas->numeroDpto }}</b>, comuna de <b id="id44">{{ $compraventas->comunaDpto}}</b>,
                                                    individualizado en el plano agregado con el n??mero <b id="id46">{{ $compraventas->numeroPlanoDpto }}</b> del Registro de Documentos de <b id="id47">{{ $compraventas->numeroDocumentoDpto }}</b> y de los derechos
                                                    proporcionales en los bienes comunes. Los deslindes del inmueble
                                                    donde se levanta el edificio, seg??n plano agregado con el n??mero
                                                    <b id="id48">{{ $compraventas->numeroPlanoDpto }}</b> del Registro de Documentos de <b id="id49">{{ $compraventas->numeroDocumentoDpto }}</b> son: norte: <b id="id50">{{ $compraventas->coordenadaNorte }}</b> ; sur: <b id="id51">{{ $compraventas->coordenadaSur }}</b>
                                                    ; este: <b id="id52">{{ $compraventas->coordenadaEste }}</b> ; oeste: <b id="id53">{{ $compraventas->coordenadaOeste }}</b> .
                                                    La adquisici??n consta de la escritura p??blica correspondiente a
                                                    la inscripci??n de dominio de fojas <b id="id54">{{ $compraventas->dominioFojaDpto }}</b>,
                                                    n??mero <b id="id55">{{ $compraventas->numeroFojaDpto}}</b> del Registro de Propiedad del
                                                    Conservador de Bienes Ra??ces.

                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>SEGUNDO:</b> Por el presente instrumento don/??a <b id="id85"> {{ $compraventas->nombreVendedor }} </b>,
                                                    vende, cede y transfiere a don/??a <b id="id90"> {{ $compraventas->nombreComprador }} </b>,
                                                    quien compra, adquiere y acepta para s??, el inmueble
                                                    singularizado en la cl??usula primera del presente contrato.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>TERCERO:</b> El precio de la compraventa es la suma de
                                                    <b>{{ $compraventas->precioDpto }}</b>, que se pagan de la siguiente forma:<b> {{ $compraventas->metodoPagoDpto}}</b>.
                                                    Las partes vienen en renunciar expresamente a las acciones
                                                    resolutorias que pudieran emanar del presente contrato.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>CUARTO:</b> La venta, afecta a las normas del DFL dos de mil
                                                    novecientos cincuenta y nueve y a las normas sobre propiedad
                                                    horizontal,
                                                    se hace ad corpus, en el estado en que se encuentra la
                                                    propiedad, libre de hipotecas, grav??menes y prohibiciones,
                                                    respondiendo el vendedor
                                                    del saneamiento, conforme a la Ley.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>QUINTO:</b> Los gastos que origine la presente escritura
                                                    ser??n de cargo del comprador.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>SEXTO:</b> El portador de copia autorizada de la presente
                                                    escritura se encuentra facultado para requerir al Conservador de
                                                    Bienes
                                                    Ra??ces respectivo, las inscripciones, subinscripciones y
                                                    anotaciones que procedan y para que rectifique, complemente y/o
                                                    aclare la
                                                    presente escritura, respecto de cualquier error u omisi??n
                                                    existente en las cl??usulas relativas a la individualizaci??n de
                                                    las partes,
                                                    al inmueble objeto del presente contrato, sus deslindes y/o
                                                    inscripci??n de dominio, de acuerdo a sus t??tulos y/o
                                                    antecedentes anteriores
                                                    o actuales, como tambi??n de cualquier error u omisi??n de
                                                    cualquiera cl??usula no principal del contrato o requisito que
                                                    fuera necesario, a
                                                    juicio del Conservador de Bienes Ra??ces respectivo, para
                                                    inscribir adecuadamente el dominio a nombre de la parte
                                                    compradora. El mandatario
                                                    queda especialmente facultado para suscribir todos los
                                                    instrumentos p??blicos y/o privados necesarios para el
                                                    cumplimiento de su cometido.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>S??PTIMO:</b> La entrega material del departamento vendido se
                                                    efect??a en este acto.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>OCTAVO:</b> Por el presente instrumento, las partes se dan el
                                                    m??s amplio y completo finiquito respecto de cualquiera promesa
                                                    de
                                                    compraventa que hubiesen celebrado en relaci??n con la propiedad
                                                    objeto del presente contrato.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>NOVENO:</b> Declaran los comparecientes que los datos
                                                    suministrados o proporcionados acerca de su identidad,
                                                    actividades o
                                                    estados de situaci??n o patrimonio, les corresponden y son
                                                    verdaderos.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>D??CIMO:</b> Para todos los efectos derivados del presente
                                                    contrato las partes someten a
                                                    la
                                                    jurisdicci??n de sus Tribunales.
                                                    En comprobante y previa lectura firman los comparecientes
                                                    conjuntamente con el Notario que autoriza.
                                                </li>

                                            </ul>
                                            {{-- @endforeach --}}

                                        </div>

                                        <div class="card-footer" style="background: linear-gradient(90deg, rgba(98,118,233,1) 0%, rgba(128,114,235,1) 45%, rgba(134,113,234,1) 71%);"></div>
                                        <br>
                                    <div class="form-actions">
                                            <div class="text-right">
                                                @php
                                                if($boton == "noFirmado"){
                                                @endphp
                                                <a href="{{ route('notario.rechazar',$compraventas->idDocumento) }}" class="btn btn-rounded btn-danger" >Rechazar</a>
                                                <a href="{{ route('notario.firmar',$compraventas->idDocumento) }}" class="btn btn-rounded btn-success">Firmar Documento</a>
                                                
                                               @php
                                                }
                                                @endphp
                                            </div>
                                        </div>
                                     
                                    </form>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                            <!-- FIN DEL TERCERO -->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                    <div class="col-md-2">
                        @php
                        if($compraventas->numeroFojaActual == ""){
                            $nfoja = "xxxxx";
                            $ndoc = "xxxxx";
                        }else{
                            $nfoja = $compraventas->numeroFojaActual;
                            $ndoc = $compraventas ->dominioFojaActual;
                        }
                         @endphp
                        <div class="card ">
                            <div class="card-header" style="background: linear-gradient(90deg, rgba(98,118,233,1) 0%, rgba(128,114,235,1) 45%, rgba(134,113,234,1) 71%);"></div>
                            <div class="card-body">
                                <p class="text-center"><b>Datos inscripci??n del documento</b></p>
                                <p>N?? de Foja: <br>  {{$nfoja}}  </p>
                                <p>N?? de documento: <br> {{$ndoc}} </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row-->

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
            All Rights Reserved by Gorgona</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!-- This Page JS -->
    <script src="{{ asset('extra-libs/prism/prism.js') }}"></script>
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>







</body>




</html>