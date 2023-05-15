<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Dns\Dns;

class DnsLookupController extends Controller
{
    public function lookup(Request $request)
    {
        $domain = $request->input('domain');

        $dns = new Dns();
        $records = $dns->getRecords($domain);
        
        return view('show')->with('records', $records);
    }
}