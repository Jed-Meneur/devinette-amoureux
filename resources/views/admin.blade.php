<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prince Admin</title>
<style>
body{background:#0a0a0a;color:white;font-family:Inter,sans-serif;padding:20px}
h1{font-size:22px;margin-bottom:15px}
.box{background:#171717;border:1px solid #2a2a2a;border-radius:20px;padding:15px;margin-bottom:15px}
.head{display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;flex-wrap:wrap;gap:10px}
.btn{display:inline-block;background:#25D366;color:white;padding:10px 18px;border-radius:30px;text-decoration:none;font-weight:bold;font-size:13px}
.del{background:#ff3d3d;margin-left:8px}
.badge{padding:4px 8px;border-radius:20px;font-size:10px}
.en-attente{background:orange;color:black}
.valide{background:#25D366}
.q{margin:6px 0;padding:8px;background:#1f1f1f;border-radius:8px;font-size:13px}
</style>
</head>
<body>

<h1 style="color:#25D366">💰 Paiements - {{ $paiements->count() }} transactions</h1>
@forelse($paiements as $p)
<div class="box" style="border:2px solid #25D366;background:#112211">
    <div class="head">
        <div>
            <b style="color:#25D366;font-size:17px">{{ $p->code_transaction ?? $p->code ?? 'MP-CODE' }} 📋</b><br>
            <small style="color:#888">{{ $p->created_at }} - <span class="badge {{ ($p->statut ?? '')=='valide' ? 'valide' : 'en-attente' }}">{{ $p->statut ?? 'en attente' }}</span></small>
        </div>
        <div>
            @if(($p->statut ?? '') != 'valide')
            <a class="btn" href="/admin-valider/{{ $p->id }}?key=jed2026">✅ Valider</a>
            @endif
            <a class="btn del" href="/admin-supprimer/{{ $p->id }}?key=jed2026" onclick="return confirm('Supprimer?')">🗑️</a>
        </div>
    </div>
</div>
@empty
<div class="box"><small>Aucun paiement. Teste avec MP12345 sur /paiement</small></div>
@endforelse

<hr style="margin:30px 0;opacity:0.2">

<h1>👑 Admin Secret - {{ $confessions->count() }} confessions</h1>
@forelse($confessions as $c)
<div class="box">
    <div class="head">
        <div>
            <b>{{ $c->name ?? $c->prenom ?? 'Anonyme' }}</b> - {{ $c->age ?? '??' }} ans - {{ $c->sexe ?? '??' }}<br>
            <small style="color:#ff2e7e">📱 {{ $c->whatsapp ?? $c->whatsapp_client ?? '' }}</small>
        </div>
        <small style="color:#666">{{ $c->created_at ?? '' }}</small>
    </div>
    @for($i=1; $i<=10; $i++)
        @if(!empty($c->{'q'.$i}))
            <div class="q"><span style="color:#666;font-size:10px">Q{{ $i }}</span> {{ $c->{'q'.$i} }}</div>
        @endif
    @endfor
    @if(!empty($c->message))<div class="q">{{ $c->message }}</div>@endif
</div>
@empty
<div class="box"><small>Aucune confession pour l'instant</small></div>
@endforelse

</body>
</html>