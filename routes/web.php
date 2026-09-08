<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

Route::get('/', fn() => view('welcome'));
Route::get('/paiement', fn(Request $r) => view('paiement'));

Route::post('/submit', function (Request $request) {
    try {
        Http::timeout(5)->get('https://api.callmebot.com/call.php', [
            'phone' => '243818370493',
            'text' => 'Nouvelle confession de ' . ($request->name ?? 'anonyme'),
            'apikey' => '2138276',
        ]);
    } catch (\Exception $e) {}

    try {
        if (Schema::hasTable('confessions')) {
            $existingCols = Schema::getColumnListing('confessions');
            $toInsert = [];
            foreach (['name','sexe','age','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10','whatsapp'] as $col) {
                if (in_array($col, $existingCols)) {
                    $toInsert[$col] = $request->input($col);
                }
            }
            if (in_array('created_at', $existingCols)) $toInsert['created_at'] = now();
            if (in_array('updated_at', $existingCols)) $toInsert['updated_at'] = now();

            DB::table('confessions')->insert($toInsert);
            Log::info('Confession OK', ['id' => DB::getPdo()->lastInsertId()]);
        }
    } catch (\Exception $e) {
        Log::error("CONFESSION FAIL: ".$e->getMessage()." LINE: ".$e->getLine());
    }

    return redirect('/paiement?phone=' . $request->whatsapp);
});

Route::get('/attente', fn(Request $r) => view('attente', ['code' => $r->get('code')]));

Route::post('/verifier-paiement', function(Request $request){
    $code = $request->get('code_transaction') ?? $request->get('code') ?? '';
    if(empty($code)){ $code = 'NON_PAYE - GRATUIT'; $statut = 'gratuit'; } 
    else { $statut = 'en attente'; }
    
    try {
        if (!Schema::hasTable('paiements')) {
            Schema::create('paiements', function($t){
                $t->id(); $t->string('code')->nullable();
                $t->string('code_transaction')->nullable();
                $t->string('statut')->default('en attente');
                $t->timestamps();
            });
        }
        DB::table('paiements')->insert([
            'code' => $code, 'code_transaction' => $code,
            'statut' => $statut, 'created_at' => now(), 'updated_at' => now(),
        ]);
    } catch (\Exception $e) { Log::error("Paiement error: ".$e->getMessage()); }
    return redirect('/attente?code=' . $code);
});

Route::get('/admin-5000', function(Request $request){
    if($request->get('key') !== 'jed2026') abort(403);
    $paiements = Schema::hasTable('paiements') ? DB::table('paiements')->orderBy('id','desc')->get() : collect([]);
    $confessions = Schema::hasTable('confessions') ? DB::table('confessions')->orderBy('id','desc')->get() : collect([]);
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
Route::get('/admin', fn(Request $r) => redirect('/admin-5000?key='.$r->get('key')));