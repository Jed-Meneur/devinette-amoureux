<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prince Admin</title>
<style>
body{background:#0a0a0a;color:white;font-family:Inter,sans-serif;padding:20px}
h1{font-size:24px;margin-bottom:20px}
.box{background:#171717;border:1px solid #2a2a2a;border-radius:20px;padding:20px;margin-bottom:20px}
.head{display:flex;justify-content:space-between;align-items:center;margin-bottom:15px}
.head b{color:#ff2e7e}
.q{margin:10px 0;padding:10px;background:#1f1f1f;border-radius:10px;font-size:13px}
.q span{color:#666;font-size:11px;display:block;margin-bottom:3px;text-transform:uppercase}
.big{border:2px solid #ff2e7e;background:#221118}
.btn{display:inline-block;margin-top:12px;background:#25D366;color:white;padding:12px 20px;border-radius:30px;text-decoration:none;font-weight:bold}
.valid{background:#25D366}
.del{background:#ff3d3d;margin-left:8px}
.badge{padding:4px 8px;border-radius:20px;font-size:10px}
.en-attente{background:orange;color:black}
.valide{background:#25D366}
</style>
</head>
<body>

{{-- PAIEMENTS 5000FC --}}
<h1 style="color:#25D366">💰 Paiements - {{ $paiements->count() }} transactions</h1>

@forelse($paiements as $p)
<div class="box big" style="border-color:#25D366">
    <div class="head">
        <div>
            <b style="color:#25D366;font-size:18px">{{ $p->code_transaction ?? $p->code ?? 'MP-CODE' }} 📋</b><br>
            <small style="color:#888">{{ $p->created_at }} - <span class="badge {{ $p->statut=='valide' ? 'valide' : 'en-attente' }}">{{ $p->statut ?? 'en attente' }}</span></small>
        </div>
        <div>
            @if(($p->statut ?? '') != 'valide')
            <a class="btn valid" href="/admin-valider/{{ $p->id }}?key=jed2026">✅ Valider</a>
            @endif
            <a class="btn del" href="/admin-supprimer/{{ $p->id }}?key=jed2026" onclick="return confirm('Supprimer ce paiement?')">🗑️</a>
        </div>
    </div>
</div>
@empty
<div class="box"><small>Aucun paiement pour l'instant. Teste avec MP12345 sur /paiement</small></div>
@endforelse

<hr style="margin:40px 0;opacity:0.2">

{{-- CONFESSIONS --}}
<h1>👑 Admin Secret - {{ $confessions->count() }} confessions</h1>

@foreach($confessions as $c)
<div class="box">
    <div class="head">
        <div>
            <b style="font-size:16px">{{ $c->prenom ?? $c->nom ?? $c->name ?? 'Anonyme' }}</b><br>
            <small style="color:#ff2e7e">{{ $c->age ?? '??' }} ans • {{ $c->sexe ?? $c->sex ?? $c->genre ?? '??' }} • {{ $c->whatsapp_client ?? '' }}</small>
        </div>
        <span style="font-size:12px;color:#666">{{ $c->created_at }}</span>
    </div>
    @if(isset($c->message) || isset($c->confession) || isset($c->question))
    <div class="q">
        <span>Message</span>
        {{ $c->message ?? $c->confession ?? $c->question }}
    </div>
    @endif
</div>
@endforeach

</body>
</html>