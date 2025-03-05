<?php

namespace App\Jobs;

use App\Models\User;
use ArPHP\I18N\Arabic;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Notifications\PDFReadyNotification;
use Illuminate\Support\Facades\Artisan;

class GeneratePDF implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $doc;
    protected $fileName;
    protected $user_id;
    /**
     * Create a new job instance.
     */
    public function __construct($doc, $fileName, $user_id)
    {
        $this->doc = $doc;
        $this->fileName = $fileName;
        $this->user_id = $user_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Increase execution time for large files
        set_time_limit(50000); // 5 minutes
        ini_set('memory_limit', '-1');
    
        Artisan::call('view:clear');
        Artisan::call('cache:clear');

        $html = view('print', ['doc' => $this->doc])->render();

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
            ])
            ->save(storage_path("app/public/{$this->fileName}"));

        $user = User::where('id', $this->user_id)->first();
        if($user) {
            $user->notify(new PDFReadyNotification($this->fileName, storage_path("app/public/{$this->fileName}")));
        }
    }
}
