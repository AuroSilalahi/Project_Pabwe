{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Dashboard - Afrizals Blog</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{url('assets/css/styles.css')}}" rel="stylesheet"/>
        <link
            href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
            rel="stylesheet"
            crossorigin="anonymous"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Afrizals Blog</a>
            <button
                class="btn btn-link btn-sm order-1 order-lg-0"
                id="sidebarToggle"
                href="#">
                <i class="fas fa-bars"></i>
            </button >
            <!-- Navbar Search-->
            <form
                class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input
                        class="form-control"
                        type="text"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"/>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        id="userDropdown"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
 
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <h1>Login Sebagai:
                            {{ Auth::user()->role }}</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
 
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                                    <div class="card-body">
                                        <canvas id="myAreaChart" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                    <div class="card-body">
                                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Afrizals Blog 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
 
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    {{-- <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/"> --}}
    <title>Home</title>
    
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fa fa-bars" aria-hidden="true" id="sidebar_btn"></i>
        </label>
        <div class="search">
            <input type="text" placeholder="Cari buku...">
            <a href="#"><div class="loop"><i class="fa fa-search" aria-hidden="true"></i></div></a>
        </div>
        <div class="left_area">
            <h3>E<span>Perpus</span></h3>
        </div>
        <div class="right_area">
            <a href="{{url('logout')}}" class="logout_btn">Logout</a>
        </div>
    </header>
    <div class="sidebar">
        <center>
            <img src="img/pendidikan.png" class="profile_image" alt="">
            <h4>{{ Auth::user()->name }}</h4>
            <h5 style="text-transform: capitalize">{{ Auth::user()->role }}</h5>
        </center>
        <a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-book-open"></i><span>Request Buku</span></a>
        <a href="#"><i class="far fa-plus-square"></i><span>Tambah Buku</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Settings</span></a>
    </div>

    <div class="content">
        <button type="button" class="btn_top"><img src="img/pendidikan.png"> Pendidikan</button>
        <button type="button" class="btn_top"><img src="img/hiburan.png"> Hiburan</button>
		<button onclick = "window.open('https://epaper.majalahteras.com/', '_blank')" type = "button" class="btn3"> Majalah </button>
		<button onclick = "window.open('https://epaper.hariansib.com/', '_blank')" type = "button" class="btn4"> Koran </button>

        <main>
            <div class="load">
                <div class="foto">
                    <img src="../img/6.png" alt="">
                </div>
                <div style="width: 50%">
                <h3>Campbell Jilid 1</h3>
                <h4>N.A. CAMPBELL · 2010</h4>
                   <p>Buku Biologi karya Neil A. Campbell & Jane B. Reece ini merupakan buku yang paling banyak digunakan di berbagai universitas di Indonesia,
                    karena melayani para mahasiswa sebagai buku teks untuk kuliah biologi umum serta...</p> <br>
                </div>
            </div>
            <div class="load">
                <div class="foto">
                    <img src="../img/5.png" alt="coba1">
                </div>
                <div style="width: 50%">
                <h3>Campbell Jilid 2</h3>
                <h4>N.A. CAMPBELL · 2012</h4>
                   <p>Buku Biologi karya Neil A. Campbell & Jane B. Reece ini merupakan buku yang paling banyak digunakan di berbagai universitas di Indonesia,
                    karena melayani para mahasiswa sebagai buku teks untuk kuliah biologi umum serta sebagai...</p> <br>
                </div>
            </div>
            <div class="load">
                <div class="foto">
                    <img src="../img/7.png" alt="">
                </div>
                <div style="width: 50%">
                    <h3>Calculus Jilid 1</h3>
                    <h4>Endang, ‎Dadang Juandy · 2020</h4>
                       <p>Kalkulus Jilid 1 berisi materi-materi yang menunjang perkuliahan kalkulus diferensial dan kalkulus integral.</p> <br>
                </div>
            </div>
            <div class="load">
                <div class="foto">
                    <img src="../img/8.png" alt="">
                </div>
                <div style="width: 50%">
                    <h3>Calculus Jilid 2</h3>
                    <h4>Yusak I. Bien, Farida D, Prida N. L. T.· 2018 </h4>
                       <p>Buku Kalkulus Integral Berbasis Maple ini diterbitkan oleh penerbit deepublish dan tersedia juga versi cetaknya. </p> <br>
                </div>
            </div>
            <div class="load">
                <div class="foto">
                    <img src="../img/9.png" alt="">
                </div>
                <div>
                    <h3>Kunci Jawaban Calculus Jilid 1</h3>
                    <h4>Kumala Indriati · 2019 </h4>
                    <p>Buku kalkulus Dasar Untuk Perguruan Tinggi berisi kunci jawaban kalkulus adisi I.</p> <br>
                </div>
            </div>
        </main>
    </div>
    
    
</body>
</html>