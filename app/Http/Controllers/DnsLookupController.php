<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Spatie\Dns\Dns;
use stdClass;

class DnsLookupController extends Controller
{
    public function lookup(Request $request)
    {
        Log::info("Hello from the lookup function in the DnsLookupController.php file.");
        Log::info($request->url);
        $domain = $request->url;

        if ($domain) {
            $dns = new Dns();
            $records = $dns->getRecords($domain);

            $my_records = [];
            foreach ($records as $record) {
                $my_record = new stdClass();
                $my_record->host = $record->host();
                $my_record->ttl = $record->ttl();
                $my_record->class = $record->class();
                $my_record->type = $record->type();
                $my_records[] = $my_record;

                Log::info($record->host());
            }
            Log::info($records);
            return $my_records;
        } else {
            return "No domain name was provided.";
        }
    }
}