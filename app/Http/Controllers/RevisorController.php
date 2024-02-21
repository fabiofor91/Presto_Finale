<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    //
public function index()
{
    $announcement_to_check =  Announcement::where('is_accepted', null)->first();
    return  view('revisor.index', compact('announcement_to_check'));
}

// funzione per pagina di form per diventare revisori 
public function formRevisor(){
    return view('revisor.form_revisor');
}

 public function acceptAnnouncement(Announcement $announcement)
 {
    $announcement->setAccepted(true);
    return redirect()->back()->with('message', 'Annuncio accettato.');
 }

public function rejectAnnouncement(Announcement $announcement)
{
    $announcement->setAccepted(false);
    return redirect()->back()->with('message', 'L\'annuncio non ha passato la tua revisione ' );
}

public function becomeRevisor(Request $request)
{
    // $user=Auth::user()->name;
    // dd($request);
    $richiesta = [
        'user'=> Auth::user(),
        'description' => $request->description
    ];
    // dd($richiesta);
    Mail::to('admin@presto.it')->send(new BecomeRevisor($richiesta));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore correttamente');
}

public function makeRevisor(User $user)
{
    Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
    dd('email');
    return redirect('/')->with('message', 'hai reso un utente  nuovo revisore');
}
}
