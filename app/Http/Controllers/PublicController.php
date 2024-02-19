<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // pagina home 
    public function welcome(){
        $announcements = Announcement::take(6)->orderBy('created_at', 'desc')
        ->get();
        return view('welcome', compact('announcements'));
    }

    // pagina annunci per categoria 
    public function showCategory(Category $category){
        // dd($category);
        return view('show_category', compact('category'));
    }
}
