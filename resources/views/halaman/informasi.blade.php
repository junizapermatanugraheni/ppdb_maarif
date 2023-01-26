
@extends('layout.aplikasi')

@section('container')

<div class="relative overflow-x-auto py-10 px-20">
  <table class="w-full text-sm text-center text-slate-600">
    <thead class="text-xs text-black uppercase bg-gray-300">
      <tr>
        <th scope="col" class="px-4 py-3 rounded-l-lg">jurusan</th>
        <th scope="col" class="px-4 py-3">total kelas</th>
        <th scope="col" class="px-4 py-3 rounded-r-lg">jumlah siswa</th>
      </tr>
    </thead>
    <tbody>
      <tr class="bg-white">
        <td scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">Teknik Kendaraan Ringan Otomotif (TKRO)</td>
        <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">2 Kelas</td>
        <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">100 Siswa</td>
      </tr>
      <tr class="bg-white">
        <td scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">Rekaya Perangkat Lunak (RPLA)</td>
        <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">2 Kelas</td>
        <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">150 Siswa</td>
      </tr>
      <tr class="bg-white">
        <td scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">Administrasi Perkantoran (AP)</td>
        <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">1 Kelas</td>
        <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">50 Siswa</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection