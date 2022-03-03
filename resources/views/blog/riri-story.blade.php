@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.educastudio.com/uploads/brand/4_20201228_094944.png?v=1.0);
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
            <h1 class="display-4">Riri - Story Books</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <hr>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_172633.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kisah Keledai yang Dungu</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_172517.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kisah Kerbau Kancil dan Ular</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_172215.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Landak dan Ular</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_172106.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kancil dan Buaya</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_172011.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kancil dan Merak yang Sombong</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171856.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kancil dan Siput Adu Pintar</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171754.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Bangau yang Angkuh</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171642.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Bangau dan Rubah</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171540.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Singa dan Tikus</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171434.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Burung Hantu dan Belalang</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171330.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kancil Mencuri Timun</h4></div>
                            <br>
                        </div>
                    </div>
                </div>             

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171150.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Beruang dan Lebah Madu</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_171044.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Ayam Jantan dan Rubah Licik</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170943.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kawah Si Kidang</h4></div>
                            <br>
                        </div>
                    </div>
                </div> 
                
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170837.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Putri Rainun dan Rajo</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170720.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Legenda Baruklinting</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170618.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kisah Angsa dan Telur Emas</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170508.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kreasi Kaleng Bekas</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170405.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Layang-layang Kreatifku</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170255.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Lampu Hias Kreatifku</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_170147.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Bumiku Bebas Sampah</h4></div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection