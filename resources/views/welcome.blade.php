<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/img/Logo.png') }}">
        <title>Gorgona</title>
{{-- 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> --}}
        <!--
        App Starter Template
        http://www.templatemo.com/tm-492-app-starter
        -->
        <link rel="stylesheet" href="home/css/bootstrap.min.css">
        <link rel="stylesheet" href="home/css/animate.css">
        <link rel="stylesheet" href="home/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="home/css/magnific-popup.css">
        
        <link rel="stylesheet" href="home/css/owl.theme.css">
        <link rel="stylesheet" href="home/css/owl.carousel.css">
        
        <link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
        
        <!-- Main css -->
        <link rel="stylesheet" href="home/css/style.css">
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
        
  <!-- PRE LOADER -->

<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>      
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
            
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon icon-bar"></span>
                            <span class="icon icon-bar"></span>
                            <span class="icon icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><span>Gorgona</span> Blockchain</a>
                    </div>
            
                     <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            {{-- <li><a href="#home" class="smoothScroll">Home</a></li>
                            <li><a href="#about" class="smoothScroll">About</a></li>
                            <li><a href="#screenshot" class="smoothScroll">Screenshots</a></li>
                            <li><a href="#pricing" class="smoothScroll">Pricing</a></li> --}}
                            <li><a href="{{ route('login') }}" class="smoothScroll">Login</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal1">Contáctanos</a></li>
                        </ul>
                    </div>            
                </div>
            </div>
            
            
            <!-- Home Section -->
            
            <section id="home" class="main">
                 <div class="overlay"></div>
                <div class="container">
                    <div class="row">
            
                           <div class="wow fadeInUp col-md-6 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0" data-wow-delay="0.2s">
                                <img src="{{ asset('home/images/logoblancosinfondo.png ') }}" class="img-responsive" alt="Home">
                           </div>
            
                           <div class="col-md-6 col-sm-7 col-xs-12">
                                <div class="home-thumb">
                                     <h1 class="wow fadeInUp" data-wow-delay="0.6s">Gorgona</h1>
                                     <br>
                                     <p class="wow fadeInUp" data-wow-delay="0.8s">El servicio que mantiene tus documentos seguros</p>
                                     {{-- <a href="#pricing" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s">Download App</a> --}}
                                </div>
                           </div>
            
                    </div>
                </div>
            </section>
            
            
            <!-- About Section -->
            
            <section id="about">
                 <div class="container">
                      <div class="row">
            
                           <div class="col-md-12 col-sm-12">
                                <div class="wow bounceIn section-title">
                                     <h1>Nuestro equipo</h1>
                                     <hr>
                                </div>
                           </div>
            
                           <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                               <h2>Liderazgo e innovación</h2>
                               <h3 class="wow fadeInUp" data-wow-delay="0.8s">Gorgona ha sido desarrollada por tres ingenieras informáticas apasionadas por la tecnología con un solo objetivo: hacer de la Blockchain un servicio accesible</h3>
                           </div>
            
                           <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                                <div class="about-thumb">
                                     <img src="{{ asset('home/images/logoblanco.png') }}" class="img-responsive" alt="Team">
                                          <div class="about-overlay">
                                               <h3>Paola Pinnola</h3>
                                               <h4>Ingeniera informática</h4>
                                               <a href="https://www.linkedin.com/in/paola-pinnola-garc%C3%ADa-935856232/" target="_blank" class="fa fa-linkedin"></a>
                                          </div>
                                </div>
                           </div>
            
                            <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                                <div class="about-thumb">
                                     <img src="{{ asset('home/images/logoblanco.png') }}" class="img-responsive" alt="Team">
                                          <div class="about-overlay">
                                               <h3>Mitzy Flores </h3>
                                               <h4>Ingeniera Informática</h4>
                                               <a href="https://www.linkedin.com/in/mitzy-flores-aa4920232/" target="_blank" class="fa fa-linkedin"></a>
                                          </div>
                                </div>
                           </div>

                           <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                              <div class="about-thumb">
                                   <img src="{{ asset('home/images/logoblanco.png') }}" class="img-responsive" alt="Team">
                                        <div class="about-overlay">
                                             <h3>Vesna Marín </h3>
                                             <h4>Ingeniera Informática</h4>
                                             <a href="https://www.linkedin.com/in/vesna-mar%C3%ADn-892289235/" target="_blank" class="fa fa-linkedin"></a>
                                        </div>
                              </div>
                         </div>
            
                      </div>
                 </div>
            </section>
            
            
            <!-- Divider Section -->
            
            <section id="divider">
                 <div class="container">
                      <div class="row">
            
                           <div class="col-md-offset-2 col-md-8 col-sm-12">
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Blockchain para todos</h1>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">Sabemos lo complicado que puede ser aplicar Blockchain en tu empresa, por eso decidimos encargarnos de todo.</h2>
                           </div>
            
                      </div>
                 </div>
            </section>
            
            
            <!-- Screenshot Section -->
            
            <section id="screenshot">
                 <div class="container">
                      <div class="row">
            
                           <div class="col-md-offset-2 col-md-8 col-sm-12">
                                <div class="section-title">
                                     <h1>¿Qué ofrece nuestro servicio?</h1>
                                     <br>
                                     <p class="wow fadeInUp" data-wow-delay="0.8s">Gracias a Gorgona, tu organización puede asegurar sus documentos de forma fácil y sencilla. Gracias al uso de tecnología blockchain aumentamos 
                                        significativamente la seguridad de tus datos, nadie podrá eliminar o espiar sus documentos de forma fraudulenta
                                     </p>
                                     {{-- <p class="wow fadeInUp" data-wow-delay="0.8s">
                                        ¿Quieres una solución para tu organización?
                                     </p>
                                     <a href="#newsletter" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s">Contáctanos</a> --}}
                                </div>
                           </div>
                      </div>
                 </div>
            </section>
            
            
            <!-- Pricing Section -->
            
            <section id="pricing">
                 <div class="container">
                      <div class="row">
            
                            <div class="col-md-12 col-sm-12">
                                <div class="section-title">
                                     <h1>Características del servicio</h1>
                                     <hr>
                                </div>
                           </div>
            
                           <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                                <div class="pricing-plan">
                                     <div class="pricing-month">
                                          <h2>Seguro</h2>
                                     </div>
                                     <br>
                                     <p>Gracias a la red Blockchain, tus documentos se encontrarán en un lugar seguro</p>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                                </div>
                           </div>
            
                           <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                                <div class="pricing-plan">
                                     <div class="pricing-month">
                                          <h2>A medida</h2>
                                     </div>
                                     <br>
                                     <p>Gorgona ajustará la solución a tus necesidades</p>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                                </div>
                           </div>
            
                           <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                                <div class="pricing-plan">
                                     <div class="pricing-month">
                                          <h2>Asistencia</h2>
                                     </div>
                                     <br>
                                     <p>Habrá personal dispuesto a atender tus consultas y/o problemas</p>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                                </div>
                           </div>
            
                      </div>
                 </div>
            </section>
            
            
            <!-- Newsletter Section -->
            
            <section id="newsletter">
                 <div class="overlay"></div>
                 <div class="container">
                      <div class="row">
            
                           <div class="col-md-offset-2 col-md-8 col-sm-12">
                                <div class="wow bounceIn section-title">
                                     <h2>¿Quieres una solución para tu organización?</h2>
                                     <br>
                                     <a href="#" data-toggle="modal" data-target="#modal1"><input name="submit" type="submit" class="form-control" id="submit" value="Contáctanos"></a>
                                </div>
                           </div>
            
                      </div>
                 </div>
            </section>
            
            
            <!-- Footer Section -->
            
            <footer>
                <div class="container">
                    <div class="row">
            
                           <div class="col-md-8 col-sm-6">
                                <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                                     <p>Copyright &copy; Gorgona 
                                     <span>||</span> 
                                     PP-MF-VM
                                </div>
                           </div>
            
                        {{-- <div class="col-md-4 col-sm-6">
                            <ul class="wow fadeInUp social-icon" data-wow-delay="0.8s">
                                     <li><a href="#" class="fa fa-facebook"></a></li>
                                     <li><a href="#" class="fa fa-twitter"></a></li>
                                     <li><a href="#" class="fa fa-google-plus"></a></li>
                                     <li><a href="#" class="fa fa-dribbble"></a></li>
                                     <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                           </div> --}}
                        
                    </div>
                </div>
            </footer>
            
            
            <!-- Modal Contact -->
            
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content modal-popup">
                      <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h2 class="modal-title">Descubre cómo Gorgona puede ayudar a tu negocio</h2>
                           <br>
                           <p style="color:#a0aec0">Rellena este formulario y un miembro de nuestro equipo se pondrá en contacto contigo obtener más información sobre las necesidades de tu organización</p>
                      </div>
            
                           <form method="POST" action="{{ route('send.email') }}" role="form" enctype="multipart/form-data">
                            @csrf <!-- {{ csrf_field() }} -->
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nombre" required>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Organización" required>
                                 <input name="email" type="email" class="form-control" id="email" placeholder="Email de contacto" required>
                                 <textarea name="message" rows="3" class="form-control" id="message" placeholder="Mensaje" required></textarea>
                                <input name="submit" type="submit" class="form-control" id="submit" value="Enviar">
                           </form>
                      </div>
            </div>
            
            
            <!-- Back top -->
            
            <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
            
            
            <!-- SCRIPTS -->
            <script src="{{ asset('home/js/jquery.js') }}" defer></script>
            <script src="{{ asset('home/js/bootstrap.min.js') }}" defer></script>
            <script src="{{ asset('home/js/jquery.magnific-popup.min.js') }}" defer></script>
            <script src="{{ asset('home/js/magnific-popup-options.js') }}" defer></script>
            <script src="{{ asset('home/js/owl.carousel.min.js') }}" defer></script>
            <script src="{{ asset('home/js/smoothscroll.js') }}" defer></script>
            <script src="{{ asset('home/js/wow.min.js') }}" defer></script>
            <script src="{{ asset('home/js/custom.js') }}" defer></script>
            
            
    </body>
</html>
