<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario tecnológico</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('img/logo.ico') }}">

    @yield('head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/proyecto-app/public/">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('img/logo.png')}}" alt="" srcset="">
                    
                </div>
                <!--<div class="sidebar-brand-text mx-3">Inventario equipos tecnológico </div>-->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            @can('usuario.index')
            <li class="nav-item">
                <a class="nav-link" 
                    aria-expanded="true" >
                    <span>Administración:</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
             
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuario.index')}}" 
                        aria-expanded="true">
                        <span>Usuario</span>
                    </a>
                </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('rol.index')}}"
                    aria-expanded="true">
                    <span>Roles</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('permiso.index')}}"
                    aria-expanded="true">
                    <span>Permisos</span>
                </a>
            </li>
            
            <hr class="sidebar-divider d-none d-md-block">
            @endcan
            <li class="nav-item">
                <a class="nav-link collapsed" 
                    aria-expanded="true">
                    <span>Gestión:</span>
                </a>
            </li>
            
            
            @can('persona.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('persona.index')}}"
                    aria-expanded="true">
                    <span>Persona</span>
                </a>
            </li>
            @endcan
            @can('empleado.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('empleado.index')}}"
                    aria-expanded="true">
                    <span>Empleado</span>
                </a>
            </li>
            @endcan
            @can('ciudad.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('ciudad.index')}}"
                    aria-expanded="true">
                    <span>Ciudad</span>
                </a>
            </li>
            @endcan
            @can('area.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('area.index')}}"
                    aria-expanded="true">
                    <span>Área</span>
                </a>
            </li>
            @endcan
            @can('cargo.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('cargo.index')}}"
                    aria-expanded="true">
                    <span>Cargo</span>
                </a>
            </li>
            @endcan
            @can('marca.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('marca.index')}}"
                    aria-expanded="true">
                    <span>Marca</span>
                </a>
            </li>
            @endcan
            @can('modelo.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('modelo.index')}}"
                    aria-expanded="true">
                    <span>Modelo</span>
                </a>
            </li>
            @endcan
            @can('equipo.index')
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('equipo.index')}}"
                    aria-expanded="true">
                    <span>Equipo</span>
                </a>
            </li>
            @endcan
            
            @can('inventario.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('inventario.index')}}"
                    aria-expanded="true">
                    <span>Inventario</span>
                </a>
            </li>
            @endcan
            @can('asignacion.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('asignacion.index')}}"
                    aria-expanded="true">
                    <span>Asignacion</span>
                </a>
            </li>
            @endcan
            @can('tipoequipo.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('tipo_equipo.index')}}"
                    aria-expanded="true">
                    <span>Tipo de equipo</span>
                </a>
            </li>
            @endcan
            @can('proveedor.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('proveedor.index')}}"
                    aria-expanded="true">
                    <span>Proveedor</span>
                </a>
            </li>
            @endcan
            @can('motivobaja.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('motivo_baja.index')}}"
                    aria-expanded="true">
                    <span>Motivo de baja</span>
                </a>
            </li>
            @endcan
            @can('salidarevision.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('salida_revision.index')}}"
                    aria-expanded="true">
                    <span>Salida por revision</span>
                </a>
            </li>
            @endcan
            @can('bajainventario.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('bajainventario.index')}}"
                    aria-expanded="true">
                    <span>Baja de inventario</span>
                </a>
            </li>
            @endcan
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link collapsed" 
                    aria-expanded="true">
                    <span>Gráfico:</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('equipo.grafico')}}"
                    aria-expanded="true">
                    <span>Cantidades de laptops</span>
                </a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-orange topbar mb-4 static-top shadow">

                    <div class="sidebar-brand-icon">
                        <a href="/proyecto-app/public/">
                            <img src="{{asset('img/logo1.png')}}" alt="" srcset="">
                        </a>
                        
                    </div>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search forr..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        
                        <div class="topbar-divider d-none d-sm-block"></div>
                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Auth::user()->persona->nombres.' '.Auth::user()->persona->apellidos}}
                                </span>
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            @yield('encabezado')
                            
                        </div>
                        @include('flash-message')
                        <div class="card-body">
                            @yield('contenido')
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Esta seguro de cerrar sesión?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{route('logout')}}" class="btn btn-primary"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </a>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>

</body>

</html>