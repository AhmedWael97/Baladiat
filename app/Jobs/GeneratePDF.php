<?php

namespace App\Jobs;

use ArPHP\I18N\Arabic;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Options;
class GeneratePDF implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $doc;
    protected $fileName;
    /**
     * Create a new job instance.
     */
    public function __construct($doc, $fileName)
    {
        $this->doc = $doc;
        $this->fileName = $fileName;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Increase execution time for large files
        set_time_limit(50000); // 5 minutes
        ini_set('memory_limit', '-1');

        $options = new Options();
        $options->set('defaultFont', 'TheSansArabic');

        // Generate PDF using the provided data
        $html = view('print' , ['doc' => $this->doc])->render();

        // to get arabic words

        $arabic = new Arabic();
        $p = $arabic->arIdentify($html);
        for ($i = count($p) - 1; $i >= 0; $i -= 2) {
            $utf8ar = $arabic->utf8Glyphs(substr($html, $p[$i - 1], $p[$i] - $p[$i - 1]));
            $html = substr_replace($html, $utf8ar, $p[$i - 1], $p[$i] - $p[$i - 1]);
        }

        $pdf = PDF::loadHTML($html)
            ->setOption([
                'fontDir' => public_path('/fonts'),
                'fontcache' => public_path('/fonts'),
                'defaultFont' => 'theSansLight',
                'enable_remote' => true,
                'enable_html5_parser' => true
            ]);

        // Save the PDF to the server or storage
        $pdf->save(storage_path("app/public/{$this->fileName}"));

        // $user = auth()->user(); // Get the authenticated user (or find a specific user)
        // Notification::send($user, new PDFReadyNotification($this->fileName));
    }
}
