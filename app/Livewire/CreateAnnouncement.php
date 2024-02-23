<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Foreach_;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{

    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $category;
    public $validated;
    public $temporary_images;
    public $images  = [];
    public $image;
    public $announcement;


    // Regole di validazione annuncio
    protected $rules = [
        'title' => 'required|min:4',
        'description' => 'required|min:8',
        'price' => 'required|numeric|max_digits:8|max_digits:6',
        'category' => 'required',
        'image' => 'image|max:1024',
        'temporary_images.*' =>'image|max:1024',
    ];

    // Messaggi di validazione 
    protected $messages = [
        'required' => "Questo campo e' obbligatorio",
        'title.min' => "Inserisci almeno 4 caratteri",
        'description.min' => 'Inserisci almeno 8 caratteri',
        'price.max_digits' => 'daje che se stai qua sei un poveraccio, chi se lo compra il tuo articolo se ha più di 7 cifre?',
        'price.numeric' => 'Inserisci solo un numero',
        'price.max_digits' => 'Massimo 6 cifre!',
        'temporary_images.*.image' => 'i file devono essere immagini',
        'temporary_images.*.max' => 'Immagini non superiori a 1Mb',
        'images.image' => 'Il file deve essere di tipo immagine',
        'images.max' => 'Immagine non superiore a 1Mb'
        
    ];

    public function updatedTemporaryimages()
    {
        $this->temporary_images;
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])) {
            foreach($this->temporary_images as $image){
               $this->images[]=$image;
                
            }
        }
    }

    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
           
        }
    }

    

    // funzione per creazione annuncio 
    public function store(){
        // $validatedData = $this->validate();

        // $this->validate();
        // // cerca la categoria 
        // $category = Category::find($this->category);
        // // crea l'annuncio appartenente alla categoria appena trovata con la funzione di relazione
        // $announcement = $category->announcements()->create(
        //     [
        //     'title'=>$this->title,
        //     'description'=>$this->description,
        //     'price'=>$this->price,

            
        // ]
        // );
        // assegniamo lo user_id all'annuncio appena creato con la funzione di relazione 
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if(count($this->images)){
            foreach($this->images as $image)
            {
               $this->announcement->images()->create(['path'=>$image->store('image', 'public')]);
            }
        }
        Auth::user()->announcements()->save($this->announcement);
        // Announcement::create($validatedData);
        //     [
        //     'title'=>$this->title,
        //     'description'=>$this->description,
        //     'price'=>$this->price
        // ]);
        $this->clearForm();
        return redirect(route('create_announcement'))->with('status', 'Annuncio inserito! Sarà pubblicato dopo la revisione');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
   
    // funzione per pulire il form 
    public function clearForm(){
        ['title'=>$this->title = '',
        'description'=>$this->description = '',
        'price'=>$this->price = '',
        'category'=>$this->category = '',
        'images'=>$this->images = [],
        
        //! da controllare
        'temporary_images.*' => $this->temporary_images=[]
    ];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }

}
 