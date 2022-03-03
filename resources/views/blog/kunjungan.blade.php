@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://iuse.it/wp-content/uploads/2021/05/jess-bailey-q10VITrVYUM-unsplash-1.jpg);
            filter: brightness(50%);
            height: 300px;
            width: 855px;
            text-align: center;
            background-size: cover;
            position: relative;
            margin-left: -15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .jumbotron .display-4{
            color: black;
            font-size: 40px;
            font-weight: bold;
        }
   
        .jumbotron .lead {
            color: black;
            font-size: 25px;
            font-weight: bold;
        }
        
        .jumbotron p {
            color: black;
            font-size: 25px;
            font-weight: bold;
        }

        .text {
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 125px;
            color: orange;
        }

        .card-title h4 {
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 18px;
            color: orange;
        }

        .teks p {
            text-align: justify;
        }
    </style>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Kunjungan Industri</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <div class="teks">
        <p>
        Educa Studio sering menerima kunjungan Industri dari dunia pendidikan baik itu SMK, LPK maupun Perguruan Tinggi. <br>
        Apa yang didapatkan peserta kunjungan industri?<br>
        <ul>
            <li>Seminar tentang perkembangan industri terbaru terutama terkait dengan industri kreatif game, animasi, komik, IP (Intelectual Property)</li>
            <li>Motivasi kepada peserta tentang potensi lapangan kerja maupun wirausaha di bidang kreatif</li>
            <li>Peserta akan melihat langsung proses produksi baik produk digital maupun produk merchandise dari Educa Studio</li>
            <li>Peserta dapat bertanya secara langsung, terkait dengan perkembangan industri, proses produksi, proses distribusi dan berbagai hal yang berhubungan dengan industri kreatif</li>
            <li>Peserta dapat mencoba langsung produk-produk Educa Studio sebagai gambaran hasil jadi ouput industri kreatif</li>
            </p><br>
        </ul>   
    </div>
    <hr>
@endsection