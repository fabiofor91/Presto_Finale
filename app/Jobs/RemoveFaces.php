<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Spatie\Image\Manipulations;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $announcement_image_id;

    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         // oggetto di classe Image 
         $i = Image::find($this->announcement_image_id);

         if (!$i){
             return;
         }

        // cerca il path originale 
        $searchPath = storage_path('app/public/' . $i->path);
        // riempi con l'immagine 
        $image = file_get_contents($searchPath);

          // inserisci il google_credential.json nel punto env
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        // attiva Annotator 
        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->faceDetection($image);
        $faces = $response->getFaceAnnotations();

        
        // ora perogni faccia cerca i vertici del riquadro che la contiene in coordinate X-Y 
        foreach($faces as $face){
            $vertices = $face->getBoundingPoly()->getVertices();
            $bounds = [];
            foreach($vertices as $vertex){
                $bounds[] = [$vertex->getX(), $vertex->getY()];
            }

            // dd($bounds);

            $w = $bounds[2][0] - $bounds[0][0];
            $h = $bounds[2][1] - $bounds[0][1];

            // dd($w, $h);
            // carica immagine su spatie x modifica 
            $image = SpatieImage::load($searchPath);

            $image->watermark(base_path('public/media/img/watermark_nobg.png'))
                ->watermarkPosition('top-left')
                // non voglio padding
                ->watermarkPadding($bounds[0][0], $bounds[0][1]) 
                ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
                ->watermarkHeight($h, Manipulations::UNIT_PIXELS)
                ->watermarkFit(Manipulations::FIT_STRETCH);
            
            $image->save($searchPath);
        }

        $imageAnnotator->close();
    }
}
