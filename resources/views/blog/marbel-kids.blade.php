@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.educastudio.com/uploads/brand/55_20201228_094818.png?v=1.0);
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
            <h1 class="display-4">Marbel & Friend - Kids Games</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <hr>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_180947.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Peternakan</h4></div>
                            <br>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_152635.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Penyelamat Hewan</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_152509.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Polisi</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_152347.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Fun Vegetable & Fruits</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_152218.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Ear Doctor Clinic</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_152047.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Eye Center</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_151830.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Ear Doctor For Pets</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_151621.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Fun Number</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_151233.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Perawat Hewan Lucu</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_150920.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Pengasuh Anak</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_150757.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Pemadam Kebakaran</h4></div>
                        </div>
                    </div>
                </div>             

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_150619.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Monster Garden</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_150437.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Kedai Mie Pelangi</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_150258.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Laundry Cuci Pakaian</h4></div>
                        </div>
                    </div>
                </div> 
                
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_150110.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Nonton Film di Bioskop</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_145904.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Liburan di Pantai</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_145801.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Belanja di Supermarket</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_145449.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Memasak di Restoran</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_145340.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Berlari</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_145220.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Pesawat Terbang</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_145053.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Kereta Api</h4></div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection