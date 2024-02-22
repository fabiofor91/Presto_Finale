<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    // middleware di protezione 
    public function __construct(){
        $this->middleware('auth')->except('showDetail', 'indexAnnouncements');
    }

    // vista per creazione annunci 
    public function createAnnouncement(){
        return view('announcements.create');
    }

    // vista per dettaglio annuncio 
    public function showDetail(Announcement $announcement){
        return view('announcements.detail', compact('announcement'));
    }

    // vista per index annunci 
    public function indexAnnouncements(){
        // $announcements = DB::table('announcements')->orderBy('created_at', 'desc')->get();
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(6);
        return view('announcements.index', compact('announcements'));
    }
}
