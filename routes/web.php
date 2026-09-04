<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Confession;
use App\Http\Controllers\CallController;
use Illuminate\Support\Facades\Http;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-appel', [CallController::class, 'testCall']);


Route::post('/submit', function (Request $request) {
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

    // ALERTE WHATSAPP POUR TOI
    try {
        Http::get("https://api.callmebot.com/whatsapp.php", [
            'phone' => '+243818370493', // METS TON NUMERO ICI ex: +243818765432
            'text' => "🔥 NOUVELLE CONFESSION ! {$conf->name} {$conf->age}ans {$conf->sexe} - {$conf->whatsapp_client} . Va voir: devinette-amoureux.onrender.com/prince-admin-243",
            'apikey' => '2138276'
        ]);
    } catch (\Exception $e) {}

    return view('merci');
});