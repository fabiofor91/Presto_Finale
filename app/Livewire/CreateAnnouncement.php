<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;


class CreateAnnouncement extends Component
{
    public $title;
    public $description;
    public $price;

    // Regole di validazione annuncio
    protected $rules = [
        'title' => 'required|min:4',
        'description' => 'required|min:8',
        'price' => 'required|numeric'
    ];

    // Messaggi di validazione 
    protected $messages = [
        'required' => "Questo campo e' obbligatorio",
        'title.min' => "Inserisci almeno 4 caratteri",
        'description.min' => 'Inserisci almeno 8 caratteri',
        'price.numeric' => 'Inserisci solo un numero'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // funzione per creazione annuncio 
    public function store(){
        $validatedData = $this->validate();
        Announcement::create($validatedData);
        //     [
        //     'title'=>$this->title,
        //     'description'=>$this->description,
        //     'price'=>$this->price
        // ]);
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
