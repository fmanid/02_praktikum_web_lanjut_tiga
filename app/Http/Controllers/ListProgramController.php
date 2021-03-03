<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProgramController extends Controller
{
    //
    public function list($id = null){
        if($id){
            switch($id){
                case 1:
                return '<a href="https://www.educastudio.com/program/karir">Karir</a>';
                break;
                case 2:
                return '<a href="https://www.educastudio.com/program/magang">Magang</a>';
                break;
                case 3:
                return '<a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a>';
                break;
            }
        }else{
                echo '
                <ul>
                <li><a href="https://www.educastudio.com/program/karir">Karir</a></li>
                <li><a href="https://www.educastudio.com/program/magang">Magang</a></li>
                <li><a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a></li>
                </ul>';
            }
        }
}

