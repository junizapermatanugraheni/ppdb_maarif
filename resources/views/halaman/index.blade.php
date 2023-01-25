
@extends('layout.aplikasi')

@section('container')

    <div class="flex flex-col">
        <div class="flex flex-row px-20 py-20">
            <div class="flex flex-initial w-3/6">
                <div class="flex flex-col justify-center">
                    <div class="flex">
                        <h1 class="text-4xl md:text-5xl xl:text-4xl font-bold mb-5 text-left self-center leading-12">Selamat Datang Di PPDB</h1>
                    </div>
                    <div class="flex">
                        <h1 class="text-[#01762f] text-4xl md:text-5xl xl:text-4xl font-bold mb-5 text-left self-center leading-12">SMK MA'ARIF WONOSARI 2023</h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-initial w-3/6">
                <img src="image.png" class="w-100 hero">
            </div>
        </div>
    </div>
@endsection