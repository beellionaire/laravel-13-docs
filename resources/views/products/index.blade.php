<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- this is a Blade comment : not render in browser --}}

    <!-- this is a HTML comment : render in browser -->

    <!-- PHP SYNTAX -->
    @php
        echo('Hello Gais')
    @endphp

    <!-- PERULANGAN -->
    @for($i=0; $i<10; $i++)
        <p>Perulangan ke : {{ $i }}</p>

    <!-- KONDISIONAL -->
    @if($i == 5)
        <h1>This is number {{ $i }}</h1>
    @endif

    @endfor

    <!-- STRUKTUR LAYOUT -->
    <!--
        Digunakan untuk membangun arsitektur halaman web agar komponen seperti navbar atau sidebar tidak perlu ditulis berulang-ulang di setiap halaman.
        1. @extends('layouts.app'): Menandakan bahwa file view saat ini mewarisi (menggunakan kerangka) dari file master app.blade.php.
        2. @yield('content'): Digunakan di file master untuk menentukan di mana konten dari file child [@section(...)] akan ditampilkan.
        3. @section('content') ... @endsection: Digunakan di file child untuk mengisi blok yang sudah disiapkan oleh @yield.
        4. @include('partials.navbar'): Menyisipkan keseluruhan isi file view lain ke dalam view saat ini.
    -->

    <!-- FORM DAN KEAMANAN -->
    <!--
       Laravel mewajibkan pengamanan pada form yang memodifikasi data. Directives ini mempermudah implementasinya.
       1. @csrf: Wajib diletakkan di dalam tag <form> untuk method POST, PUT, PATCH, dan DELETE guna menghasilkan input token tersembunyi yang mencegah serangan Cross-Site Request Forgery.
       2. @method('PUT'): HTML standar hanya mendukung form GET dan POST. Directive ini memalsukan method HTTP agar form bisa mengirimkan request PUT, PATCH, atau DELETE ke route Laravel Anda.
    -->


</body>

</html>
