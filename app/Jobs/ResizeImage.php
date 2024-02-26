<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Spatie\Image\Manipulations;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $w;
    private $h;
    private $fileName;
    private $path;

    public function __construct($filePath, $w, $h)
    {
        $this->w = $w;
        $this->h = $h;
        // dirname restitusice il nome della cartella
        $this->path = dirname($filePath);
        // basename restituisce il nome del file 
        $this->fileName = basename($filePath);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        // path dove trovare immagine originale 
        $searchPath = storage_path() . "/app/public/" . $this->path . "/" . $this->fileName;
        // path dove salvare l'immagine dopo il crop 
        $destPath = storage_path() . "/app/public/" . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

        $croppedImage = Image::load($searchPath)
                        ->crop(Manipulations::CROP_CENTER, $w, $h)->save($destPath);

        
     }
}
