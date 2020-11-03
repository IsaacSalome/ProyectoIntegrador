<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="{{ asset('stilos/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
  <link href="{{ asset('stilos/demo/demo.css') }}" rel="stylesheet" />

    <!-- Styles -->
</head>
<body>
    <div id="app">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="blue" data-image="../assets/img/sidebar-1.jpg">

      <div class="logo"><a href="#" class="simple-text logo-normal">
        AQUAPP
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item ">
            <a class="nav-link" href="/alumnos">
              <i class="material-icons">person</i>
              <p>Registros de alumnos</p>
            </a>
          </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">assignment_ind</i>Empleados
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/empleados">Registrar</a>
            <a class="dropdown-item" href="/puestos">Generar puesto</a>
          </div>
        </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">assignment_ind</i>Pagos de alumnos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/pagosA">Registrar un pago</a>
            <a class="dropdown-item" href="/conceptos">Generar concepto</a>
          </div>
        </li>

          <li class="nav-item ">
            <a class="nav-link" href="/pagosE">
              <i class="material-icons">person</i>
              <p>Pagos de Empleados</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" >{{ __('Logout') }}</a>     
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                   </form>    
            </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <main class="py-4">
                    @yield('content')
                </main>


              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
</div>
</div>

    <script src="{{ asset('stilos/js/core/jquery.min.js') }}" ></script>
    <script src="{{ asset('stilos/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('stilos/js/core/bootstrap-material-design.min.js') }} "></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('stilos/js/plugins/moment.min.js') }} "></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('stilos/js/plugins/sweetalert2.js') }} "></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('stilos/js/plugins/jquery.validate.min.js') }} "></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('stilos/js/plugins/jquery.bootstrap-wizard.js') }} "></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('stilos/js/plugins/bootstrap-selectpicker.js') }} "></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('stilos/js/plugins/bootstrap-datetimepicker.min.js') }}  "></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('stilos/js/plugins/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('stilos/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('stilos/js/plugins/bootstrap-tagsinput.js') }} "></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('stilos/js/plugins/jasny-bootstrap.min.js') }} "></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('stilos/js/plugins/fullcalendar.min.js') }} "></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('stilos/js/plugins/jquery-jvectormap.js') }} "></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('stilos/js/plugins/nouislider.min.js') }}"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('stilos/js/plugins/arrive.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <!-- Chartist JS -->
    <script src="{{ asset('stilos/js/plugins/chartist.min.js') }} "></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('stilos/js/plugins/bootstrap-notify.js') }} "></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('stilos/js/material-dashboard.js?v=2.1.2') }} " type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    


    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');
  
          $sidebar_img_container = $sidebar.find('.sidebar-background');
  
          $full_page = $('.full-page');
  
          $sidebar_responsive = $('body > .navbar-collapse');
  
          window_width = $(window).width();
  
          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
  
          if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
              $('.fixed-plugin .dropdown').addClass('open');
            }
  
          }
  
          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });
  
          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');
  
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
  
            var new_color = $(this).data('color');
  
            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }
  
            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }
  
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });
  
          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
  
            var new_color = $(this).data('background-color');
  
            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });
  
          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');
  
            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');
  
  
            var new_image = $(this).find("img").attr('src');
  
            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }
  
            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
  
              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }
  
            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
  
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }
  
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });
  
          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');
  
            $input = $(this);
  
            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }
  
              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }
  
              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }
  
              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }
  
              background_image = false;
            }
          });
  
          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');
  
            $input = $(this);
  
            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;
  
              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
  
            } else {
  
              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
  
              setTimeout(function() {
                $('body').addClass('sidebar-mini');
  
                md.misc.sidebar_mini_active = true;
              }, 300);
            }
  
            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);
  
            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);
  
          });
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
  
      });
    </script>

</body>
</html>