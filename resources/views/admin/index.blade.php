<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Dashboard</title>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    
    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="logo_m.png" rel="shortcut icon">
</head>
<body>
    <div class="drawer">
        <!-- Backdrop -->
        <div class="drawer__overlay">
            <div class="row">
                <div class="col-sm-5 mb-3 mb-sm-0">
                    <div class="card" style="margin-left:300px; margin-top:100px;">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                    <div class="card" style=" margin-top:100px;">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                    <div class="card" style="margin-top:100px;">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Sidebar -->
        <div class="drawer__sidebar">
            <img src="logo.jpg" alt="Logo" width="240" height="auto" style="margin-left: 10px; margin-top:10px">
            <hr style="color: white; ">
            <ul>
                <li>
                    <a href="/admin"><i class="bi bi-house me-3"></i>Dashboard</a>
                </li>
                <li>
                    <a href="/admin/informasi_siswa"><i class="bi bi-folder me-3"></i>Data Siswa</a>
                </li>
                <li>
                    <a href="/admin/input_data"><i class="bi bi-folder-plus me-3"></i>Tambah Data</a>
                </li>
                <li>
                    <a href="/admin/laporan"><i class="bi bi-file-text me-3"></i>Laporan</a>
                </li>
            </ul>
            <hr style="color: white; margin-top: 530px;">
            <ul>
                <li>
                    <a href="#"><i class="bi bi-box-arrow-right me-3"></i>Logout</a> 
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>