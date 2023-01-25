
@extends('layout.aplikasi')

@section('container')
    <div class="relative overflow-x-auto py-10 px-20">
        <table class="w-full text-sm text-center text-slate-600">
            <thead class="text-xs text-black uppercase bg-gray-300">
              <tr>
                <th scope="col" class="px-4 py-3 rounded-l-lg">No.Daftar</th>
                <th scope="col" class="px-4 py-3">Nama Siswa</th>
                <th scope="col" class="px-4 py-3">Asal Sekolah</th>
                <th scope="col" class="px-4 py-3">Jurusan 1</th>
                <th scope="col" class="px-4 py-3">Jurusan 2</th>
                <th scope="col" class="px-4 py-3">Tanggal Daftar</th>
                <th scope="col" class="px-4 py-3 rounded-r-lg">Hasil Seleksi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-white">
                <td scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">ex</td>
                <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">ex</td>
                <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">ex</td>
                <td scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">ex</td>
                <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">ex</td>
                <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">ex</td>
                <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">ex</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection