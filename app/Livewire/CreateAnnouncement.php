<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class CreateAnnouncement extends Component
{
    public $title;
    public $description;
    public $price;

    // funzione per creazione annuncio 
    public function store(){
        Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price
        ]);
        $this->clearForm();
        return redirect(route('welcome'))->with('status', 'Annuncio inserito!');
    }

    // funzione per pulire il form 
    public function clearForm(){
        ['title'=>$this->title = '',
        'description'=>$this->description = '',
        'price'=>$this->price = ''
    ];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }

}
