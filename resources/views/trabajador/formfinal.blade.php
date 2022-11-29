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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Gorgona</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Custom CSS -->
    <!-- <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" /> -->
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">

    <!-- sweet alert -->
    <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.6/sweetalert2.min.js">

    <link rel="stylesheet" src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">



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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <div class="navbar-brand">
                            <!-- Logo icon -->
                            <a href="{{ route('cliente.index') }}">
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
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- create new -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('dist/img/PPT- Gorgona.png') }}" alt="user"
                                    class="rounded-circle" width="40">
                                    <span class="ml-2 d-none d-lg-inline-block"><span>Hola!</span> <span
                                    class="text-dark">{{ session()->get('nombreUsuario') }}</span> <i data-feather="chevron-down"
                                    class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="<?php echo (route('logout')); ?>"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Cerrar sesión</a>
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
                        <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li> -->

                        <li class="nav-small-cap"><span class="hide-menu">Escrituras</span></li>

                        <li class="sidebar-item selected"> <a class="sidebar-link sidebar-link active" href="{{ route('trabajador.index') }}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Generar Escritura
                                </span></a>
                        </li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Chat</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li> -->
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
            <!-- es el Bread crumb -->
            <!-- ============================================================== -->
            <!-- <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium" style="margin-bottom:0 ;">Buen día Jason!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" style="margin-bottom: 0;">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid donde va toda la información del centro -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <div class="row mt-0">
                    <!-- columna de los formularios -->
                    <div class="col-md-5">
                        <div class="card">
                            
                            <!-- card-body de vendedor -->
                            <div class="card-body" id="card-body_vendedor">
                                <h4 class="card-title">Datos del vendedor</h4>
                                <h6 class="card-subtitle">Pulse la lupa luego de ingresar el rut de quien vende la
                                    propiedad.</h6>
                                <!-- formulario con los datos del Vendedor -->
                                <form action="#" id="formVendedor">
                                    @csrf
                                    <div class="form-body">
                                        <!-- Rut del vendedor -->
                                        <label>Rut</label>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group" id="frm_rutVendedor">
                                                    <input type="text" class="form-control" id="rutVendedor"
                                                        aria-describedby="name" placeholder="Ingrese rut">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        onclick="BuscarVendedor()" id="searchVendedor"><i
                                                            class="fas fa-search"></i> Buscar
                                                    </button>
                                                </div>

                                            </div>
                                        </div> <!-- fin del row -->

                                        <div id="datosVendedor">
                                            <!-- Nombre Completo Vendedor -->
                                            <label>Nombre completo</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="frm_nombreVendedor">
                                                        <input type="text" class="form-control" id="nombreVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->


                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- Estado civil y nacionalidad vendedor -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_nacionalidadVendedor">
                                                        <label>Nacionalidad</label>
                                                        <input type="text" class="form-control" placeholder="Chilena"
                                                            id="nacionalidadVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_estadoCivilVendedor">
                                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Estado
                                                            civil</label>
                                                        <div class="invalid-feedback"></div>
                                                        <select class="custom-select mr-sm-2 text-black"
                                                            id="estadoCivilVendedor" style="color: black;">
                                                            <option value="0" hidden>Seleccione...</option>
                                                            <option value="Soltero/a">Soltero/a</option>
                                                            <option value="Casado/a">Casado/a</option>
                                                            <option value="Viudo/a">Viudo/a</option>
                                                            <option value="Divorciado/a">Divorciado/a</option>
                                                            <option value="Conviviente Civil">Conviviente Civil</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- Fecha de nacimiento y profesión vendedor -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_fechaNacimientoVendedor">
                                                        <label>Fecha de nacimiento</label>
                                                        <input type="date" class="form-control"
                                                            id="fechaNacimientoVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_telefonoVendedor">
                                                        <label>Teléfono/Celular</label>
                                                        <input type="tel" class="form-control"
                                                            placeholder="1-(444)-444-4445" id="telefonoVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>

                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- Profesión-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="frm_profesionVendedor">
                                                        <label>Profesión</label>
                                                        <input type="text" class="form-control" id="profesionVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- correo electrónico-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="frm_">
                                                        <label>Correo electrónico</label>
                                                        <input type="email" class="form-control" id="correoVendedor"
                                                            placeholder="abc@example.com">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                            <hr>
                                            <label>Dirección</label>
                                            <!-- calle y número -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_calleVendedor">
                                                        <label>Calle</label>
                                                        <input type="text" class="form-control" id="calleVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_numeroVendedor">
                                                        <label>Número</label>
                                                        <input type="text" class="form-control" id="numeroVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- comuna y ciudad vendedor -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_comunaVendedor">
                                                        <label>Comuna</label>
                                                        <input type="text" class="form-control" id="comunaVendedor">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_ciudadVendedor">
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                        </div>
                                        <div class="form-actions">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-dark"
                                                    onclick="LimpiarDatosVendedor()" id="btnLimpiarVendedor"> <i
                                                        class="fas fa-eraser"></i> Limpiar</button>
                                                        <button type="button" class="btn btn-info"
                                                    onclick="BotonCrearVendedor()" id="btnCrearVendedor" style="display:none">
                                                    Registrar  </button>
                                                <button type="button" class="btn btn-info"
                                                    onclick="BotonSiguienteVendedor()" id="btnSiguienteVendedor">
                                                    Siguiente <i class="fas fa-arrow-right"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                </form> <!-- fin del form -->
                            </div> <!-- fin del card-body del vendedor -->

                            <!-- --------------------------------------------------------------- -->
                            <!-- --------------------------------------------------------------- -->

                            <!-- card-body del comprador -->
                            <div class="card-body" id="card-body_comprador">
                                <h4 class="card-title">Datos del Comprador</h4>
                                <h6 class="card-subtitle">Pulse la lupa luego de ingresar el rut de quien comprará el
                                    departamento</h6>
                                <!-- formulario con los datos del comprador -->
                                <form action="#">
                                    @csrf
                                    <div class="form-body">
                                        <!-- Rut del comprador -->
                                        <label>Rut</label>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group" id="frm_rutComprador">
                                                    <input type="text" class="form-control" id="rutComprador"
                                                        aria-describedby="name" placeholder="Ingrese rut">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        onclick="BuscarComprador()" id="searchComprador"><i
                                                            class="fas fa-search"></i> Buscar
                                                    </button>
                                                </div>
                                            </div>
                                        </div> <!-- fin del row -->

                                        <div id="datosComprador">

                                            <!-- Nombre Completo comprador -->
                                            <label>Nombre completo</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="frm_nombreComprador">
                                                        <input type="text" class="form-control" id="nombreComprador">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- Estado civil y nacionalidad comprador -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_nacionalidadComprador">
                                                        <label>Nacionalidad</label>
                                                        <input type="text" class="form-control" placeholder="Chilena"
                                                            id="nacionalidadComprador">
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_estadoCivilComprador">
                                                        <label class="mr-sm-2" for="estadoCivilComprador">Estado
                                                            civil</label>
                                                            <div class="invalid-feedback"></div>
                                                        <select class="custom-select mr-sm-2" id="estadoCivilComprador"
                                                            style="color: black;">
                                                            <option selected>Seleccione...</option>
                                                            <option value="Soltero/a">Soltero/a</option>
                                                            <option value="Casado/a">Casado/a</option>
                                                            <option value="Viudo/a">Viudo/a</option>
                                                            <option value="Divorciado/a">Divorciado/a</option>
                                                            <option value="Conviviente Civil">Conviviente civil</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- Fecha de nacimiento y profesión comprador -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_fechaNacimientoComprador">
                                                        <label>Fecha de nacimiento</label>
                                                        <input type="date" class="form-control"
                                                            id="fechaNacimientoComprador">
                                                   <div class="invalid-feedback"></div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_telefonoComprador">
                                                        <label>Teléfono</label>
                                                        <input type="tel" class="form-control"
                                                            placeholder="1-(444)-444-4445" id="telefonoComprador">
                                                    <div class="invalid-feedback"></div>
                                                        </div>
                                                </div>

                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- Profesión del comprador-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="frm_profesionComprador">
                                                        <label>Profesión</label>
                                                        <input type="text" class="form-control" id="profesionComprador">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- correo electrónico del comprador-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="frm_correoComprador">
                                                        <label>Correo electrónico</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="abc@example.com" id="correoComprador">
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                            <hr>
                                            <label>Dirección</label>
                                            <!-- calle y número del comprador -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_calleComprador">
                                                        <label>Calle</label>
                                                        <input type="text" class="form-control" id="calleComprador">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_numeroComprador">
                                                        <label>Número</label>
                                                        <input type="text" class="form-control" id="numeroComprador">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- comuna y ciudad comprador -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_comunaComprador">
                                                        <label>Comuna</label>
                                                        <input type="text" class="form-control" id="comunaComprador">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_ciudadComprador">
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="text-left"> <button type="button" class="btn btn-dark"
                                                        onclick="BotonAtrasComprador()" id="btnAtrasComprador">
                                                        <i class="fas fa-arrow-left"></i> Atrás</button>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-dark"
                                                        onclick="LimpiarDatosComprador()" id="btnLimpiarComprador">
                                                        <i class="fas fa-eraser"></i> Limpiar</button>
                                                        <button type="button" class="btn btn-info"
                                                    onclick="BotonCrearComprador()" id="btnCrearComprador" style="display:none">
                                                    Registrar  </button>
                                                    <button type="button" class="btn btn-info"
                                                        id="btnSiguienteComprador"
                                                        onclick="BotonSiguienteComprador()">Siguiente
                                                        <i class="fas fa-arrow-right"></i></button>

                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- fin de los botones atrás, limpiar, siguiente -->
                                </form> <!-- fin del form -->
                            </div> <!-- fin del card-body del comprador -->

                            <!-- --------------------------------------------------------------- -->
                            <!-- --------------------------------------------------------------- -->

                            <!-- card-body del departamento -->
                            <div class="card-body" id="card-body_dpto">
                                <h4 class="card-title">Datos del Departamento </h4>
                                <h6 class="card-subtitle">ingrese los datos del departamento en venta</h6>
                                <!-- formulario con los datos del comprador -->
                                <form action="#">
                                    @csrf
                                    <div class="form-body">
                                        <div id="datosDpto">
                                            <!-- Nombre Del Edificio -->
                                            <label>Datos del Edificio</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="frm_nombreEdificio">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control" id="nombreEdificio">
                                                   <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- dirección con número del edificio -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group" id="frm_calleEdificio">
                                                        <label>Calle</label>
                                                        <input type="text" class="form-control" id="calleEdificio">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" id="frm_numeroEdificio">
                                                        <label>Número</label>
                                                        <input type="number" class="form-control" id="numeroEdificio">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->
                                            <hr>

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                            <label>Departamento</label>
                                            <!-- Piso, número y comuna del departamento -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group" id="frm_numeroPisoDpto">
                                                        <label>Número</label>
                                                        <input type="number" class="form-control" id="numeroPisoDpto">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group" id="frm_numeroDpto">
                                                        <label>N° Piso</label>
                                                        <input type="number" class="form-control" id="numeroDpto">
                                                   <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_comunaDpto">
                                                        <label>Comuna</label>
                                                        <input type="text" class="form-control" id="comunaDpto">
                                                   <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>

                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                            <hr>
                                            <!-- numero del Plano y numero de documento -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_numeroPlanoDpto">
                                                        <label>N° de plano</label>
                                                        <input type="text" class="form-control" id="numeroPlanoDpto">
                                                   <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_numeroDocumentoDpto">
                                                        <label>N° de Documento</label>
                                                        <input type="text" class="form-control" id="numeroDocumentoDpto">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->


                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                            <hr>
                                            <label>Coordenadas</label>
                                            <!-- Norte y Sur-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_coordenadaNorte">
                                                        <label>Norte</label>
                                                        <input type="number" class="form-control" id="coordenadaNorte">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_coordenadaSur">
                                                        <label>Sur</label>
                                                        <input type="number" class="form-control" id="coordenadaSur">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                            <!-- Este y Oeste-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_coordenadaEste">
                                                        <label>Este</label>
                                                        <input type="number" class="form-control" id="coordenadaEste">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_coordenadaOeste">
                                                        <label>Oeste</label>
                                                        <input type="number" class="form-control" id="coordenadaOeste">
                                                   <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->
                                            <hr>

                                            <!-- dominio y número de fojas -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_dominioFojaDpto">
                                                        <label>Dominio de Fojas</label>
                                                        <input type="text" class="form-control" id="dominioFojaDpto">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_numeroFojaDpto">
                                                        <label>N° de Fojas</label>
                                                        <input type="text" class="form-control" id="numeroFojaDpto">
                                                    <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                            <!-- precio y metodo de pago  dpto-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_precioDpto">
                                                        <label>Precio</label>
                                                        <input type="text" class="form-control" id="precioDpto">
                                                   <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="frm_metodoPagoDpto">
                                                        <label>Método de pago</label>
                                                        <input type="text" class="form-control" id="metodoPagoDpto">
                                                   <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin del row -->

                                            <!-- --------------------------------------------------------------- -->
                                            <!-- --------------------------------------------------------------- -->

                                        </div>
                                    </div>
                                    <!-- Botones atrás, limpiar y siguiente  -->
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="text-left">
                                                    <button type="button" class="btn btn-dark"
                                                        onclick="BotonAtrasDpto()" id="btnAtrasDpto">
                                                        <i class="fas fa-arrow-left"></i> Atrás</button>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-dark"
                                                        onclick="LimpiarDatosDpto()" id="btnLimpiarDpto">
                                                        <i class="fas fa-eraser"></i> Limpiar</button>
                                                        
                                                    <button type="button" class="btn btn-info" id="btnSiguienteDpto"
                                                        onclick="BotonSiguienteDpto()">Siguiente
                                                        <i class="fas fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- fin de los botones atrás, limpiar, siguiente -->
                                </form> <!-- fin del form -->
                            </div> <!-- fin del card-body del DPTO -->

                            <!-- --------------------------------------------------------------- -->
                            <!-- --------------------------------------------------------------- -->

                            <!-- card-body del departamento -->
                            <div class="card-body" id="card-body_acuerdo">
                                <h4 class="card-title">Generar Documento </h4>
                                <h5 class="card-subtitle">Revise que los datos del documento han sido
                                    ingresados correctamente</h6>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <label>
                                                <input type="checkbox" name="aceptoAcuerdo" id="aceptoAcuerdo"> Los
                                                datos son correctos
                                            </label>

                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="text-left"></div>
                                            <button type="button" class="btn btn-dark" onclick="BotonAtrasAcuerdo()"
                                                id="btnAtrasAcuerdo">
                                                <i class="fas fa-arrow-left"></i> Atrás</button>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-info"
                                                    id="btnGenerarDocumento" onclick="datosDocumento()">Generar
                                                    Documento
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                            </div> <!-- fin del card-body Acuerdo-->
                        </div> <!-- fin del card-->
                    </div> <!-- Fin del col-5-->

                    <!-- --------------------------------------------------------------- -->
                    <!-- --------------------------------------------------------------- -->

                    <!-- Columna donde esta el contrato -->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Contrato de compra y venta de propiedad</h4>

                                </div> -->
                                <form>
                                    <div class="form-body" id="formDocumento">
                                        <div data-spy="scroll" data-target="#formDocumento" data-offset="0"
                                            class="position-relative mt-2" style="height: 760px; overflow: auto;">
                                            <h5 class="text-center" style="color: black;"> <b>ESCRITURA DE
                                                    COMPRAVENTA</b></h5>
                                            <p class="text-center" style="color: black;" id="id1">xxx</p>
                                            <p class="text-center" style="color: black;">A</p>
                                            <p class="text-center" style="color: black;" id="id2">xxx</p>
                                            <ul class="list-group list-group-flush" style="color: black;">
                                                <li class="list-group-item text-justify ">
                                                    En <b id="id3">xxx</b>, República de Chile, a <b
                                                        id="id4">xxx</b>,ante
                                                    mí, <b id="id5">xxx</b>, Abogado, Notario Público, con oficio en
                                                    calle
                                                    <b id="id6">xxx</b> número <b id="id7">xxx</b>, comuna de <b
                                                        id="id8">xxx</b>,

                                                    comparecen: don/ña <b id="id9">xxx</b>, de
                                                    nacionalidad
                                                    <b id="id10">xxx</b>, estado civil <b id="id11">xxx</b>,
                                                    profesión
                                                    <b id="id12">xxx</b>, cédula nacional de identidad número <b
                                                        id="id13">xxx</b>,
                                                    con domicilio en calle <b id="id14">xxx</b> número <b
                                                        id="id15">xxx</b>,
                                                    comuna de <b id="id16">xxx</b>, en
                                                    adelante
                                                    el <strong>“vendedor”</strong>
                                                    y don/ña <b id="id18">xxx</b>, de nacionalidad
                                                    <b id="id19">xxx</b>, estado civil <b id="id20">xxx</b>, profesión
                                                    <b id="id21">xxx</b>, cédula nacional de identidad número <b
                                                        id="id22">xxx</b>,
                                                    con domicilio en calle <b id="id23">xxx</b> número <b
                                                        id="id24">xxx</b>,
                                                    comuna de <b id="id25">xxx</b>, en
                                                    adelante
                                                    el <strong>“comprador”</strong>, los comparecientes mayores de edad,
                                                    quienes
                                                    acreditan su
                                                    identidad con las cédulas citadas y exponen que han convenido el
                                                    siguiente
                                                    contrato de compraventa:
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>PRIMERO:</b> Don/ña <b id="id27">xxx</b>
                                                    es dueño/a del departamento ubicado en el edificio <b
                                                        id="id28">xxx</b>,
                                                    calle <b id="id29">XXX</b>, número <b id="id30">xxx</b>,
                                                    piso número <b id="id31">xxx</b>, departamento número <b
                                                        id="id32">xxx</b>, comuna de <b id="id33">xxx</b>.,
                                                    individualizado en el plano agregado con el número <b
                                                        id="id34">xxx</b>
                                                    del Registro de Documentos de <b id="id35">xxx</b> y de los derechos
                                                    proporcionales en los bienes comunes. Los deslindes del inmueble
                                                    donde
                                                    se levanta el edificio, según plano agregado con el número
                                                    <b id="id36">xxx</b> del Registro de Documentos de <b
                                                        id="id37">xxx</b>
                                                    son: norte: <b id="id38">xxx</b> ; sur: <b id="id39">xxx</b>
                                                    ; este: <b id="id40">xxx</b> ; oeste: <b id="id41">xxx</b> .
                                                    La adquisición consta de la escritura pública correspondiente a la
                                                    inscripción de dominio de fojas <b id="id42">xxx</b>,
                                                    número <b id="id43">xxx</b> del Registro de Propiedad del
                                                    Conservador de
                                                    Bienes Raíces.

                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>SEGUNDO:</b> Por el presente instrumento don/ña <b
                                                        id="id44">xxx</b>,
                                                    vende, cede y transfiere a don/ña <b id="id45"> xxx </b>,
                                                    quien compra, adquiere y acepta para sí, el inmueble singularizado
                                                    en la
                                                    cláusula primera del presente contrato.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>TERCERO:</b> El precio de la compraventa es la suma de <b
                                                        id="id46">xxx</b>, que se pagan de la siguiente forma:<b
                                                        id="id47">
                                                        xxx</b>.
                                                    Las partes vienen en renunciar expresamente a las acciones
                                                    resolutorias
                                                    que pudieran emanar del presente contrato.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>CUARTO:</b> La venta, afecta a las normas del DFL dos de mil
                                                    novecientos cincuenta y nueve y a las normas sobre propiedad
                                                    horizontal,
                                                    se hace ad corpus, en el estado en que se encuentra la propiedad,
                                                    libre
                                                    de hipotecas, gravámenes y prohibiciones, respondiendo el vendedor
                                                    del saneamiento, conforme a la Ley.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>QUINTO:</b> Los gastos que origine la presente escritura serán de
                                                    cargo del comprador.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>SEXTO:</b> El portador de copia autorizada de la presente
                                                    escritura
                                                    se encuentra facultado para requerir al Conservador de Bienes
                                                    Raíces respectivo, las inscripciones, subinscripciones y anotaciones
                                                    que
                                                    procedan y para que rectifique, complemente y/o aclare la
                                                    presente escritura, respecto de cualquier error u omisión existente
                                                    en
                                                    las cláusulas relativas a la individualización de las partes,
                                                    al inmueble objeto del presente contrato, sus deslindes y/o
                                                    inscripción
                                                    de dominio, de acuerdo a sus títulos y/o antecedentes anteriores
                                                    o actuales, como también de cualquier error u omisión de cualquiera
                                                    cláusula no principal del contrato o requisito que fuera necesario,
                                                    a
                                                    juicio del Conservador de Bienes Raíces respectivo, para inscribir
                                                    adecuadamente el dominio a nombre de la parte compradora. El
                                                    mandatario
                                                    queda especialmente facultado para suscribir todos los instrumentos
                                                    públicos y/o privados necesarios para el cumplimiento de su
                                                    cometido.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>SÉPTIMO:</b> La entrega material del departamento vendido se
                                                    efectúa
                                                    en este acto.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>OCTAVO:</b> Por el presente instrumento, las partes se dan el más
                                                    amplio y completo finiquito respecto de cualquiera promesa de
                                                    compraventa que hubiesen celebrado en relación con la propiedad
                                                    objeto
                                                    del presente contrato.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>NOVENO:</b> Declaran los comparecientes que los datos
                                                    suministrados o
                                                    proporcionados acerca de su identidad, actividades o
                                                    estados de situación o patrimonio, les corresponden y son
                                                    verdaderos.
                                                </li>
                                                <li class="list-group-item text-justify">
                                                    <b>DÉCIMO:</b> Para todos los efectos derivados del presente
                                                    contrato
                                                    las partes se someten a la
                                                    jurisdicción de sus Tribunales.
                                                    En comprobante y previa lectura firman los comparecientes
                                                    conjuntamente
                                                    con el Notario que autoriza.
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <br>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- --------------------------------------------------------------- -->
                    <!-- --------------------------------------------------------------- -->

                </div> <!--  fin del row principal-->
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
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

    <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{asset('dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('dist/js/feather.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>

    <script src="{{asset('dist/js/rut.js')}}"></script>
    <script>
        // FUNCIONES GENERALES
$(document).ready(function () {
    // los card de los otros formularios
    $('#card-body_comprador').hide();
    $('#card-body_dpto').hide();
    $('#card-body_acuerdo').hide();

    // el boton de generar documento
    $('#btnGenerarDoc').hide();

    // las funciones del vendedor
    $('#datosVendedor').hide();// oculta los datos del vendedor menos el rut
    $('#btnSiguienteVendedor').hide(); // oculta el boton siguiente del formulario del vendedor
    $('#btnLimpiarVendedor').hide(); // oculta el boton de limpiar los datos
    $('#btnCrearVendedor').hide();

});

let statePanel2 = false;
let statePanel3 = false;
let statePanel21 = false; 

//------------------------------------------------------------------
// ----------------------- VENDEDOR --------------------------------

// Verifico si el rut es válido o no
$("#rutVendedor").rut({ formatOn: 'keyup', validateOn: 'change' })
    .on('rutInvalido', function () {
        rutOkVendedor = false;
    })
    .on('rutValido', function () {
        rutOkVendedor = true;
    });


function DatosVendedor(rut_vendedor) {
    // ajax para preguntar si existe el wn en el sistema o no 
    let data ={rutVendedor: rut_vendedor}
    $.ajax({
        headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
        type: 'Post',
        url:  '{{ route('vendedor.rut') }}',  // ruta donde se consulta el rut
        dataType: 'json',
        data:  { rutVendedor:rut_vendedor},
        success: function (result) {
            // console.log(result);
          
            rellenarVendedorExistente(result); // rme voy a esta funcion para rellenar los datos con la data que recibo de la consulta 
        },
        error: function () {
           
            Swal.fire({
                title: "El RUT ingresado no existe en el sistema",
                text: '¿Desea ingresar los datos?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ingresar datos!',
                cancelButtonText: 'No, buscar otro rut!',
            }).then((result) => {
                // si acepta ingresar los datos
                if (result.isConfirmed) {
                   
                    // muestro el formulario
                    $('#datosVendedor').show();
                    // pongo el foco en el primer input
                    $('#nombreVendedor').focus();
                    // dejo los input habilitados para escribir, excepto el rut
                    $('#rutVendedor').attr('readOnly', true);
                    $('#nombreVendedor').attr('readOnly', false);
                    $('#estadoCivilVendedor').attr('disabled', false); // arreglar este
                    $('#nacionalidadVendedor').attr('readOnly', false);
                    $('#fechaNacimientoVendedor').attr('readOnly', false);
                    $('#profesionVendedor').attr('readOnly', false);
                    $('#correoVendedor').attr('readOnly', false);
                    $('#telefonoVendedor').attr('readOnly', false);
                    $('#calleVendedor').attr('readOnly', false);
                    $('#numeroVendedor').attr('readOnly', false);
                    $('#comunaVendedor').attr('readOnly', false);

                    // botones del formulario
                    $('#searchVendedor').attr('disabled', true);
                    $('#btnLimpiarVendedor').show();
                    $('#btnCrearVendedor').show();
                    $('#btnSiguienteVendedor').hide();
                    

                    // estilos del doc
                    blurInputVendedor();
                    clickInputVendedor();

                    // llenar el documento mientras se escribe en los inputs
                    $('#nombreVendedor').on("keyup", function () {
                        $('#id9').text($('#nombreVendedor').val().toUpperCase());
                        $('#id27').text($('#nombreVendedor').val().toUpperCase());
                        $('#id44').text($('#nombreVendedor').val().toUpperCase());

                    })

                    $('#nacionalidadVendedor').on("keyup", function () {
                        $('#id10').text($('#nacionalidadVendedor').val().toUpperCase());
                    })

                    $('#estadoCivilVendedor').change(function () {
                        $('#id11').text($('#estadoCivilVendedor').val().toUpperCase());
                    });

                    $('#profesionVendedor').on("keyup", function () {
                        $('#id12').text($('#profesionVendedor').val().toUpperCase());
                    })


                    $('#id13').text($('#rutVendedor').val().toUpperCase());


                    $('#calleVendedor').on("keyup", function () {
                        $('#id14').text($('#calleVendedor').val().toUpperCase());
                    })

                    $('#numeroVendedor').on("keyup", function () {
                        $('#id15').text($('#numeroVendedor').val().toUpperCase());
                    })

                    $('#comunaVendedor').on("keyup", function () {
                        $('#id16').text($('#comunaVendedor').val().toUpperCase());
                    })

                } else {
                    $('#rutVendedor').val("").removeClass("is-valid");
                    $('#rutVendedor').focus();
                }
            })
        }
    });
}

function rellenarVendedorExistente(datos) {
    $('#datosVendedor').show();
    $('#rutVendedor').val(datos.result.rutVendedor).attr('readOnly', true);
    $('#nombreVendedor').val(datos.result.nombre).attr('readOnly', true);
    $('#nacionalidadVendedor').val(datos.result.nacionalidad).attr('readOnly', true);
    $('#estadoCivilVendedor').val(datos.result.estadoCivil).attr("disabled", true);
    $('#fechaNacimientoVendedor').val(datos.result.fecha).attr('readOnly', true);
    $('#profesionVendedor').val(datos.result.profesion).attr('readOnly', true);
    $('#correoVendedor').val(datos.result.correo).attr('readOnly', true);
    $('#telefonoVendedor').val(datos.result.telefono).attr('readOnly', true);
    $('#calleVendedor').val(datos.result.calle).attr('readOnly', true);
    $('#numeroVendedor').val(datos.result.numero).attr('readOnly', true);
    $('#comunaVendedor').val(datos.result.comuna).attr('readOnly', true);


    //botones del formulario
    $('#searchVendedor').attr('disabled', true);
    $('#btnLimpiarVendedor').show();
    $('#btnSiguienteVendedor').show();

    // estilos del doc
    blurInputVendedor();
    clickInputVendedor();

    // datos del vendedor en el documento
    $('#id13').text(datos.result.rutVendedor);
    $('#id9').text(datos.result.nombre);
    $('#id27').text(datos.result.nombre);
    $('#id44').text(datos.result.nombre);
    $('#id10').text(datos.result.nacionalidad);
    $('#id11').text(datos.result.estadoCivil);
    $('#id12').text(datos.result.profesion);
    $('#id14').text(datos.result.calle);
    $('#id15').text(datos.result.numero);
    $('#id16').text(datos.result.comuna); 

}


function validarCamposVendedor() {
    contador = 0; // el contador en cero sigfica que no hay campos vacios

    // validación del nombre
    if ($('#nombreVendedor').val() === "") {
        $('#nombreVendedor').addClass('is-invalid');
        $("#frm_nombreVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#nombreVendedor').removeClass('is-invalid');
    }
    //----------------------------
    // validación de la nacionalidad
    if ($('#nacionalidadVendedor').val() === "") {
        $('#nacionalidadVendedor').addClass('is-invalid');
        $("#frm_nacionalidadVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#nacionalidadVendedor').removeClass('is-invalid');
    }
    //----------------------------
    // validación del telefono
    if ($('#estadoCivilVendedor').val() === "Seleccione...") {
        $('#estadoCivilVendedor').addClass('is-invalid');
        $("#frm_estadoCivilVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#estadoCivilVendedor').removeClass('is-invalid');
    }
    //----------------------------
    // validación de la fecha de nacimiento
    if ($('#fechaNacimientoVendedor').val() === "") {
        $('#fechaNacimientoVendedor').addClass('is-invalid');
        $("#frm_fechaNacimientoVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#fechaNacimientoVendedor').removeClass('is-invalid');
    }
    //----------------------------
    // validación del telefono
    if ($('#telefonoVendedor').val() === "") {
        $('#telefonoVendedor').addClass('is-invalid');
        $("#frm_telefonoVendedor > div").html('Campo Obligatorio');
        contador = 1;

    } else if ($('#telefonoVendedor').val().length < 9) {
        $('#telefonoVendedor').addClass('is-invalid');
        $("#frm_telefonoVendedor > div").html('El número debe tener 9 dígitos');
        contador = 1
    } else {
        $('#telefonoVendedor').removeClass('is-invalid');
    }
    //----------------------------
    // validación de la fecha de nacimiento
    if ($('#profesionVendedor').val() === "") {
        $('#profesionVendedor').addClass('is-invalid');
        $("#frm_profesionVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#profesionVendedor').removeClass('is-invalid');
    }

    //----------------------------
    // validación del correo electrónico
    if ($('#correoVendedor').val() === "") {
        $('#correoVendedor').addClass('is-invalid');
        $("#frm_correoVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#correoVendedor').removeClass('is-invalid');
    }

    //----------------------------
    // validación de la calle
    if ($('#calleVendedor').val() === "") {
        $('#calleVendedor').addClass('is-invalid');
        $("#frm_calleVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#calleVendedor').removeClass('is-invalid');
    }

    //----------------------------
    // validación del número de dirección
    if ($('#numeroVendedor').val() === "") {
        $('#numeroVendedor').addClass('is-invalid');
        $("#frm_numeroVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#numeroVendedor').removeClass('is-invalid');
    }

    //----------------------------
    // validación de la comuna
    if ($('#comunaVendedor').val() === "") {
        $('#comunaVendedor').addClass('is-invalid');
        $("#frm_comunaVendedor > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#comunaVendedor').removeClass('is-invalid');
    }

    //----------------------------
    // validación de la ciudad

    return contador;

}

function BotonSiguienteVendedor() {
    vacio = validarCamposVendedor();
    if (vacio === 0) {
        if( $('#rutVendedor').val() ===  $('#rutComprador').val()){
            Swal.fire({
                    title: "Error",
                    icon: "error",
                    text: "El vendedor no puede ser igual al comprador",
                })
                LimpiarDatosVendedor();

        }else{
            // elimino el estilo rojo de los input
            $('#nombreVendedor').removeClass('is-invalid');
            $('#nacionalidadVendedor').removeClass('is-invalid');
            $('#estadoCivilVendedor').removeClass('is-invalid');
            $('#fechaNacimientoVendedor').removeClass('is-invalid');
            $('#telefonoVendedor').removeClass('is-invalid');
            $('#profesionVendedor').removeClass('is-invalid');
            $('#correoVendedor').removeClass('is-invalid');
            $('#calleVendedor').removeClass('is-invalid');
            $('#numeroVendedor').removeClass('is-invalid');
            $('#comunaVendedor').removeClass('is-invalid');
           
            $('#card-body_vendedor').hide();
            $('#card-body_comprador').show();
            $('#btnSiguienteComprador').hide();
            $('#btnCrearComprador').hide();
            $('#btnAtrasComprador').show();
            $('#btnLimpiarComprador').hide();
            $('#rutComprador').focus();
            $('#datosComprador').hide();
            if (statePanel2 === true) { // state panel 2 es cuando el usuario  no existe
                $('#card-body_comprador').show();
                $('#datosComprador').show();
                $('#btnCrearComprador').show();
                $('#btnSiguienteComprador').hide();
                $('#btnLimpiarComprador').show();
            }
            if(statePanel21 === true){
                $('#card-body_comprador').show();
                $('#datosComprador').show();
                $('#btnCrearComprador').hide();
                $('#btnSiguienteComprador').show();
                $('#btnLimpiarComprador').show();
            }
        }
        window.scrollTo(0, 0);
               
           
    }
    }
        

        

        
       

function BuscarVendedor() {

    rutVendedor = $('#rutVendedor').val();
    // si el campo tiene datos
    if (rutVendedor) {
        // si el rut no es válido
        if (rutOkVendedor === false) {
            $("#frm_rutVendedor > div").html('Rut ingresado no es válido');
            $("#frm_rutVendedor > input").addClass("is-invalid");
            $('#rutVendedor').focus();
            $('#rutVendedor').val("");

        } else if (rutOkVendedor === true) {
            $("#frm_rutVendedor > input").removeClass("is-invalid").addClass("is-valid");
            DatosVendedor(rutVendedor);
        }

    } else {
        $("#frm_rutVendedor > div").html('El campo es obligatorio'); $("#frm_rutVendedor > input").addClass("is-invalid");
        $('#rutVendedor').focus();
    }

}

function clickInputVendedor() {
    $('#rutVendedor').click(function () {
        $('#id13').css('background-color', 'yellow');
    });
    $('#nombreVendedor').click(function () {
        $('#id9').css('background-color', 'yellow');
        $('#id27').css('background-color', 'yellow');
        $('#id44').css('background-color', 'yellow');


    });
    $('#nacionalidadVendedor').click(function () {
        $('#id10').css('background-color', 'yellow');
    });
    $('#estadoCivilVendedor').click(function () {
        $('#id11').css('background-color', 'yellow');
    });
    $('#profesionVendedor').click(function () {
        $('#id12').css('background-color', 'yellow');
    });
    $('#calleVendedor').click(function () {
        $('#id14').css('background-color', 'yellow');
    });

    $('#numeroVendedor').click(function () {
        $('#id15').css('background-color', 'yellow');
    });
    $('#comunaVendedor').click(function () {
        $('#id16').css('background-color', 'yellow');
    });
}

function blurInputVendedor() {
    $('#rutVendedor').blur(function () {
        $('#id13').css('background-color', 'white');
    });

    $('#nombreVendedor').blur(function () {
        $('#id9').css('background-color', '#fff');
        $('#id27').css('background-color', '#fff');
        $('#id44').css('background-color', '#fff');
        $('#nombreVendedor').removeClass('is-invalid');
    });
    $('#nacionalidadVendedor').blur(function () {
        $('#id10').css('background-color', '#fff');
        $('#nacionalidadVendedor').removeClass('is-invalid');
    });
    $('#estadoCivilVendedor').blur(function () {
        $('#id11').css("background-color", "#fff");
        $('#estadoCivilVendedor').removeClass('is-invalid');
    });
    $('#profesionVendedor').blur(function () {
        $('#id12').css("background-color", "#fff");
        $('#profesionVendedor').removeClass('is-invalid');
    });
    $('#calleVendedor').blur(function () {
        $('#id14').css("background-color", "#fff");
        $('#callerVendedor').removeClass('is-invalid');
    });
    $('#numeroVendedor').blur(function () {
        $('#id15').css("background-color", "#fff");
        $('#numeroVendedor').removeClass('is-invalid');
    });
    $('#comunaVendedor').blur(function () {
        $('#id16').css("background-color", "#fff");
        $('#comunaVendedor').removeClass('is-invalid');
    });

    // datos que no estan en el doc
    $('#telefonoVendedor').blur(function () {
        $('#telefonoVendedor').removeClass('is-invalid');
    });
    $('#correoVendedor').blur(function () {
        $('#correoVendedor').removeClass('is-invalid');
    });
    $('#fechaNacimientoVendedor').blur(function () {
        $('#fechaNacimientoVendedor').removeClass('is-invalid');
    });

}

function LimpiarDatosVendedor() {
    $('#datosVendedor').hide();// oculta los datos del vendedor menos el rut
    $('#btnSiguienteVendedor').hide(); // oculta el boton siguiente del formulario del vendedor
    $('#btnLimpiarVendedor').hide(); // oculta el boton de limpiar los datos
    $('#btnCrearVendedor').hide();
    $('#rutVendedor').focus();
    $('#rutVendedor').attr('readOnly', false);
    $('#rutVendedor').removeClass('is-valid');
    $('#searchVendedor').attr('disabled', false);

    // seteando los valores del formulario en ""
    $('#rutVendedor').val("");
    $('#nombreVendedor').val("");
    $('#estadoCivilVendedor').val(0); // arreglar este
    $('#nacionalidadVendedor').val("");
    $('#fechaNacimientoVendedor').val("");
    $('#profesionVendedor').val("");
    $('#correoVendedor').val("");
    $('#telefonoVendedor').val("");
    $('#calleVendedor').val("");
    $('#numeroVendedor').val("");
    $('#comunaVendedor').val("");

    //seteando el documento del documento
    $('#id9').text("xxx");
    $('#id10').text("xxx");
    $('#id11').text("xxx");
    $('#id12').text("xxx");
    $('#id13').text("xxx");
    $('#id14').text("xxx");
    $('#id15').text("xxx");
    $('#id16').text("xxx");
    $('#id17').text("xxx");
    $('#id27').text("xxx"); // nombre vendedor Parrafo 2
    $('#id44').text("xxx"); // nombre vendedor Parrafo 3

    // remover los rojos de los inputss
    $('#nombreVendedor').removeClass('is-invalid');
    $('#nacionalidadVendedor').removeClass('is-invalid');
    $('#estadoCivilVendedor').removeClass('is-invalid');
    $('#fechaNacimientoVendedor').removeClass('is-invalid');
    $('#telefonoVendedor').removeClass('is-invalid');
    $('#profesionVendedor').removeClass('is-invalid');
    $('#correoVendedor').removeClass('is-invalid');
    $('#calleVendedor').removeClass('is-invalid');
    $('#numeroVendedor').removeClass('is-invalid');
    $('#comunaVendedor').removeClass('is-invalid');



}


//------------------------------------------------------------------
// ----------------------- COMPRADOR -------------------------------
// Verifico si el rut es válido o no
$("#rutComprador").rut({ formatOn: 'keyup', validateOn: 'change' })
    .on('rutInvalido', function () {
        rutOkComprador = false;
    })
    .on('rutValido', function () {
        rutOkComprador = true;
    });

function BotonAtrasComprador() {
    $('#card-body_vendedor').show();
    $('#card-body_comprador').hide();
    $('#datosComprador').hide();
    $('#btnSiguienteComprador').hide();
    $('#btnCrearComprador').hide();
    $('#btnAtrasComprador').hide();
    $('#btnLimpiarComprador').hide();
    $('#rutComprador').removeClass('is-valid');

    window.scrollTo(0, 0);
}

function BuscarComprador() {

    rutComprador = $('#rutComprador').val();
    // si el campo tiene datos
    if (rutComprador) {
        // si el rut no es válido
        if (rutOkComprador === false) {
            $("#frm_rutComprador > div").html('Rut ingresado no es válido');
            $("#frm_rutComprador > input").addClass("is-invalid");
            $('#rutComprador').focus();
            $('#rutComprador').val("");

        } else if (rutOkComprador === true) {
            $("#frm_rutComprador > input").removeClass("is-invalid").addClass("is-valid");
            DatosComprador(rutComprador);
        }

    } else {
        $("#frm_rutComprador > div").html('El campo es obligatorio'); $("#frm_rutComprador > input").addClass("is-invalid");
        $('#rutComprador').focus();
    }

}

function DatosComprador(rut_comprador) {

    $.ajax({
        headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
        type: "Post",
        url: '{{ route('comprador.rut') }}', // ruta donde se consulta el rut
        dataType: "json",
        data: {
            rutComprador: rut_comprador,
        }, success: function (result) {
            statePanel21 = true;
            statePanel2 = false;
            rellenarCompradorExistente(result); // me voy a esta funcion para rellenar los datos con la data que recibo de la consulta 
        }, error: function () {
            Swal.fire({
                title: "El RUT ingresado no existe en el sistema",
                text: '¿Desea ingresar los datos?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ingresar datos!',
                cancelButtonText: 'No, buscar otro rut!',
            }).then((result) => {
                // si acepta ingresar los datos
                if (result.isConfirmed) {
                    statePanel2 = true;
                    statePanel21 = false;
                    // muestro el formulario
                    $('#datosComprador').show();
                    // pongo el foco en el primer input
                    $('#nombreComprador').focus();
                    // dejo los input habilitados para escribir, excepto el rut
                    $('#rutComprador').attr('readOnly', true);
                    $('#nombreComprador').attr('readOnly', false);
                    $('#estadoCivilComprador').attr('readOnly', false); // arreglar este
                    $('#nacionalidadComprador').attr('disabled', false);
                    $('#fechaNacimientoComprador').attr('readOnly', false);
                    $('#profesionComprador').attr('readOnly', false);
                    $('#correoComprador').attr('readOnly', false);
                    $('#telefonoComprador').attr('readOnly', false);
                    $('#calleComprador').attr('readOnly', false);
                    $('#numeroComprador').attr('readOnly', false);
                    $('#comunaComprador').attr('readOnly', false);

                    // botones del formulario
                    $('#searchComprador').attr('disabled', true);
                    $('#btnLimpiarComprador').show();
                    $('#btnSiguienteComprador').hide();
                    $('#btnCrearComprador').show();

                    // estilos del doc
                    blurInputComprador();
                    clickInputComprador();

                    // llenar el documento mientras se escribe en los inputs
                    $('#nombreComprador').on("keyup", function () {
                        nombre = $('#nombreComprador').val();
                        $('#id18').text($.trim(nombre).toUpperCase());
                        $('#id45').text($('#nombreComprador').val().toUpperCase());
                    })

                    $('#nacionalidadComprador').on("keyup", function () {
                        $('#id19').text($.trim($('#nacionalidadComprador').val()).toUpperCase());
                    })

                    $('#estadoCivilComprador').change(function () {
                        $('#id20').text($('#estadoCivilComprador').val().toUpperCase());
                    });

                    $('#profesionComprador').on("keyup", function () {
                        $('#id21').text($.trim($('#profesionComprador').val()).toUpperCase());
                    })

                    $('#id22').text($('#rutComprador').val().toUpperCase());

                    $('#calleComprador').on("keyup", function () {
                        $('#id23').text($.trim($('#calleComprador').val()).toUpperCase());
                    })

                    $('#numeroComprador').on("keyup", function () {
                        $('#id24').text($.trim($('#numeroComprador').val()).toUpperCase());
                    })

                    $('#comunaComprador').on("keyup", function () {
                        $('#id25').text($.trim($('#comunaComprador').val()).toUpperCase());
                    })

                } else {
                    $('#rutComprador').val("").removeClass("is-valid");
                    $('#rutComprador').focus();
                }
            })

        }
    })

}


function rellenarCompradorExistente(datos) {
    statePanel21 = true;
    statePanel2 = false;
    $('#datosComprador').show();
    $('#rutComprador').val();
    $('#rutComprador').attr('readOnly', true);
    $('#datosVendedor').show();
    $('#nombreComprador').val(datos.result.nombre).attr('readOnly', true);
    $('#nacionalidadComprador').val(datos.result.nacionalidad).attr('readOnly', true);
    $('#estadoCivilComprador').val(datos.result.estadoCivil).attr("disabled", true);
    $('#fechaNacimientoComprador').val(datos.result.fecha).attr('readOnly', true);
    $('#profesionComprador').val(datos.result.profesion).attr('readOnly', true);
    $('#correoComprador').val(datos.result.correo).attr('readOnly', true);
    $('#telefonoComprador').val(datos.result.telefono).attr('readOnly', true);
    $('#calleComprador').val(datos.result.calle).attr('readOnly', true);
    $('#numeroComprador').val(datos.result.numero).attr('readOnly', true);
    $('#comunaComprador').val(datos.result.comuna).attr('readOnly', true);
    //botones del formulario
    $('#searchComprador').attr('disabled', true);
    $('#btnLimpiarComprador').show();
    $('#btnSiguienteComprador').show();

    // estilos del doc
    blurInputComprador();
    clickInputComprador();

    // datos del vendedor en el documento
    $('#id18').text(datos.result.nombre);
    $('#id45').text(datos.result.nombre);
    $('#id19').text(datos.result.nacionalidad);
    $('#id20').text(datos.result.estadoCivil);
    $('#id21').text(datos.result.profesion);
    $('#id22').text(datos.result.rutComprador);
    $('#id23').text(datos.result.calle);
    $('#id24').text(datos.result.numero);
    $('#id25').text(datos.result.comuna);
}


function clickInputComprador() {
    $('#nombreComprador').click(function () {
        $('#id18').css('background-color', 'yellow');
        $('#id45').css('background-color', 'yellow');
    });
    $('#nacionalidadComprador').click(function () {
        $('#id19').css('background-color', 'yellow');
    });
    $('#estadoCivilComprador').click(function () {
        $('#id20').css('background-color', 'yellow');
    });
    $('#profesionComprador').click(function () {
        $('#id21').css('background-color', 'yellow');
    });
    $('#rutComprador').click(function () {
        $('#id22').css('background-color', 'yellow');
    });
    $('#calleComprador').click(function () {
        $('#id23').css('background-color', 'yellow');
    });

    $('#numeroComprador').click(function () {
        $('#id24').css('background-color', 'yellow');
    });
    $('#comunaComprador').click(function () {
        $('#id25').css('background-color', 'yellow');
    });
}

function blurInputComprador() {

    $('#nombreComprador').blur(function () {
        $('#id18').css('background-color', '#fff');
        $('#id45').css('background-color', '#fff');
        $('#nombreComprador').removeClass('is-invalid');
    });
    $('#nacionalidadComprador').blur(function () {
        $('#id19').css('background-color', '#fff');
        $('#nacionalidadComprador').removeClass('is-invalid');
    });
    $('#estadoCivilComprador').blur(function () {
        $('#id20').css("background-color", "#fff");
        $('#estadoCivilComprador').removeClass('is-invalid');
    });
    $('#profesionComprador').blur(function () {
        $('#id21').css("background-color", "#fff");
        $('#profesionComprador').removeClass('is-invalid');
    });
    $('#rutComprador').blur(function () {
        $('#id22').css('background-color', 'white');
    });
    $('#calleComprador').blur(function () {
        $('#id23').css("background-color", "#fff");
        $('#callerComprador').removeClass('is-invalid');
    });
    $('#numeroComprador').blur(function () {
        $('#id24').css("background-color", "#fff");
        $('#numeroComprador').removeClass('is-invalid');
    });
    $('#comunaComprador').blur(function () {
        $('#id25').css("background-color", "#fff");
        $('#comunaComprador').removeClass('is-invalid');
    });

    // datos que no estan en el doc
    $('#telefonoComprador').blur(function () {
        $('#telefonoComprador').removeClass('is-invalid');
    });
    $('#correoComprador').blur(function () {
        $('#correoComprador').removeClass('is-invalid');
    });
    $('#fechaNacimientoComprador').blur(function () {
        $('#fechaNacimientoComprador').removeClass('is-invalid');
    });

}

function LimpiarDatosComprador() {
    $('#datosComprador').hide();// oculta los datos del vendedor menos el rut
    $('#btnSiguienteComprador').hide(); // oculta el boton siguiente del formulario del vendedor
    $('#btnLimpiarComprador').hide(); // oculta el boton de limpiar los datos
    $('#btnCrearComprador').hide();
    $('#rutComprador').focus();
    $('#rutComprador').attr('readOnly', false);
    $('#rutComprador').removeClass('is-valid');
    $('#searchComprador').attr('disabled', false);

    // seteando los valores del formulario en ""
    $('#rutComprador').val("");
    $('#nombreComprador').val("");
    $('#estadoCivilComprador').val(0); // arreglar este
    $('#nacionalidadComprador').val("");
    $('#fechaNacimientoComprador').val("");
    $('#profesionComprador').val("");
    $('#correoComprador').val("");
    $('#telefonoComprador').val("");
    $('#calleComprador').val("");
    $('#numeroComprador').val("");
    $('#comunaComprador').val("");

    //seteando el documento del documento
    $('#id18').text("xxx");
    $('#id19').text("xxx");
    $('#id20').text("xxx");
    $('#id21').text("xxx");
    $('#id22').text("xxx");
    $('#id23').text("xxx");
    $('#id24').text("xxx");
    $('#id25').text("xxx");
    $('#id26').text("xxx");
    $('#id45').text("xxx"); // nombre vendedor Parrafo 3

    // remover los rojos de los inputss
    $('#nombreComprador').removeClass('is-invalid');
    $('#nacionalidadComprador').removeClass('is-invalid');
    $('#estadoCivilComprador').removeClass('is-invalid');
    $('#fechaNacimientoComprador').removeClass('is-invalid');
    $('#telefonoComprador').removeClass('is-invalid');
    $('#profesionComprador').removeClass('is-invalid');
    $('#correoComprador').removeClass('is-invalid');
    $('#calleComprador').removeClass('is-invalid');
    $('#numeroComprador').removeClass('is-invalid');
    $('#comunaComprador').removeClass('is-invalid');

    statePanel2 = false;
    statePanel21 = false;



}

function validarCamposComprador() {
    contador = 0; // el contador en cero sigfica que no hay campos vacios

    // validación del nombre
    if ($('#nombreComprador').val() === "") {
        $('#nombreComprador').addClass('is-invalid');
        $("#frm_nombreComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#nombreComprador').removeClass('is-invalid');
    }
    //----------------------------
    // validación de la nacionalidad
    if ($('#nacionalidadComprador').val() === "") {
        $('#nacionalidadComprador').addClass('is-invalid');
        $("#frm_nacionalidadComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#nacionalidadComprador').removeClass('is-invalid');
    }
    //----------------------------
    // validación del telefono
    if ($('#estadoCivilComprador').val() === "Seleccione...") {
        $('#estadoCivilComprador').addClass('is-invalid');
        $("#frm_estadoCivilComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#estadoCivilComprador').removeClass('is-invalid');
    }
    //----------------------------
    // validación de la fecha de nacimiento
    if ($('#fechaNacimientoComprador').val() === "") {
        $('#fechaNacimientoComprador').addClass('is-invalid');
        $("#frm_fechaNacimientoComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#fechaNacimientoComprador').removeClass('is-invalid');
    }
    //----------------------------
    // validación del telefono
    if ($('#telefonoComprador').val() === "") {
        $('#telefonoComprador').addClass('is-invalid');
        $("#frm_telefonoComprador > div").html('Campo Obligatorio');
        contador = 1;

    } else if ($('#telefonoComprador').val().length < 9) {
        $('#telefonoComprador').addClass('is-invalid');
        $("#frm_telefonoComprador > div").html('El número debe tener 9 dígitos');
        contador = 1
    } else {
        $('#telefonoComprador').removeClass('is-invalid');
    }
    //----------------------------
    // validación de la fecha de nacimiento
    if ($('#profesionComprador').val() === "") {
        $('#profesionComprador').addClass('is-invalid');
        $("#frm_profesionComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#profesionComprador').removeClass('is-invalid');
    }

    //----------------------------
    // validación del correo electrónico
    if ($('#correoComprador').val() === "") {
        $('#correoComprador').addClass('is-invalid');
        $("#frm_correoComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#correoComprador').removeClass('is-invalid');
    }

    //----------------------------
    // validación de la calle
    if ($('#calleComprador').val() === "") {
        $('#calleComprador').addClass('is-invalid');
        $("#frm_calleComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#calleComprador').removeClass('is-invalid');
    }

    //----------------------------
    // validación del número de dirección
    if ($('#numeroComprador').val() === "") {
        $('#numeroComprador').addClass('is-invalid');
        $("#frm_numeroComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#numeroComprador').removeClass('is-invalid');
    }

    //----------------------------
    // validación de la comuna
    if ($('#comunaComprador').val() === "") {
        $('#comunaComprador').addClass('is-invalid');
        $("#frm_comunaComprador > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#comunaComprador').removeClass('is-invalid');
    }

    //----------------------------
    // validación de la ciudad


    return contador;

}

function BotonSiguienteComprador() {
    vacio = validarCamposComprador();
    if (vacio === 0) {
        if($('#rutComprador').val() === $('#rutVendedor').val()){
            Swal.fire({
                    title: "Error",
                    icon: "error",
                    text: "El comprador no puede ser igual al vendedor",
                })
                LimpiarDatosComprador();

        }else{
 // elimino el estilo rojo de los input
 $('#nombreComprador').removeClass('is-invalid');
        $('#nacionalidadComprador').removeClass('is-invalid');
        $('#estadoCivilComprador').removeClass('is-invalid');
        $('#fechaNacimientoComprador').removeClass('is-invalid');
        $('#telefonoComprador').removeClass('is-invalid');
        $('#profesionComprador').removeClass('is-invalid');
        $('#correoComprador').removeClass('is-invalid');
        $('#calleComprador').removeClass('is-invalid');
        $('#numeroComprador').removeClass('is-invalid');
        $('#comunaComprador').removeClass('is-invalid');

       
        $('#card-body_comprador').hide();
        $('#card-body_dpto').show();
        $('#datosDpto').show();
        $('#btnSiguienteDpto').show();
        $('#btnAtrasDpto').show();

        }
       
        // $('#rutComprador').removeClass('is-valid');
        window.scrollTo(0, 0);
    }

}


//------------------------------------------------------------------
// ----------------------- DEPARTAMENTO ----------------------------

function clickInputDpto() {
    $('#nombreEdificio').click(function () {
        $('#id28').css('background-color', 'yellow');
    });
    $('#calleEdificio').click(function () {
        $('#id29').css('background-color', 'yellow');
    });
    $('#numeroEdificio').click(function () {
        $('#id30').css('background-color', 'yellow');
    });
    $('#numeroPisoDpto').click(function () {
        $('#id31').css('background-color', 'yellow');
    });
    $('#numeroDpto').click(function () {
        $('#id32').css('background-color', 'yellow');
    });
    $('#comunaDpto').click(function () {
        $('#id33').css('background-color', 'yellow');
    });
    $('#numeroPlanoDpto').click(function () {
        $('#id34').css('background-color', 'yellow');
        $('#id36').css('background-color', 'yellow');
    });
    $('#numeroDocumentoDpto').click(function () {
        $('#id35').css('background-color', 'yellow');
        $('#id37').css('background-color', 'yellow');
    });
    $('#coordenadaNorte').click(function () {
        $('#id38').css('background-color', 'yellow');
    });
    $('#coordenadaSur').click(function () {
        $('#id39').css('background-color', 'yellow');
    });
    $('#coordenadaEste').click(function () {
        $('#id40').css('background-color', 'yellow');
    });
    $('#coordenadaOeste').click(function () {
        $('#id41').css('background-color', 'yellow');
    });
    $('#dominioFojaDpto').click(function () {
        $('#id42').css('background-color', 'yellow');
    });
    $('#numeroFojaDpto').click(function () {
        $('#id43').css('background-color', 'yellow');
    });
    $('#precioDpto').click(function () {
        $('#id46').css('background-color', 'yellow');
    });
    $('#metodoPagoDpto').click(function () {
        $('#id47').css('background-color', 'yellow');
    });
}

function blurInputDpto() {

    $('#nombreEdificio').blur(function () {
        $('#id28').css('background-color', '#fff');
        $('#nombreEdificio').removeClass('is-invalid');
    });
    $('#calleEdificio').blur(function () {
        $('#id29').css('background-color', '#fff');
        $('#calleEdificio').removeClass('is-invalid');
    });
    $('#numeroEdificio').blur(function () {
        $('#id30').css("background-color", "#fff");
        $('#numeroEdificio').removeClass('is-invalid');
    });
    $('#numeroPisoDpto').blur(function () {
        $('#id31').css("background-color", "#fff");
        $('#numeroPisoDpto').removeClass('is-invalid');
    });
    $('#numeroDpto').blur(function () {
        $('#id32').css('background-color', 'white');
        $('#numeroDpto').removeClass('is-invalid');
    });
    $('#comunaDpto').blur(function () {
        $('#id33').css("background-color", "#fff");
        $('#comunaDpto').removeClass('is-invalid');
    });
    $('#numeroPlanoDpto').blur(function () {
        $('#id34').css("background-color", "#fff");
        $('#id36').css("background-color", "#fff");
        $('#numeroPlanoDpto').removeClass('is-invalid');
    });
    $('#numeroDocumentoDpto').blur(function () {
        $('#id35').css("background-color", "#fff");
        $('#id37').css("background-color", "#fff");
        $('#numeroDocumentoDpto').removeClass('is-invalid');
    });
    $('#coordenadaNorte').blur(function () {
        $('#id38').css("background-color", "#fff");
        $('#coordenadaNorte').removeClass('is-invalid');
    });
    $('#coordenadaSur').blur(function () {
        $('#id39').css("background-color", "#fff");
        $('#coordenadaSur').removeClass('is-invalid');
    });

    $('#coordenadaEste').blur(function () {
        $('#id40').css("background-color", "#fff");
        $('#coordenadaEste').removeClass('is-invalid');
    });

    $('#coordenadaOeste').blur(function () {
        $('#id41').css("background-color", "#fff");
        $('#coordenadaOeste').removeClass('is-invalid');
    });

    $('#dominioFojaDpto').blur(function () {
        $('#id42').css("background-color", "#fff");
        $('#dominioFojaDpto').removeClass('is-invalid');
    });
    $('#numeroFojaDpto').blur(function () {
        $('#id43').css("background-color", "#fff");
        $('#numeroFojaDpto').removeClass('is-invalid');
    });

    $('#precioDpto').blur(function () {
        $('#id46').css("background-color", "#fff");
        $('#precioDpto').removeClass('is-invalid');
    });

    $('#metodoPagoDpto').blur(function () {
        $('#id47').css("background-color", "#fff");
        $('#metodoPagoDpto').removeClass('is-invalid');
    });


}

function validarCamposDpto() {
    contador = 0; // el contador en cero sigfica que no hay campos vacios

    if ($('#nombreEdificio').val() === "") {
        $('#nombreEdificio').addClass('is-invalid');
        $("#frm_nombreEdificio > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#nombreEdificio').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#calleEdificio').val() === "") {
        $('#calleEdificio').addClass('is-invalid');
        $("#frm_calleEdificio > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#calleEdificio').removeClass('is-invalid');
    }

    //----------------------------
    if ($('#numeroEdificio').val() === "") {
        $('#numeroEdificio').addClass('is-invalid');
        $("#frm_numeroEdificio > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#numeroEdificio').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#numeroPisoDpto').val() === "") {
        $('#numeroPisoDpto').addClass('is-invalid');
        $("#frm_numeroPisoDpto > div").html('Campo Obligatorio');
        contador = 1;

    } else {
        $('#numeroPisoDpto').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#numeroDpto').val() === "") {
        $('#numeroDpto').addClass('is-invalid');
        $("#frm_numeroDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#numeroDpto').removeClass('is-invalid');
    }

    //----------------------------
    if ($('#comunaDpto').val() === "") {
        $('#comunaDpto').addClass('is-invalid');
        $("#frm_comunaDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#comunaDpto').removeClass('is-invalid');
    }

    //----------------------------
    if ($('#numeroPlanoDpto').val() === "") {
        $('#numeroPlanoDpto').addClass('is-invalid');
        $("#frm_numeroPlanoDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#numeroPlanoDpto').removeClass('is-invalid');
    }

    //----------------------------
    if ($('#numeroDocumentoDpto').val() === "") {
        $('#numeroDocumentoDpto').addClass('is-invalid');
        $("#frm_numeroDocumentoDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#numeroDocumentoDpto').removeClass('is-invalid');
    }

    //----------------------------
    if ($('#coordenadaNorte').val() === "") {
        $('#coordenadaNorte').addClass('is-invalid');
        $("#frm_coordenadaNorte > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#coordenadaNorte').removeClass('is-invalid');
    }

    //----------------------------
    if ($('#coordenadaSur').val() === "") {
        $('#coordenadaSur').addClass('is-invalid');
        $("#frm_coordenadaSur > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#coordenadaSur').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#coordenadaEste').val() === "") {
        $('#coordenadaEste').addClass('is-invalid');
        $("#frm_coordenadaEste > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#coordenadaEste').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#coordenadaOeste').val() === "") {
        $('#coordenadaOeste').addClass('is-invalid');
        $("#frm_coordenadaOeste > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#coordenadaOeste').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#dominioFojaDpto').val() === "") {
        $('#dominioFojaDpto').addClass('is-invalid');
        $("#frm_dominioFojaDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#dominioFojaDpto').removeClass('is-invalid');
    }

    //----------------------------
    if ($('#numeroFojaDpto').val() === "") {
        $('#numeroFojaDpto').addClass('is-invalid');
        $("#frm_numeroFojaDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#numeroFojaDpto').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#precioDpto').val() === "") {
        $('#precioDpto').addClass('is-invalid');
        $("#frm_precioDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#precioDpto').removeClass('is-invalid');
    }
    //----------------------------
    if ($('#metodoPagoDpto').val() === "") {
        $('#metodoPagoDpto').addClass('is-invalid');
        $("#frm_metodoPagoDpto > div").html('Campo obligatorio');
        contador = 1;

    } else {
        $('#metodoPagoDpto').removeClass('is-invalid');
    }
    return contador;

}

function LimpiarDatosDpto() {
    // seteando los valores del formulario en ""
    $('#nombreEdificio').val("");
    $('#calleEdificio').val("");
    $('#numeroEdificio').val(""); // arreglar este
    $('#numeroPisoDpto').val("");
    $('#numeroDpto').val("");
    $('#comunaDpto').val("");
    $('#numeroPlanoDpto').val("");
    $('#numeroDocumentoDpto').val("");
    $('#coordenadaNorte').val("");
    $('#coordenadaSur').val("");
    $('#coordenadaEste').val("");
    $('#coordenadaOeste').val("");
    $('#dominioFojaDpto').val("");
    $('#numeroFojaDpto').val("");
    $('#precioDpto').val("");
    $('#metodoPagoDpto').val("");

    //seteando el documento del documento
    $('#id28').text("xxx");
    $('#id29').text("xxx");
    $('#id30').text("xxx");
    $('#id31').text("xxx");
    $('#id32').text("xxx");
    $('#id33').text("xxx");
    $('#id34').text("xxx");
    $('#id35').text("xxx");
    $('#id36').text("xxx");
    $('#id37').text("xxx");
    $('#id38').text("xxx");
    $('#id39').text("xxx");
    $('#id40').text("xxx");
    $('#id41').text("xxx");
    $('#id42').text("xxx");
    $('#id43').text("xxx");
    $('#id46').text("xxx");
    $('#id47').text("xxx");


    // remover los rojos de los inputss
    $('#nombreEdificio').removeClass('is-invalid');
    $('#calleEdificio').removeClass('is-invalid');
    $('#numeroEdificio').removeClass('is-invalid');
    $('#numeroPisoDpto').removeClass('is-invalid');
    $('#numeroDpto').removeClass('is-invalid');
    $('#comunaDpto').removeClass('is-invalid');
    $('#numeroPlanoDpto').removeClass('is-invalid');
    $('#numeroDocumentoDpto').removeClass('is-invalid');
    $('#coordenadaNorte').removeClass('is-invalid');
    $('#coordenadaSur').removeClass('is-invalid');
    $('#coordenadaEste').removeClass('is-invalid');
    $('#coordenadaOeste').removeClass('is-invalid');
    $('#dominioFojaDpto').removeClass('is-invalid');
    $('#numeroFojaDpto').removeClass('is-invalid');
    $('#precioDpto').removeClass('is-invalid');
    $('#metodoPagoDpto').removeClass('is-invalid');
    statePanel3 = false;



}

function BotonAtrasDpto() {
    $('#card-body_comprador').show();
    $('#card-body_dpto').hide();

    window.scrollTo(0, 0);
}

function BotonSiguienteDpto() {
    vacio = validarCamposDpto();
    if (vacio === 0) {
        // elimino el estilo rojo de los input
        $('#nombreEdificio').removeClass('is-invalid');
        $('#calleEdificio').removeClass('is-invalid');
        $('#numeroEdificio').removeClass('is-invalid');
        $('#numeroPisoDpto').removeClass('is-invalid');
        $('#numeroDpto').removeClass('is-invalid');
        $('#comunaDpto').removeClass('is-invalid');
        $('#numeroPlanoDpto').removeClass('is-invalid');
        $('#numeroDocumentoDpto').removeClass('is-invalid');
        $('#coordenadaNorte').removeClass('is-invalid');
        $('#coordenadaSur').removeClass('is-invalid');
        $('#coordenadaEste').removeClass('is-invalid');
        $('#coordenadaOeste').removeClass('is-invalid');
        $('#dominioFojaDpto').removeClass('is-invalid');
        $('#numeroFojaDpto').removeClass('is-invalid');
        $('#precioDpto').removeClass('is-invalid');
        $('#metodoPagoDpto').removeClass('is-invalid');


        $('#card-body_dpto').hide();
        $('#card-body_acuerdo').show();
        $('#btnAtrasDpto').show();
        $('#btnGenerarDocumento').hide();

        window.scrollTo(0, 0);

    }

}


clickInputDpto();
blurInputDpto();

// llenar el documento mientras se escribe en los inputs
$('#nombreEdificio').on("keyup", function () {
    nombre = $('#nombreEdificio').val();
    $('#id28').text($.trim(nombre).toUpperCase());
})

$('#calleEdificio').on("keyup", function () {
    $('#id29').text($.trim($('#calleEdificio').val()).toUpperCase());
})

$('#numeroEdificio').change(function () {
    $('#id30').text($('#numeroEdificio').val().toUpperCase());
});

$('#numeroPisoDpto').on("keyup", function () {
    $('#id31').text($.trim($('#numeroPisoDpto').val()).toUpperCase());
})

$('#numeroDpto').on("keyup", function () {
    $('#id32').text($.trim($('#numeroDpto').val()).toUpperCase());
})

$('#comunaDpto').on("keyup", function () {
    $('#id33').text($.trim($('#comunaDpto').val()).toUpperCase());
})

$('#numeroPlanoDpto').on("keyup", function () {
    $('#id34').text($.trim($('#numeroPlanoDpto').val()).toUpperCase());
    $('#id36').text($.trim($('#numeroPlanoDpto').val()).toUpperCase());
})

$('#numeroDocumentoDpto').on("keyup", function () {
    $('#id35').text($.trim($('#numeroDocumentoDpto').val()).toUpperCase());
    $('#id37').text($.trim($('#numeroDocumentoDpto').val()).toUpperCase());
})
$('#coordenadaNorte').on("keyup", function () {
    $('#id38').text($.trim($('#coordenadaNorte').val()).toUpperCase());
})
$('#coordenadaSur').on("keyup", function () {
    $('#id39').text($.trim($('#coordenadaSur').val()).toUpperCase());
})

$('#coordenadaEste').on("keyup", function () {
    $('#id40').text($.trim($('#coordenadaEste').val()).toUpperCase());
})

$('#coordenadaOeste').on("keyup", function () {
    $('#id41').text($.trim($('#coordenadaOeste').val()).toUpperCase());
})
$('#dominioFojaDpto').on("keyup", function () {
    $('#id42').text($.trim($('#dominioFojaDpto').val()).toUpperCase());
})

$('#numeroFojaDpto').on("keyup", function () {
    $('#id43').text($.trim($('#numeroFojaDpto').val()).toUpperCase());
})

$('#precioDpto').on("keyup", function () {
    $('#id46').text($.trim($('#precioDpto').val()).toUpperCase());
})
$('#metodoPagoDpto').on("keyup", function () {
    $('#id47').text($.trim($('#metodoPagoDpto').val()).toUpperCase());
})


//------------------------------------------------------------------
// ----------------------- ACUERDO ----------------------------
$("#aceptoAcuerdo").on('change', function () {
    if ($(this).is(':checked')) {
        // Hacer algo si el checkbox ha sido seleccionado
        $('#btnGenerarDocumento').show();
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#btnGenerarDocumento').hide();
    }
});

// enviar a VESNA 
function BotonAtrasAcuerdo() {
    $('#card-body_acuerdo').hide();
    $('#card-body_dpto').show();

    window.scrollTo(0, 0); s
}

function datosDocumento() {
    $.ajax({
        headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
        type: "Post",
        url: '{{ route('trabajador.compraventa') }}', // ruta del documento
        dataType: 'json',
        data: {
            ciudadDoc: $('#id3').html(),
            fechaDoc: $('#id4').html(),
            nombreNotarioDoc: $('#id5').html(),
            nombreNotarioDoc: $('#id5').html(),
            calleNotarioDoc: $('#id6').html(),
            numeroCalleNotarioDoc: $('#id7').html(),
            comunaCalleNotarioDoc: $('#id8').html(),
            nombreVendedor: $('#id9').html(),
            nacionalidadVendedor: $('#id10').html(),
            estadoCivilVendedor: $('#id11').html(),
            profesionVendedor: $('#id12').html(),
            rutVendedor: $('#id13').html(),
            calleVendedor: $('#id14').html(),
            numeroVendedor: $('#id15').html(),
            comunaVendedor: $('#id16').html(),
            nombreComprador: $('#id18').html(),
            nacionalidadComprador: $('#id19').html(),
            estadoCivilComprador: $('#id20').html(),
            profesionComprador: $('#id21').html(),
            rutComprador: $('#id22').html(),
            calleComprador: $('#id23').html(),
            numeroComprador: $('#id24').html(),
            comunaComprador: $('#id25').html(),
            nombreEdificio: $('#id28').html(),
            calleEdificio: $('#id29').html(),
            numeroEdificio: $('#id30').html(),
            numeroPisoDpto: $('#id31').html(),
            numeroDpto: $('#id32').html(),
            comunaDpto: $('#id33').html(),
            numeroPlanoDpto: $('#id34').html(),
            numeroDocumentoDpto: $('#id35').html(),
            coordenadaNorte: $('#id38').html(),
            coordenadaSur: $('#id39').html(),
            coordenadaEste: $('#id40').html(),
            coordenadaOeste: $('#id41').html(),
            dominioFojaDpto: $('#id42').html(),
            numeroFojaDpto: $('#id43').html(),
            precioDpto: $('#id46').html(),
            metodoPagoDpto: $('#id47').html(),
        }, success: function (response) { // el 200 es el status de correcto NECESITO QUE ME ENVIES ESTE POR BACKEND UN 200 SI ESTA CORRECTO
                $url = '{{ route('trabajador.index') }}'
                //console.log(response);
                window.location.replace($url);
            
        }, 
        error: function(result){
           alert("no se pudo realizar el documento");
        }
    });

}



// creo un vendedor si no esta en el sistema
function BotonCrearVendedor() {
    camposValidado = validarCamposVendedor();
    if (camposValidado == 0) {
        $.ajax({
            headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
            type: "POST",
            url: '{{ route('trabajador.enroll') }}',
            data: {
                rut: $('#rutVendedor').val(),
                nombre: $('#nombreVendedor').val(),
                nacionalidad: $('#nacionalidadVendedor').val(),
                estadoCivil: $('#estadoCivilVendedor').val(),
                profesion: $('#profesionVendedor').val(),
                correo: $('#correoVendedor').val(),
                calle: $('#calleVendedor').val(),
                numero: $('#numeroVendedor').val(),
                comuna: $('#comunaVendedor').val(),
                telefono: $('#telefonoVendedor').val(),
                fechaNacimiento: $('#fechaNacimientoVendedor').val(),
            },
            dataType: "json",
            success: (response) => {
                BotonSiguienteVendedor();
            },
            error: (response) => {
                console.log(response);
                Swal.fire({
                    title: "Error",
                    icon: "error",
                    text: "No se creó el vendedor",
                })
            }
        });


    }
}

// creo un comprador si no existe en el sistema 
function BotonCrearComprador() {
    camposValidado = validarCamposComprador();
    if (camposValidado == 0) {
        $.ajax({
            headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
            type: "POST",
            url: '{{ route('trabajador.enroll') }}',
            data: {
                rut: $('#rutComprador').val(),
                nombre: $('#nombreComprador').val(),
                nacionalidad: $('#nacionalidadComprador').val(),
                estadoCivil: $('#estadoCivilComprador').val(),
                profesion: $('#profesionComprador').val(),
                correo: $('#correoComprador').val(),
                calle: $('#calleComprador').val(),
                numero: $('#numeroComprador').val(),
                comuna: $('#comunaComprador').val(),
                telefono: $('#telefonoComprador').val(),
                fechaNacimiento: $('#fechaNacimientoComprador').val(),
            },
            dataType: "json",
            success: (response) => {
                BotonSiguienteComprador();
            },
            error: (response) => {
                Swal.fire({
                    title: "Error",
                    icon: "error",
                    text: "No se creó el comprador",
                })
            }
        });


    }
}

    </script>
    {{-- <script src="{{asset('dist/js/indexTrabajadorNotaria.js')}}"></script> --}}

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
