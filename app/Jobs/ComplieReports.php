<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ComplieReports implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $reportId;
    /**
     * Create a new job instance.
     *
     * @return void
     */
     public function __construct($reportId)
     {
         $this->reportId = $reportId;
     }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        var_dump('Compiling the report with the id: '.$this->reportId);
    }
}
