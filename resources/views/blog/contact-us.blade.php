@extends('blog.master')

@section('content')
    <style>
        .jumbotron {
            background-image: url(https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-1663868/panasonic_telepon-panasonic-kx-tsc11-kabel-single-line---telepon-rumah-kantor_full02.jpg);
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
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 15px;
            color: black;
        }
    </style>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Contact</h1>
            <p class="lead" style="font-weight: 300;">Home / {{ $halaman }}</p>
        </div>
    </div>
    
    <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.133239750428!2d110.50674321478309!3d-7.338930574225304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a79cd5b457ba7%3A0x75924ec25b045910!2sJl.%20Gilingrejo%20No.10%2C%20Gendongan%2C%20Kec.%20Tingkir%2C%20Kota%20Salatiga%2C%20Jawa%20Tengah%2050743!5e0!3m2!1sen!2sid!4v1646290378551!5m2!1sen!2sid" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br><br>
    </center>

    <div class="text">
        <a aria-label="Lihat peta lebih besar" target="_blank" jstcache="20" 
            href="https://www.google.com/maps/place/Jl.+Gilingrejo+No.10,+Gendongan,+Kec.+Tingkir,+Kota+Salatiga,+Jawa+Tengah+50743/@-7.3389306,110.5067432,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a79cd5b457ba7:0x75924ec25b045910!8m2!3d-7.3389359!4d110.5089319" 
            jsaction="mouseup:placeCard.largerMap">Lihat peta lebih besar</a><br>
        
        <p>Jl. Gilingrejo No. 10 Salatiga, Jawa Tengah 50743</p>
        <p>(+62) 298 6031005</p>
        <p><a href="mailto:cs@educastudio.com">cs@educastudio.com</a></p> 
    </div>  
@endsection