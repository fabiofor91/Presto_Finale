<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function announcement():BelongsTo
    {
        return $this->belongsTo(Announcement::class);
    }

    // funzione statica per recuperare il path dell'immagine croppata 
    public static function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if(!$w && !$h){
            // se non esistono le dimensioni allora ritorna l'immagine originale
            return Storage::url($filePath);
        } else {
            // cerca la cartella 
            $path = dirname($filePath);
            // cerca il nome del file 
            $fileName = basename($filePath);
            // il file si chiamera' 
            $file = "{$path}/crop_{$w}x{$h}_{$fileName}";
            return Storage::url($file);
        }
    }

    public function getUrl($w = null, $h = null)
    {
        return Image::getUrlByFilePath($this->path, $w, $h);
    }
}
