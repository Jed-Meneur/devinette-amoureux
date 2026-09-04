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
    try {
        Confession::create($request->except('_token'));

        try {
            Http::timeout(5)->get('https://api.callmebot.com/call.php', [
                'phone' => '243818370493',
                'text' => 'Nouvelle confession de ' . ($request->name ?? 'anonyme'),
                'apikey' => '2138276',
            ]);
        } catch (\Exception $e) {}

        return redirect('/')->with('success', 'Merci !');

    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return response("Erreur: " . $e->getMessage(), 500);
    }
});