<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program1(){
        return '<a href="https://www.educastudio.com/program/karir">Karir</a>';
    }
    public function program2(){
        return '<a href="https://www.educastudio.com/program/magang">Magang</a>';
    }
    public function program3(){
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a>';
    }
}
