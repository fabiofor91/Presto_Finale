<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // pagina home 
    public function welcome(){
        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')
        ->get();
        return view('welcome', compact('announcements'));
    }

    // pagina annunci per categoria 
    public function showCategory(Category $category){
        return view('show_category', compact('category'));
    }

    // funzione per ricerca annunci 
    public function searchAnnouncement(Request $request){
        // prende input searched che andra' sulla barra di ricerca 
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(6);
        // dd($announcements);
        return view ('announcements.index', compact('announcements'));
    }

    // funzione per settare lingua 
    public function setLanguage($lang){
        // dd($lang);
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
