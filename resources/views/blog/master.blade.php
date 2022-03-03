<html>
    <head>
        <title>{{ $title }}</title>
        <!-- Menyisipkan Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>       
    </head>
    <style>
        .col-3 {
            background-color: whitesmoke;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('blog.header')
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    @include('blog.sidebar')
                </div>
                <div class="col-9">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('blog.footer')
                    </div>
                </div>
            </div>
        </footer>
        <!-- Menyisipkan Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>