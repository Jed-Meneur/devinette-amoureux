<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CallController extends Controller
{
    public function testCall()
    {
        $response = Http::get('https://api.callmebot.com/call.php', [
            'phone' => '243818370493',
            'text' => 'Bravo Jed ! Ton site Devinette Amoureuse fonctionne.',
            'apikey' => '2138276',
            'language' => 'fr-FR-Standard-A'
        ]);

        return "Appel envoyé ! Regarde ton téléphone. Réponse: " . $response->body();
    }
}