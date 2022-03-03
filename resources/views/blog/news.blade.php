@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.boston.com/wp-content/uploads/2021/12/https___arcmigration-prdweb.bostonglobe.com_r_Boston_2011-2020_2019_03_07_BostonGlobe.com_Magazine_Images_newspaper-61ae48121dd2e.jpeg);
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
            color: red;
        }

        .card-title h4 {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 18px;
            color: red;
        }
    </style>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">News</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <hr>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/news/update_20220302_081943.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Transformasi Gaya Pembelajaran Sekolah Masa Kini</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/news/update_20220302_081926.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Pentingnya Promosi Berbasis Digital Sekolah Masa Kini</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/news/update_20220214_170415.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Cara Mengajar Anak Berhitung Melalui Aktivitas Sehari-Hari</h4></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection