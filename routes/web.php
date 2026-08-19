<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Confession;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', function (Request $request) {
    Confession::create([
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
    return view('merci');
});

Route::get('/prince-admin-243', function () {
    $confessions = Confession::latest()->get();
    return view('admin', compact('confessions'));
});