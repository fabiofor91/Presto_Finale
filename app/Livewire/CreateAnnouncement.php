<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;

    // Regole di validazione annuncio
    protected $rules = [
        'title' => 'required|min:4',
        'description' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required'
    ];

    // Messaggi di validazione 
    protected $messages = [
        'required' => "Questo campo e' obbligatorio",
        'title.min' => "Inserisci almeno 4 caratteri",
        'description.min' => 'Inserisci almeno 8 caratteri',
        'price.numeric' => 'Inserisci solo un numero'
    ];

    

    // funzione per creazione annuncio 
    public function store(){
        // $validatedData = $this->validate();
        $this->validate();
        // cerca la categoria 
        $category = Category::find($this->category);
        // crea l'annuncio appartenente alla categoria appena trovata con la funzione di relazione
        $announcement = $category->announcements()->create(
            [
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price
        ]
        );
        // assegniamo lo user_id all'annuncio appena creato con la funzione di relazione 
        Auth::user()->announcements()->save($announcement);
        // Announcement::create($validatedData);
        //     [
        //     'title'=>$this->title,
        //     'description'=>$this->description,
        //     'price'=>$this->price
        // ]);
        $this->clearForm();
        return redirect(route('create_announcement'))->with('status', 'Annuncio inserito!');
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
    
   
    // funzione per pulire il form 
    public function clearForm(){
        ['title'=>$this->title = '',
        'description'=>$this->description = '',
        'price'=>$this->price = '',
        'category'=>$this->category = ''
    ];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }

}
