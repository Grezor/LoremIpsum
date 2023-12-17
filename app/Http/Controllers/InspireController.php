<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class InspireController extends Controller
{
    public function callCommandInspire(): string
    {
        $output = Artisan::call('inspire');
        $quote = trim(Artisan::output());

        return view('inspire', compact('quote'));
    }
}
