<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // pagina home 
    public function welcome(){
        $announcements = Announcement::take(6)->get()->sortByDesc('created_at');
        return view('welcome', compact('announcements'));
    }

    // pagina annunci per categoria 
    public function showCategory(Category $category){
        // dd($category);
        return view('show_category', compact('category'));
    }
}
