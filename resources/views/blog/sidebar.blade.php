<style>
    a {
        color: black;
    }
</style>
<div>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item font-weight-bold text-black">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown font-weight-bold text-black">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('/category/marbel-edu-games') }}">Marbel - Educational Games</a>
            <a class="dropdown-item" href="{{ url('/category/marbel-and-friends-kids-games') }}">Marbel & Friends - Kids Games</a>
            <a class="dropdown-item" href="{{ url('/category/riri-story-books') }}">Riri - Story Books</a>
            <a class="dropdown-item" href="{{ url('/category/kolak-kids-songs') }}">Kolak - Kids Songs</a>
        </div>
    </li>

    <li class="nav-item font-weight-bold text-black">
        <a class="nav-link" href="{{ url('/news') }}">News</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown font-weight-bold text-black">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Program
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('/program/karir') }}">Karir</a>
            <a class="dropdown-item" href="{{ url('/program/magang') }}">Magang</a>
            <a class="dropdown-item" href="{{ url('/program/kunjungan-industri') }}">Kunjungan Industri</a>
        </div>
    </li>

    <li class="nav-item font-weight-bold text-black">
        <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
    </li>
    <li class="nav-item font-weight-bold text-black">
        <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
    </li>
    </ul>
</div>

