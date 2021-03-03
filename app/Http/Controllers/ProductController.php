<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product(){
        echo '
        <ul>
        <li><a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games</a></li>
        <li><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a></li>
        <li><a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a></li>
        <li><a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a></li>
        </ul>';
    }

    public function products($id){
        switch($id){
            case 1:
            return '<a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games</a>';
            break;
            case 2:
            return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a>';
            break;
            case 3:
            return '<a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a>';
            break;
            case 4:
            return '<a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a>';
            break;
        }
}
}
