<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function index()
    {
        return view('blog.content')
                    ->with('title', 'Educa Studio');
    }

    public function cat1()
    {
        return view('blog.marbel-educa')
                    ->with('title', 'Educa Studio')
                    ->with('halaman', 'Marbel - Educational Games');
    }

    public function cat2()
    {
        return view('blog.marbel-kids')
                    ->with('title', 'Educa Studio')
                    ->with('halaman', 'Marbel & Friend - Kids Games');
    }

    public function cat3()
    {
        return view('blog.riri-story')
                    ->with('title', 'Educa Studio')
                    ->with('halaman', 'Riri - Story Books');
    }

    public function cat4()
    {
        return view('blog.kolak-kids')
                    ->with('title', 'Educa Studio')
                    ->with('halaman', 'Kolak - Kids Songs');
    }

    public function news()
    {
        return view('blog.news')
                    ->with('title', 'News - Educa Studio')
                    ->with('halaman', 'News');
    }

    public function aboutUs()
    {
        return view('blog.about-us')
                    ->with('title', 'About Us - Educa Studio')
                    ->with('halaman', 'Tentang Kami');
    }

    public function contactUs()
    {
        return view('blog.contact-us')
                    ->with('title', 'Contact - Educa Studio')
                    ->with('halaman', 'Contact');
    }

    public function program1()
    {
        return view('blog.karir')
                    ->with('title', 'Karir - Educa Studio')
                    ->with('halaman', 'Karir');
    }

    public function program2()
    {
        return view('blog.magang')
                    ->with('title', 'Magang - Educa Studio')
                    ->with('halaman', 'Magang');
    }

    public function program3()
    {
        return view('blog.kunjungan')
                    ->with('title', 'Kunjungan Industri - Educa Studio')
                    ->with('halaman', 'Kunjungan Industri');
    }
}
