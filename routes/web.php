<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Confession;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

// ACCUEIL
Route::get('/', function () {
    return view('welcome');
});

// PAGE PAIEMENT
Route::get('/paiement', function (Request $request) {
    return view('paiement');
});

// SUBMIT CONFESSION
Route::post('/submit', function (Request $request) {
    try {
        Http::timeout(5)->get('https://api.callmebot.com/call.php', [
            'phone' => '243818370493',
            'text' => 'Nouvelle confession de ' . ($request->name ?? 'anonyme'),
            'apikey' => '2138276',
        ]);
    } catch (\Exception $e) {}

    try {
        Confession::create([
            'name' => $request->name,
            'sexe' => $request->sexe,
            'age' => $request->age,
            'q1' => $request->q1,'q2' => $request->q2,'q3' => $request->q3,'q4' => $request->q4,'q5' => $request->q5,
            'q6' => $request->q6,'q7' => $request->q7,'q8' => $request->q8,'q9' => $request->q9,'q10' => $request->q10,
            'whatsapp' => $request->whatsapp,
            'whatsapp_client' => $request->whatsapp,
        ]);
    } catch (\Exception $e) {
        Log::error($e->getMessage());
    }

    return redirect('/paiement?phone=' . $request->whatsapp);
});

// PAGE ATTENTE
Route::get('/attente', function(Request $request){
    return view('attente', ['code' => $request->get('code')]);
});

// VERIFIER PAIEMENT - CRÉE LA TABLE AUTOMATIQUEMENT
Route::post('/verifier-paiement', function(Request $request){
    $code = $request->get('code_transaction') ?? $request->get('code') ?? 'MP-TEST';

    try {
        if (!Schema::hasTable('paiements')) {
            Schema::create('paiements', function($table){
                $table->id();
                $table->string('code')->nullable();
                $table->string('code_transaction')->nullable();
                $table->string('statut')->default('en attente');
                $table->timestamps();
            });
        }

        DB::table('paiements')->insert([
            'code' => $code,
            'code_transaction' => $code,
            'statut' => 'en attente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    } catch (\Exception $e) {
        Log::error("Paiement error: ".$e->getMessage());
    }

    return redirect('/attente?code=' . $code);
});

// ADMIN PRINCIPAL - ANTI 500
Route::get('/admin-5000', function(Request $request){
    if($request->get('key') !== 'jed2026') abort(403, 'Accès interdit');

    $paiements = collect([]);
    $confessions = collect([]);

    try {
        if (Schema::hasTable('paiements')) {
            $paiements = DB::table('paiements')->orderBy('id','desc')->get();
        }
        if (Schema::hasTable('confessions')) {
            $confessions = DB::table('confessions')->orderBy('id','desc')->get();
        } else {
            $confessions = Confession::latest()->get();
        }
    } catch (\Exception $e) {
        // on ne plante pas, on affiche vide
    }

    return view('admin', compact('paiements','confessions'));
});

Route::get('/admin-valider/{id}', function(Request $request, $id){
    if($request->get('key') !== 'jed2026') abort(403);
    if (Schema::hasTable('paiements')) {
        DB::table('paiements')->where('id',$id)->update(['statut'=>'valide']);
    }
    return redirect('/admin-5000?key=jed2026');
});

Route::get('/admin-supprimer/{id}', function(Request $request, $id){
    if($request->get('key') !== 'jed2026') abort(403);
    if (Schema::hasTable('paiements')) {
        DB::table('paiements')->where('id',$id)->delete();
    }
    return redirect('/admin-5000?key=jed2026');
});

// Ancien admin pour compatibilité
Route::get('/admin', function(Request $request){
    return redirect('/admin-5000?key='.$request->get('key'));
});
