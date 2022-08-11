<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Fakta</title>

    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link href="{{ asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-0">
                    <img src="{{asset('asset/img/foto.png')}}" width="60">
                </div>
                <div class="sidebar-brand-text mx-2">Data Fakta</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/index') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
            
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Teknologi</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('hardware.index')}}">Hardware</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('artificialintelligence.index')}}">Artificial Intelligence</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('cybersecurity.index')}}">Cyber Security</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('androiddeveloper.index')}}">Android Developer</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('iosdeveloper.index')}}">Ios Developer</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('webdeveloper.index')}}">Web Developer</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('uiux.index')}}">UI/UX</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('software.index')}}">Software</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('database.index')}}">Database</a>  
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('anonymous.index')}}">Anonymous</a> 
                    </div>
                </div>
            </li>
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages1">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Kesehatan</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">  
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('alatkesehatan.index')}}">Alat Kesehatan</a> 
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('empatslimas.index')}}">4 Sehat 5 Sempurna</a>  
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('virus.index')}}">Virus</a>  
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('vaksin.index')}}">Vaksin</a> 
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('obat.index')}}">Obat</a> 
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('covid.index')}}">Covid-19</a>  
                    </div>
                </div>
            </li>
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
                    aria-expanded="true" aria-controls="collapsePages2">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Agama</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('agama.index')}}">Agama</a>  
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('aliranaswaja.index')}}">Aliran Aswaja</a>  
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('aliransesat.index')}}">Aliran Sesat</a>  
                    </div>
                </div>
            </li>
            <li class="nav-item">                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages8"
                    aria-expanded="true" aria-controls="collapsePages8">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Lainnya</span>
                </a>
                <div id="collapsePages8" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('beritaterupdate.index')}}">Berita Terupdate</a>   
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('catatanterbaik.index')}}">Catatan Terbaik</a>
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('catatanterburuk.index')}}">Catatan Terburuk</a> 
                        <a class="collapse-item fas fa-arrow-circle-right" href="{{route('lainnya.index')}}">Lainnya</a>   
                    </div>
                </div>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <div class="input-group-append">
                                <h4>Data Fakta</h4>
                            </div>
                        </div>
                    </form>

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
                                            placeholder="Search for..." aria-label="Search"
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

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <!-- Page Heading -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Create By: Your Name<br>Copyright &copy; Your Website 2020</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar aplikasi ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" apabila ingin keluar aplikasi</div>
                <div class="modal-footer">
                  <a class="btn btn-primary" href="{{ route('logout') }}" 
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="asset/vendor/chart.js/Chart.min.js"></script>
    <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/chart-area-demo.js"></script>
    <script src="asset/js/demo/chart-pie-demo.js"></script>
    <script src="asset/js/demo/datatables-demo.js"></script>
    
</body>

</html>