<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form Pendaftaran</title>
</head>
<body>
    <div class="flex justify-center">
        <div class="flex-initial w-11/12 h-auto bg-white rounded-xl border mt-10 mb-32 shadow-lg justify-items-stretch">
            <div class="mx-4 my-4">
                <h1 class="uppercase text-lg font-medium text-center">Formulir Pendaftaran Calon Siswa Baru</h1>
                <hr class="mt-4">
                @yield('container')
            </div>
        </div>
    </div>
</body>
</html>