@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.educastudio.com/new_template/img/slider/01_BannerMarbel.png?v=1.0);
            filter: brightness(70%);
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
            color: white;
        }
   
        .jumbotron .lead {
            color: white;
        }
        
        .jumbotron p {
            color: white;
        }

        .text {
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 125px;
            color: red;
        }

        .card-title h4 {
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
            color: red;
        }
    </style>

    <div class="jumbotron">
    </div>
    <hr>
        <div class="text">
            <h3><a name="menu">Mari Belajar Sambil Bermain</a></h3>
        </div>
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/brand/12_20201228_095009.png?v=1.0" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel - Educational Games</h4></div>
                            Marble is a brand for all educational games produced by Educa Studio. 
                            Until now, there have been more than a hundred applications developed in various platforms.
                        </div>
            
                        <div class="card-footer">
                            <center>
                            <a href="#" class="card-link">View Product</a>
                            </center>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/brand/55_20201228_094818.png?v=1.0" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel & Friends - Kids Games</h4></div>
                            Find digital toys that safe for your kids? Now, we have Marbel & Friends. 
                            Kids Game series like Marbel Supermarket, Marbel Fishing, Marbel Robots and The others.
                        </div>
            
                        <div class="card-footer">
                            <center>
                            <a href="#" class="card-link">View Product</a>
                            </center>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/brand/4_20201228_094944.png?v=1.0" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Riri - Story Books</h4></div>
                            <br>
                            Riri is a brand for the digital story book for kids. Equipped with cool 
                            animations and interesting illustrations, Riri are developed in various platforms.
                        </div>
            
                        <div class="card-footer">
                            <center>
                            <a href="#" class="card-link">View Product</a>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/brand/9_20201228_094851.png?v=1.0" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kolak - Kids Songs</h4></div>
                            Kolak is a brand for interactive kids song. New Kids Song Collaborated with 
                            various kids song writers. More than 1,000 songs will be produced in the best quality of albums
                        </div>
            
                        <div class="card-footer">
                            <center>
                            <a href="#" class="card-link">View Product</a>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/brand/70_20201228_094916.png?v=1.0" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Kabi - Islamic Apps</h4></div>
                            Kabi is a brand for the digital story book for islamic children's. Equipped with cool 
                            animations and interesting illustrations, Kabi are developed in various platforms.
                        </div>
            
                        <div class="card-footer">
                            <center>
                            <a href="#" class="card-link">View Product</a>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/brand/update_20201231_133505.png?v=1.0" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title"><h4>Marbel Junior - Merchandise & Licensing</h4></div>
                            <br>
                            Get official merchandise at here. High quality of design and material from Educa Studio's brands.
                        </div>
            
                        <div class="card-footer">
                            <center>
                            <a href="#" class="card-link">View Product</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <hr><br>
@endsection