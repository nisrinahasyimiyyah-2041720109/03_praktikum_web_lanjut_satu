@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.linovhr.com/wp-content/uploads/2021/01/anak-magang.jpg);
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
            <h1 class="display-4">Magang</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <div class="teks">
        <p>
        <b>MAGANG TEKNIS</b><br>
        Magang dalam bidang teknis seperti Design (Game design, Web/App design, UI/UX design), Art & Illustration (Sketch, Storyboard, Character Dev, Game Assets Production, Animation Assets Production), 3D Creation, Video & Animation, Audio Engineering, QA & Testing dan Programming (Game, Web, Apps).
        Kami mengalihkan semua proses pendaftaran, proses magang dan pelaporan melalui kerjasama dengan Game Lab Indonesia. Jadi jika ingin magang di Educa Studio yang berhubungan dengan hal-hal teknis seperti di atas, maka silakan melakukan pendaftaran melalui situs https://www.gamelab.id
        <br><br>
        <b>MAGANG NON-TEKNIS</b><br>
        Magang non teknis meliputi Marketing (digital marketing, copywriting, content marketing, SEO, ASO, growth hacking, dan lain-lain), Business Development (partnership dan lain-lain), Keuangan (finance, accounting, etc), Public Relation, Sekretaris, Administrasi Bisnis dan PGSD (keguruan).
        Untuk magang non teknis seperti di atas, silakan melakukan apply melalui email cs@educastudio.com dengan Subject “[Internship] Nama Program“. Contohnya “[internship] Public Relation”. Sertakan CV lengkap, durasi magang, motivasi magang dan profil institusi (kampus dan smk).
        </p><br>
    </div>
    <hr>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/105455705_20210105_095155.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Bisnis dan Manajemen</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/85264976_20210105_094926.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>QA & Testing</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1291513873_20210105_094711.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Digital Music</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1642505174_20210105_094441.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Video & Animation</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1760879390_20210105_094220.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>3D Creation</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1120482678_20210105_093939.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Art & Illustration</h4></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection