@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.educastudio.com/uploads/brand/12_20201228_095009.png?v=1.0);
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
            <h1 class="display-4">Marbel - Educational Games</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <hr>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_181229.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Premium</h4></div>
                            <br>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_121547.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Piano</h4></div>
                            <br>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_121416.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Teliti Mencari Perbedaan</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_121227.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Belajar Bahasa Inggris</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_121054.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Laki-laki dan Perempuan</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_120939.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Tangram</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_120755.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Juz Amma</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_120638.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Doa Anak Muslim</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_120516.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Rambu Lalu Lintas</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_115646.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel PreSchool 3D</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_113110.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Budaya Nusantara</h4></div>
                        </div>
                    </div>
                </div>             

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_112917.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Hanacaraka</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_112627.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Pramuka</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_112413.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Transportasi</h4></div>
                            <br>
                        </div>
                    </div>
                </div> 
                
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_112228.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Olahraga</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_112105.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Pohon Keluarga</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_111914.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Bagian Tubuh</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_111306.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Profesi</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_111112.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Perbandingan</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_110902.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Tata Surya</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_110703.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Bendera</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_110406.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Puzzle Transportation</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_110154.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Puzzle Food</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_105944.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Puzzle Animal</h4></div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection