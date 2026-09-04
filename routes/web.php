<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Confession;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', function (Request $request) {
    // 1. On t'appelle D'ABORD, même si la base est morte
    try {
        Http::timeout(5)->get('https://api.callmebot.com/call.php', [
            'phone' => '243818370493',
            'text' => 'Nouvelle confession de ' . ($request->name ?? 'anonyme'),
            'apikey' => '2138276',
        ]);
    } catch (\Exception $e) {}

    // 2. Ensuite on essaie d'enregistrer
    try {
        Confession::create([
            'name' => $request->name,
            'sexe' => $request->sexe,
            'age' => $request->age,
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
            'q9' => $request->q9,
            'q10' => $request->q10,
            'whatsapp' => $request->whatsapp,
            'whatsapp_client' => $request->whatsapp,
        ]);
    } catch (\Exception $e) {
        Log::error("DB Error: " . $e->getMessage());
        // On ne bloque pas l'utilisateur même si la DB est morte
    }

    return redirect('/')->with('success', 'Merci Alsayid, confession reçue !');
});