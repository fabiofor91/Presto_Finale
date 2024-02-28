<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CreateAnnouncement extends Component
{

    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $category;
    public $validated;
    public $temporary_images = [];
    
    public $images  = [];
    public $announcement;


    // Regole di validazione annuncio
    protected $rules = [
        'title' => 'required|min:4',
        'description' => 'required|min:8',
        'price' => 'required|numeric|max_digits:8|max_digits:6',
        'category' => 'required',
        'images.*' => 'image|max:1024',
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
        'images.*.image' => 'Il file deve essere di tipo immagine',
        'images.*.max' => 'Immagine non superiore a 1Mb'
        
    ];

    public function updatedTemporaryImages()
    {
        // dd($this->temporary_images);
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])) {
            foreach($this->temporary_images as $image){
               $this->images[]=$image;
                
            }
        }
        // dd($this->images);
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
        
        $this->validate();
        // $this->announcement->user()->associate(Auth::user());

        // $this->announcement->save();
        
        // // cerca la categoria 
        $category = Category::find($this->category);
        // // crea l'annuncio appartenente alla categoria appena trovata con la funzione di relazione
        $this->announcement = $category->announcements()->create(
            [
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,

            
        ]
        );
        // assegniamo lo user_id all'annuncio appena creato con la funzione di relazione 
        // $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if(count($this->images)){
            foreach($this->images as $image)
            {
            //    $this->announcement->images()->create(['path'=>$image->store('image', 'public')]);

                //    salva ogni immagine nella cartella announcements/id dell'annuncio 
                
                $newFileName = "announcements/{$this->announcement->id}";
                // crea il nuovo file dove andra' l'immagine croppata 
                
                $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);
                // dispatch spinge il Job in coda (metodo asincrono) 
                // dispatch(new ResizeImage($newImage->path, 250, 200));
                // dispatch(new ResizeImage($newImage->path, 400, 300));

                // Google safesearch
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // Google Labels
                // dispatch(new GoogleVisionLabelImage($newImage->id));
                // dd($newImage);

                // catena di jobs 
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 250, 200),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            // cancella le immagini in storage/app/livewire-tmp
            // Quale classe File importare??? 
            File::deleteDirectory(storage_path('app/livewire-tmp'));

        }

        $this->announcement->user()->associate(Auth::user());

        $this->announcement->save();
        
        $this->clearForm();
        return redirect(route('create_announcement'))->with('status', 'Annuncio inserito! Sarà pubblicato dopo la revisione');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
   
    // funzione per pulire il form 
    public function clearForm(){
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->temporary_images = [];
        $this->images = [];

    //     ['title'=>$this->title = '',
    //     'description'=>$this->description = '',
    //     'price'=>$this->price = '',
    //     'category'=>$this->category = '',
    //     'images'=>$this->images = [],
        
    //     //! da controllare
    //     'temporary_images.*' => $this->temporary_images=[]
    // ];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }

}
 