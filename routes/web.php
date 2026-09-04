<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Confession;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', function (Request $request) {
    // 1. On enregistre en base
    $conf = Confession::create([
        'name'=> $request->name,
        'sexe'=> $request->sexe,
        'age'=> $request->age,
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
        'whatsapp_client' => $request->whatsapp,
    ]);

    // 2. On t'appelle pour te prévenir
    try {
        $nom = $request->name ?? 'Anonyme';
        Http::timeout(10)->get('https://api.callmebot.com/call.php', [
            'phone' => '243818370493',
            'text' => "Nouvelle confession sur Devinette Amoureuse. De la part de $nom. Va voir ton site.",
            'apikey' => '2138276',
        ]);
    } catch (\Exception $e) {
        // Si l'appel échoue, on ne bloque pas l'enregistrement
    }

    return back()->with('success', 'Confession envoyée !');
});