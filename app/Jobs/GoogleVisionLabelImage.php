<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
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
        // e' solo l'immagine 
        $image = file_get_contents(storage_path('app/public/' . $i->path));

        // inserisci il google_credential.json nel punto env
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();

        if ($labels){
            $result = [];
            foreach ($labels as $label){
                $result[] = $label->getDescription();
            }
        }

        // metti le descrizioni dei labels nel campo labels di $i 
        $i->labels = $result;
        $i->save();

}
}
