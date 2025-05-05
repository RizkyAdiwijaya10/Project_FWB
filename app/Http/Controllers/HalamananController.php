<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamananController extends Controller
{
    public function index()
    {
        return view('HalamanUtama.index');
    }
    public function home()
    {
        return view('HalamanUtama.home');
    }
    public function about()
    {
        return view('HalamanUtama.about');
    }
    public function event()
    {
        return view('HalamanUtama.event');
    }
    public function galery()
    {
        return view('HalamanUtama.galery');
    }
    public function contact()
    {
        return view('HalamanUtama.contact');
    }
    public function chef()
    {
        return view('HalamanUtama.chef');
    }
    public function booking()
    {
        return view('HalamanUtama.booking');
    }
    public function menu()
    {
        return view('HalamanUtama.menu');
    }
    

}
