<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    
    <!-- My Style -->
    <link href="style.css" rel="stylesheet" >
    <link href="logo_m.png" rel="shortcut icon">
    
    <title>PPDB SMK Ma'arif Wonosari Admin</title>
</head>
<body>
    
    {{-- @include('partials.navbarAdmin') --}}
        <div class="d-flex flex-column flex-shrink-0 p-3 vh-100" style="width: 280px; height:100%; background-color: #01762f">
            <a class="navbar-brand" href="#">
                <img src="logo.jpg" alt="Logo" width="240" height="auto" class="d-inline-block align-text-middle">
            </a>
            <hr>
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-white" href="/admin" aria-current="page"> <i class="bi bi-house me-3"></i>Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="/admin/informasi_siswa"><i class="bi bi-folder me-3"></i></i>Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="/admin/input_data"><i class="bi bi-folder-plus me-3"></i>Tambah Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="/admin/laporan"><i class="bi bi-file-text me-3"></i>Laporan</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-3 mt-lg-0 ms-3 position-absolute bottom-0 start-0"> 
                <li class="nav-item ">
                    <a class="nav-link fw-bold text-white" href="#"><i class="bi bi-box-arrow-right me-3"></i>Logout</a>
                </li>
            </ul>
        </div>
        @yield('konten')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>