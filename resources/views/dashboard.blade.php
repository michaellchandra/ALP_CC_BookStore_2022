@extends('layouts.app')
@section('content')
{{-- <x-app-layout class="mt-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12v mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout> --}}
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-8 text-center text-md-start mx-auto">
            <div class="text-center">
                <h1 class="display-6 mb-5">Selamat Datang&nbsp;<span
                        class="underline fw-bold">{{ Auth::user()->name }}</span>.</h1>
                <p class="fs-5 text-muted mb-5">Cari buku dari mana saja, kapan saja dengan real-time</p>
                <a class="btn btn-warning shadow" role="button" href="{{ url('/documentation') }}">Lihat
                    Dokumentasi</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
          Akses Autentikasi
        </div>
        <div class="card-body">
          <h5 class="card-title">Cara Mengakses API dengan Akun</h5>
          <p class="card-text">1. Gunakan URL Oauth Token untuk mengakses <a href="http://127.0.0.1:8000/oauth/token">http://127.0.0.1:8000/oauth/token</a></p>
          <p class="card-text">2. Gunakan Parameter berikut ke aplikasi Postman dan sesuaikan dengan data user anda</p>
        <code>grant-type</code><p>password</p>
        <code>client-id</code> <p>2</p>
        <code>client-secret</code> <p>ZfGNpVFrtT3RcpccXu8rMmbnxw5miQy59cErpxVX</p>
        <code>username</code> <p>Masukkan email anda</p>
        <code>username</code> <p>Masukkan password anda</p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
          <p class="card-text">3. Apabila telah mendapatkan <code>bearer & access token</code> maka dapat digunakan untuk mengakses data kami sesuai url yang tersedia</p>
        </div>
        
      </div>
      
</div>


@endsection