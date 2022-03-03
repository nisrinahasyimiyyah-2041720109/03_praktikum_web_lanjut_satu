@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.educastudio.com/uploads/brand/9_20201228_094851.png?v=1.0);
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
            <h1 class="display-4">Kolak - Kids Songs</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    <hr>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_181106.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Lagu Anak Gosok Gigi</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_133156.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Lagu Kak Zepe 2</h4></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_133024.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Whell On The Bus</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_132855.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Twinkle Little Star</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_132722.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Row Your Boat</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_132604.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Alphabet</h4></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_132432.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Old Mc Donald</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_132306.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Where My Little Dog</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_132157.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Mary Had A Little Lamb</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_131656.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Are You Sleeping</h4></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_131532.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kids Song Collection</h4></div>
                            <br>
                        </div>
                    </div>
                </div>             

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/product/logo_20201228_131403.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Lagu Anak Kak Zepe 1</h4></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection