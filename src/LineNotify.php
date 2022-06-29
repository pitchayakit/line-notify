<?php 

namespace Lexicon\LineNotify;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;

class LineNotify {
    
    public static function sendMessage($token, $message)
    {
        $client = new Client();
        $headers = [
        'Content-Type' => '	application/x-www-form-urlencoded',
        'Authorization' => "Bearer $token"
        ];
        $request = new Request('POST', "https://notify-api.line.me/api/notify?message=$message", $headers);
        $res = $client->sendAsync($request)->wait();

        Log::debug("=== LineNotify ===");
        Log::debug($res->getBody());

        return $res->getBody();
    }
}


?>