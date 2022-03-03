@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-banner-pic/032de14a54fedbb9550370b0ee4bf419.jpg);
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

        .teks p {
            text-align: justify;
        }

        .text-white p {
            font-size: 15px;
        }
    </style>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Tentang Kami</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
        </div>
            <hr>
            <div class="text">
                <h3><a name="menu">Sejarah Educa Studio</a></h3>
            </div>
            <img style="display: block; margin-left: auto; margin-right: auto;" src="https://www.educastudio.com/uploads/modules/educastudio-history-2019-02.png?1610003127643" alt="..." width="850px">
            <br>
            <div class="teks">
                <p>It was started by two PC game products, they were Marbel and Shoot Empire (as the first winner of Game Competition 2008). 
                    Later on, the founder decided to take it more professional by establishing Educa Studio on 1st April 2012. At that moment, 
                    we only focused on Edu PC Games. Later, in 2012, we plunged into Mobile Apps and Games. In 2013, we expanded into broader 
                    mobile platforms such as Windows Phone and Apple Store (iOS). We have a lot of sucessul IP such as Marbel for Educational 
                    Games for Kids, Riri for Interactive Story Books, Kabi for Moslem Kids, Kolak for Interactive Kids Song. In 2017, its 
                    amazing year we have a lot of platform to build quality content and expanding our company into merchandising, board games, 
                    interactive animation and teacher platform.</p>
            </div>
            <hr>
            <div class="section bgi-repeat" data-background="https://www.educastudio.com/img/TeksturePenghargaan.png?v=1.0" style="background-image: url(&quot;https://www.educastudio.com/img/TeksturePenghargaan.png?v=1.0&quot;);">
	            <div class="content-wrap pb-0">
		            <div class="container text-white text-light">
			            <div class="row align-items-end">
				            <div class="col-sm-12 col-md-12 col-lg-8">
                                <h2 class="section-heading text-white">
                                    Penghargaan
                                </h2>
					            <p class="text-white" id="content"></p><p>Shoot Empire (First Winner Game Competition 2008 - Salatiga)</p>
                                <p>Marbel (Second Winner Industry Creative Festival 2012 Kemenperin - Bandung)</p>
                                <p>Dandelion The Game (Finalist Indonesia Game Show 2012 - Jakarta)</p>
                                <p>Dandelion The Game (Third Winner Android Game Competition 2012 - Bandung)</p>
                                <p>Educa Studio by Andi Taru (Second Winner Youth Start Up Icon 2013 - Solo)</p>
                                <p>Marbel Belajar Membaca (First Winner Rock Star Pro Developer 2013 - Jakarta)</p>
                                <p>The Most Developer Award (NAMPOL 2014 - Jakarta)</p>
                                <p>ANUGRAH TELKOMSEL (2016 HIDUP SEKALI UNTUK BERARTI - Jakarta)</p>
                                <p>TOP DEVELOPER AWARD (2016 - DICODING - Jakarta)</p>
                                <p>RIRI STORYBOOKS - PEMENANG UTAMA - KRENOVA (2020 - Pemrov Jateng - Jawa Tengah)</p>
                                <p>FINALIS TERBAIK DAN BOOTH TERFAVORIT - APRESIASI KREASI INDONESIA (2021 - Kemenparekraf)</p><p></p>
					            <div class="spacer-90"></div>
				            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4" id="penghargaan">
                                <img src="https://www.educastudio.com/img/about/FotoPenghargaan.png?v=1.0" class="img-fluid">
                            </div>
			            </div>
		            </div>
	            </div>
            </div>
        </div>
    </div>
@endsection