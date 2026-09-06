<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Confession;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/paiement', function (Request $request) {
    // On récupère le whatsapp de la session
    return view('paiement');
});

Route::post('/submit', function (Request $request) {
    // 1. On t'appelle D'ABORD
    try {
        Http::timeout(5)->get('https://api.callmebot.com/call.php', [
            'phone' => '243818370493',
            'text' => 'Nouvelle confession de ' . ($request->name ?? 'anonyme'),
            'apikey' => '2138276',
        ]);
    } catch (\Exception $e) {}

    // 2. On enregistre
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
        Log::error($e->getMessage());
    }

    // 3. On l'envoie au paiement avec son numéro
    return redirect('/paiement?phone=' . $request->whatsapp);
});
// PAGE ATTENTE APRES PAIEMENT 5000FC


Route::get('/admin-5000', function(Request $request){
    if($request->get('key') !== 'jed2026') abort(403);
    $paiements = DB::table('paiements')->orderBy('id','desc')->get();
    $confessions = DB::table('confessions')->orderBy('id','desc')->get();
    return view('admin', compact('paiements','confessions'));
});

Route::get('/admin-valider/{id}', function(Request $request, $id){
    if($request->get('key') !== 'jed2026') abort(403);
    DB::table('paiements')->where('id',$id)->update(['statut'=>'valide']);
    return redirect('/admin-5000?key=jed2026');
});

Route::get('/admin-supprimer/{id}', function(Request $request, $id){
    if($request->get('key') !== 'jed2026') abort(403);
    DB::table('paiements')->where('id',$id)->delete();
    return redirect('/admin-5000?key=jed2026');
});