<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jobs\ComplieReports;

class ReportsController extends Controller
{
    public function index(Request $request){
        //$job = new ComplieReports(1);
        $job = new ComplieReports($request->input('reportId'));
        $this->dispatch($job);
        //$this->dispatchFrom('App\Jobs\ComplieReports', $request);
        
        return 'Done';
    }
}
