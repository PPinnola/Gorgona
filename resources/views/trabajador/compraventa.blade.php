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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/Logo.png')}}">
    <title>Gorgona</title>
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('extra-libs/prism/prism.css')}}">
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
                        <a href="index.html">
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
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('dist/img/PPT- Gorgona.png') }}" alt="user"
                                    class="rounded-circle" width="40">
                                    <span class="ml-2 d-none d-lg-inline-block"><span>Hola!</span> <i data-feather="chevron-down"
                                    class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><i data-feather="power"
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
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('trabajador.index') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('trabajador.registrar') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Registro usuarios</span></a></li>
                        <li class="list-divider"></li>
                        {{-- <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ticket List
                                </span></a>
                        </li> --}}

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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Generar Escritura</h4>
                        {{-- <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div> --}}
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
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title mb-3">Generar una escritura</h4> -->
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                    <li class="nav-item">
                                        <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Datos Propiedad</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 " id="p">
                                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Datos del Vendedor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0" id="s">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Datos del Comprador</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" href="#document1" aria-expanded="false" class="nav-link rounded-0">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Documento</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- inicio del formulario -->
                                <div class="tab-content mt-5">
                                    <!-- Datos de la propiedad -->
                                    <div class="tab-pane show active" id="home1">
                                        <form action="#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nombre Condominio</label>
                                                            <input type="text" class="form-control" placeholder="" id="idp39">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Calle</label>
                                                            <input type="text" class="form-control" placeholder="" id="idp40">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Numero</label>
                                                            <input type="number" class="form-control" placeholder="" id="idp41">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Piso</label>
                                                            <input type="number" class="form-control" placeholder="" id="idp42">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Número de Departamento</label>
                                                            <input type="text" class="form-control" placeholder="" id="idp43">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Comuna</label>
                                                            <select class="custom-select mr-sm-2 text-black" id="idp44">
                                                                <option selected="">Seleccione</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Precio</label>
                                                            <input type="number" class="form-control" placeholder="" id="idp60">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Metodo de Pago</label>
                                                            <input type="text" class="form-control" placeholder="" id="idp61">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">N° de plano</label>
                                                            <input type="number" class="form-control" placeholder="" id="idp46">

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">N° de Documento</label>
                                                            <input type="number" class="form-control" placeholder="" id="idp47">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Foja propiedad</label>
                                                            <input type="number" class="form-control" placeholder="" id="idp54">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">N° de foja</label>
                                                            <input type="number" class="form-control" placeholder="" id="idp55">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Norte</label>
                                                            <input type="number" class="form-control" placeholder="coordenadas" id="idp50">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Sur</label>
                                                            <input type="number" class="form-control" placeholder="coordenadas" id="idp51">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Este</label>
                                                            <input type="number" class="form-control" placeholder="coordenadas" id="idp52">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Oeste</label>
                                                            <input type="number" class="form-control" placeholder="coordenadas" id="idp53">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin -->
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" onclick="datosPropiedad()" class="btn btn-info">Guardar datos</button>
                                                    <!-- <button type="reset" class="btn btn-dark">Reset</button> -->
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <!-- FIN DEL PRIMERO -->
                                    <!-- Datos de Vendedor -->
                                    <div class="tab-pane" id="profile1">
                                        <form action="#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Primer nombre</label>
                                                            <input type="text" class="form-control" placeholder="" id="idv13">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Segundo nombre</label>
                                                            <input type="text" class="form-control" placeholder="" id="idv14">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Tercer nombre</label>
                                                            <input type="text" class="form-control" placeholder="" id="idv15">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Primer apellido</label>
                                                            <input type="text" class="form-control" placeholder="" id="idv16">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Segundo apellido</label>
                                                            <input type="text" class="form-control" placeholder="" id="idv17">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Cédula de identidad</label>
                                                            <input type="text" class="form-control" placeholder="" id="idv21">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Estado civil</label>
                                                            <select class="custom-select mr-sm-2 text-black" id="idv19">
                                                                <option selected="">Seleccione...</option>
                                                                <option value="1">Soltero/a</option>
                                                                <option value="2">Casado/a</option>
                                                                <option value="3">Viudo/a</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nacionalidad</label>
                                                            <input type="text" class="form-control" placeholder="" id="idv18">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Fecha de nacimiento</label>
                                                            <input type="date" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Profesión</label>
                                                            <input type="text" class="form-control" placeholder="coordenadas" id="idv20">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Correo electrónico</label>
                                                            <input type="email" class="form-control" id="correoVendedor">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Teléfono</label>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h6>Dirección</h6>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Calle</label>
                                                            <input type="text" class="form-control" id="idv22">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Número</label>
                                                            <input type="number" class="form-control" id="idv23">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Comuna</label>
                                                            <select class="custom-select mr-sm-2 text-black" id="idv24">
                                                                <option selected="">Seleccione</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin -->
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" onclick="datosVendedor()" class="btn btn-info">Guardar datos</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- datos del comprador  -->
                                    <div class="tab-pane" id="settings1">
                                        <form action="#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Primer nombre</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc26">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Segundo nombre</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc27">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Tercer nombre</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc28">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Primer apellido</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc29">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Segundo apellido</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc30">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Cedula de identidad</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc34">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Estado civil</label>
                                                            <select class="custom-select mr-sm-2 text-black" id="idc32">
                                                                <option selected="">Seleccione...</option>
                                                                <option value="1">Soltero/a</option>
                                                                <option value="2">Casado/a</option>
                                                                <option value="3">Viudo/a</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nacionalidad</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc31">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Fecha de nacimiento</label>
                                                            <input type="date" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Profesión</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc33">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Correo electrónico</label>
                                                            <input type="email" class="form-control" placeholder="" id="correoComprador">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Teléfono</label>
                                                            <input type="number" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h6>Dirección</h6>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Calle</label>
                                                            <input type="text" class="form-control" placeholder="" id="idc35">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Número</label>
                                                            <input type="number" class="form-control" placeholder="coordenadas" id="idc36">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Comuna</label>
                                                            <select class="custom-select mr-sm-2 text-black" id="idc37">
                                                                <option selected="">Seleccione</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin -->
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" onclick="datosComprador()" class="btn btn-info">Guardar datos</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- FIN DEL SEGUNDO -->
                                    <div class="tab-pane" id="document1">
                                        <form>
                                            @csrf
                                            <div class="form-body">
                                                <h5 class="text-center mt-5">ESCRITURA DE COMPRAVENTA</h5>
                                                <p class="text-center" id="id1">xxx</p>
                                                <p class="text-center">A</p>
                                                <p class="text-center" id="id2">xxx</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item text-justify">
                                                        En <b id="id3">xxx</b>, República de Chile, a <b id="id4">xxx</b>, ante mí, <b id="id5">xxx</b>, Abogado, Notario Público, con oficio en calle
                                                        <b id="id6">xxx</b> número <b id="id7">xxx</b>, comuna de <b id="id8">xxx</b>,

                                                        comparecen: don/ña <b id="id13">xxx</b> <b id="id14">xxx</b> <b id="id15">xxx</b> <b id="id16">xxx</b> <b id="id17">xxx</b>, de nacionalidad
                                                        <b id="id18">xxx</b>, estado civil <b id="id19">xxx</b>, profesión <b id="id20">xxx</b>, cédula nacional de identidad número <b id="id21">xxx</b>,
                                                        con domicilio en calle <b id="id22">xxx</b> número <b id="id23">xxx</b>, comuna de <b id="id24">xxx</b>, ciudad de <b id="id25">xxx</b>, en adelante
                                                        el “vendedor”
                                                        y don/ña <b id="id26">xxx</b> <b id="id27">xxx</b> <b id="id28">xxx</b> <b id="id29">xxx</b> <b id="id30">xxx</b>, de nacionalidad
                                                        <b id="id31">xxx</b>, estado civil <b id="id32">xxx</b>, profesión <b id="id33">xxx</b>, cédula nacional de identidad número <b id="id34">xxx</b>,
                                                        con domicilio en calle <b id="id35">xxx</b> número <b id="id36">xxx</b>, comuna de <b id="id37">xxx</b>, ciudad de <b id="id38">xxx</b>, en adelante
                                                        el “comprador”, los comparecientes mayores de edad, quienes acreditan su identidad con las cédulas citadas y exponen que han convenido el siguiente
                                                        contrato de compraventa:
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>PRIMERO:</b> Don/ña <b id="id80">xxx</b> <b id="id81">xxx</b> <b id="id82">xxx</b> <b id="id83">xxx</b> <b id="id84">xxx</b>
                                                        es dueño/a del departamento ubicado en el edificio <b id="id39">xxx</b>, calle <b id="id40">XXX</b>, número <b id="id41">xxx</b>,
                                                        piso número <b id="id42">xxx</b>, departamento número <b id="id43">xxx</b>, comuna de <b id="id44">xxx</b>.,
                                                        individualizado en el plano agregado con el número <b id="id46">xxx</b> del Registro de Documentos de <b id="id47">xxx</b> y de los derechos
                                                        proporcionales en los bienes comunes. Los deslindes del inmueble donde se levanta el edificio, según plano agregado con el número
                                                        <b id="id48">xxx</b> del Registro de Documentos de <b id="id49">xxx</b> son: norte: <b id="id50">xxx</b> ; sur: <b id="id51">xxx</b>
                                                        ; este: <b id="id52">xxx</b> ; oeste: <b id="id53">xxx</b> .
                                                        La adquisición consta de la escritura pública correspondiente a la inscripción de dominio de fojas <b id="id54">xxx</b>,
                                                        número <b id="id55">xxx</b> del Registro de Propiedad del Conservador de Bienes Raíces.

                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>SEGUNDO:</b> Por el presente instrumento don/ña <b id="id85"> xxx </b> <b id="id86"> xxx </b> <b id="id87"> xxx </b> <b id="id88"> xxx </b> <b id="id89"> xxx </b>,
                                                        vende, cede y transfiere a don/ña <b id="id90"> xxx </b> <b id="id91"> xxx </b> <b id="id92"> xxx </b> <b id="id93"> xxx </b> <b id="id94"> xxx </b>,
                                                        quien compra, adquiere y acepta para sí, el inmueble singularizado en la cláusula primera del presente contrato.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>TERCERO:</b> El precio de la compraventa es la suma de <b id="id60">xxx</b>, que se pagan de la siguiente forma:<b id="id61"> xxx</b>.
                                                        Las partes vienen en renunciar expresamente a las acciones resolutorias que pudieran emanar del presente contrato.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>CUARTO:</b> La venta, afecta a las normas del DFL dos de mil novecientos cincuenta y nueve y a las normas sobre propiedad horizontal,
                                                        se hace ad corpus, en el estado en que se encuentra la propiedad, libre de hipotecas, gravámenes y prohibiciones, respondiendo el vendedor
                                                        del saneamiento, conforme a la Ley.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>QUINTO:</b> Los gastos que origine la presente escritura serán de cargo del comprador.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>SEXTO:</b> El portador de copia autorizada de la presente escritura se encuentra facultado para requerir al Conservador de Bienes
                                                        Raíces respectivo, las inscripciones, subinscripciones y anotaciones que procedan y para que rectifique, complemente y/o aclare la
                                                        presente escritura, respecto de cualquier error u omisión existente en las cláusulas relativas a la individualización de las partes,
                                                        al inmueble objeto del presente contrato, sus deslindes y/o inscripción de dominio, de acuerdo a sus títulos y/o antecedentes anteriores
                                                        o actuales, como también de cualquier error u omisión de cualquiera cláusula no principal del contrato o requisito que fuera necesario, a
                                                        juicio del Conservador de Bienes Raíces respectivo, para inscribir adecuadamente el dominio a nombre de la parte compradora. El mandatario
                                                        queda especialmente facultado para suscribir todos los instrumentos públicos y/o privados necesarios para el cumplimiento de su cometido.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>SÉPTIMO:</b> La entrega material del departamento vendido se efectúa en este acto.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>OCTAVO:</b> Por el presente instrumento, las partes se dan el más amplio y completo finiquito respecto de cualquiera promesa de
                                                        compraventa que hubiesen celebrado en relación con la propiedad objeto del presente contrato.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>NOVENO:</b> Declaran los comparecientes que los datos suministrados o proporcionados acerca de su identidad, actividades o
                                                        estados de situación o patrimonio, les corresponden y son verdaderos.
                                                    </li>
                                                    <li class="list-group-item text-justify">
                                                        <b>DÉCIMO:</b> Para todos los efectos derivados del presente contrato las partes se someten a la
                                                        jurisdicción de sus Tribunales.
                                                        En comprobante y previa lectura firman los comparecientes conjuntamente con el Notario que autoriza.
                                                    </li>

                                                </ul>

                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="button" id="btnGenerarDoc" onclick="generarDocumento()" class="btn btn-info">Generar Documento</button>
                                                    <!-- <button type="reset" class="btn btn-dark">Reset</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- FIN DEL TERCERO -->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
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
                All Rights Reserved by Gorgona.
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
    <!-- This Page JS -->
    <script src="{{asset('extra-libs/prism/prism.js')}}"></script>
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        //** Datos del vendedor ***
        // function datosVendedor() {

        $(document).ready(function() {
            $.ajax({
                dataType: "json",
                url: '{{route("trabajador.comunas")}}',
                success: function(response) {
                    response.map((u) => {
                        let option = document.createElement("option");
                        $(option).val(u.idComuna);
                        $(option).attr('name', u.nombreComuna);
                        $(option).html(u.nombreComuna);
                        $(option).appendTo("#idp44");

                        let option2 = document.createElement("option");
                        $(option2).val(u.idComuna);
                        $(option2).attr('name', u.nombreComuna);
                        $(option2).html(u.nombreComuna);
                        $(option2).appendTo("#idv24");

                        let option3 = document.createElement("option");
                        $(option3).val(u.idComuna);
                        $(option3).attr('name', u.nombreComuna);
                        $(option3).html(u.nombreComuna);
                        $(option3).appendTo("#idc37");
                    });
                }

            });
        });


        // me entrega la fecha en el formato ejemplo: 15 de junio de 2022
        let fecha = new Date();
        let options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };

        let fDoc = fecha.toLocaleDateString("es-ES", options);


        /*  Datos generales de la notaria */
        let ciudadDoc = "Coquimbo";
        let nombreNotaria = "Juan Perez Rojas";
        let calleNotaria = "Melgarejo";
        let nCalleNotaria = "881";
        let comunaNotaria = "Coquimbo";

        $('#id3').text(ciudadDoc);
        $('#id4').text(fDoc);
        $('#id5').text(nombreNotaria);
        $('#id6').text(calleNotaria);
        $('#id7').text(nCalleNotaria);
        $('#id8').text(comunaNotaria);

        //** Datos del comprador ***
        function datosComprador() {
            $('#id2').text($('#idc29').val()); /*  codigo2*/
            $('#id26').text($('#idc26').val()); /* nombre */
            $('#id27').text($('#idc27').val());
            $('#id28').text($('#idc28').val());
            $('#id29').text($('#idc29').val());
            $('#id30').text($('#idc30').val());

            $('#id90').text($('#idc26').val());
            $('#id91').text($('#idc27').val());
            $('#id92').text($('#idc28').val());
            $('#id93').text($('#idc29').val());
            $('#id94').text($('#idc30').val());

            $('#id31').text($('#idc31').val());
            $('#id32').text($("#idc32").find('option:selected').text());
            $('#id33').text($('#idc33').val());
            $('#id34').text($('#idc34').val());
            $('#id35').text($('#idc35').val());
            $('#id36').text($('#idc36').val());
            $('#id37').text($("#idc37").find('option:selected').text());

        }


        //** Datos del vendedor ***
        function datosVendedor() {
            $('#id1').text($('#idv16').val()); /* codigo01 */
            $('#id13').text($('#idv13').val()); /* Primer nombre */
            $('#id14').text($('#idv14').val()); /* Segundo nombre */
            $('#id15').text($('#idv15').val()); /* Tercer nombre */
            $('#id16').text($('#idv16').val()); /* Pirmer apllido */
            $('#id17').text($('#idv17').val()); /* Segundo apellido2 */

            $('#id80').text($('#idv13').val());
            $('#id81').text($('#idv14').val());
            $('#id82').text($('#idv15').val());
            $('#id83').text($('#idv16').val());
            $('#id84').text($('#idv17').val());

            $('#id85').text($('#idv13').val());
            $('#id86').text($('#idv14').val());
            $('#id87').text($('#idv15').val());
            $('#id88').text($('#idv16').val());
            $('#id89').text($('#idv17').val());

            $('#id18').text($('#idv18').val());
            $('#id19').text($("#idv19").find('option:selected').text());
            $('#id20').text($('#idv20').val());
            $('#id21').text($('#idv21').val());
            $('#id22').text($('#idv22').val());
            $('#id23').text($('#idv23').val());
            $('#id24').text($("#idv24").find('option:selected').text());

        }

        //** Datos de la propiedad ***
        function datosPropiedad() {
            $('#id39').text($('#idp39').val());
            $("#id40").text($("#idp40").val());
            $("#id41").text($("#idp41").val());
            $("#id42").text($("#idp42").val());
            $("#id43").text($("#idp43").val());
            $("#id44").text($("#idp44").find('option:selected').text());
            $("#id46").text($("#idp46").val());
            $("#id48").text($("#idp46").val());
            $("#id47").text($("#idp47").val());
            $("#id49").text($("#idp47").val());
            $("#id50").text($("#idp50").val());
            $("#id51").text($("#idp51").val());
            $("#id52").text($("#idp52").val());
            $("#id53").text($("#idp53").val());
            $("#id54").text($("#idp54").val());
            $("#id55").text($("#idp55").val());
            $("#id60").text($("#idp60").val()); /* valor */
            $("#id61").text($("#idp61").val()); /* metodo de pago */

        }


        function generarDocumento() {
            let data = {
                codigo1: $('#idv16').val(),
                codigo2: $('#idc29').val(),
                ciudadDoc: ciudadDoc,
                fechaDoc: fDoc,
                nombreNotario: nombreNotaria,
                calleNotaria: calleNotaria,
                nCalleNotaria: nCalleNotaria,
                comunaNotaria: comunaNotaria,
                nombreVendedor: $('#idv13').val() + " " + $('#idv14').val() + " " + $('#idv15').val() + " " + $('#idv16').val() + " " + $('#idv17').val(),
                nacionalidadVendedor: $('#idv18').val(),
                estadoCivilVendedor: $("#idv19").find('option:selected').text(),
                profesionVendedor: $('#idv20').val(),
                cedulaVendedor: $('#idv21').val(),
                calleVendedor: $('#idv22').val(),
                numDomicilioVendedor: $('#idv23').val(),
                comunaVendedor: $("#idv24").find('option:selected').text(),
                correoVendedor: $('#correoVendedor').val(),
                nombreComprador: $('#idc26').val() + " " + $('#idc27').val() + " " + $('#idc28').val() + " " + $('#idc29').val() + " " + $('#idc30').val(),
                nacionalidadComprador: $('#idc31').val(),
                estadoCivilComprador: $("#idc32").find('option:selected').text(),
                profesionComprador: $('#idc33').val(),
                cedulaComprador: $('#idc34').val(),
                calleComprador: $('#idc35').val(),
                numDomicilioComprador: $('#idc36').val(),
                comunaComprador: $("#idc37").find('option:selected').text(),
                correoComprador: $('#correoComprador').val(),
                contrasena: "1234",
                nombreCondominio: $('#idp39').val(),
                calleCondominio: $('#idp40').val(),
                numeroCondominio: $('#idp41').val(),
                pisoDepartamento: $('#idp42').val(),
                numeroDepartamento: $('#idp43').val(),
                comunaDepartamento: $("#idp44").find('option:selected').text(),
                numeroPlano: $('#idp46').val(),
                numeroDocumento: $('#idp47').val(),
                fojaPropiedad: $('#idp54').val(),
                numeroFoja: $('#idp55').val(),
                norte: $('#idp50').val(),
                sur: $('#idp51').val(),
                este: $('#idp52').val(),
                oeste: $('#idp53').val(),
                precio: $('#idp60').val(),
                formaDePago: $('#idp61').val(),
            };

            $.ajax({
                headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                type:'Post',
                dataType:"json",
                url: '{{route("compraventa.submit")}}',
                data: data,
                success: function(response) {
                    if(response == 200){
                        $url = '{{route("trabajador.index")}}'
                        window.location.replace($url);
                    }
                }

            });
           

        }
    </script>

</body>

</html>
























