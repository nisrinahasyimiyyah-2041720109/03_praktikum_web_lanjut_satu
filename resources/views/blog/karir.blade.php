@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://aksaragama.com/wp-content/uploads/2021/06/karir-1.jpg);
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
    </style>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Karir</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <hr>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1943833825_20220218_113126.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Illustrator</h4></div>
                            <br>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1709100876_20220211_143729.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Trainer Bisnis dan Pemasaran</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/363387790_20220210_132600.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Frontend Developer</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1052741062_20220207_115822.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Digital Strategis</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/626065451_20220119_104953.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Customer Servis</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/update_20220113_185121.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Game Programmer</h4></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection