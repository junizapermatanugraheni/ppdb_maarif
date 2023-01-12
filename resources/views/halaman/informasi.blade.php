
@extends('layout.aplikasi')

@section('container')
<div class="container border">
    <p class="text-start fs-2 fw-bold">SMK Ma'arif Wonosari</p>
    <p class="text-start fs-8 fw-bold">Informasi Sekolah</p>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope='col'>No</th>
                    <th scope='col'>Jurusan</th>
                    <th scope='col'>Total Kelas</th>
                    <th scope='col'>Jumlah Siswa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>1</th>
                    <td>Teknik Kendaraan Ringan Otomotif (TKRO)</td>
                    <td>2 Kelas</td>
                    <td>100 Siswa</td>
                </tr>
                <tr>
                    <th scope='row'>2</th>
                    <td>Rekaya Perangkat Lunak (RPLA)</td>
                    <td>2 Kelas</td>
                    <td>150 Siswa</td>
                </tr>
                <tr>
                    <th scope='row'>3</th>
                    <td>Administrasi Perkantoran (AP)</td>
                    <td>1 Kelas</td>
                    <td>50 Siswa</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="text-center fs-9">Anda bisa mengakses informasi lain pada link dibawah ini</p>
    <p class="text-center fs-9">Website Resmi : <a href="https://smkmaarifwonosari.sch.id/">SMK MA'ARIF WONOSARI</a> </p>
</div>
@endsection