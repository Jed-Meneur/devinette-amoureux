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
a.btn{display:inline-block;margin-top:12px;background:#25D366;color:white;padding:12px 20px;border-radius:30px;text-decoration:none;font-weight:bold;font-size:13px}
</style>
</head>
<body>
<h1>👑 Admin Secret - {{ $confessions->count() }} confessions</h1>

@foreach($confessions as $c)
<div class="box">
<div class="head">
<div>
<b style="font-size:16px">{{ $c->prenom ?? $c->nom ?? $c->name ?? 'Anonyme' }}</b><br>
<small style="color:#ff2e7e">{{ $c->age ?? '??' }} ans • {{ $c->sexe ?? $c->sex ?? $c->genre ?? '??' }} • {{ $c->whatsapp_client }}</small>
</div>
<span style="font-size:12px;color:#666">{{ $c->created_at }}</span>
</div>

<div class="q"><span>1. Coeur actuel</span>{{ $c->q1 }}</div>
<div class="q"><span>2. Brisé par quoi</span>{{ $c->q2 }}</div>
<div class="q"><span>3. Peur</span>{{ $c->q3 }}</div>
<div class="q"><span>4. Idéal</span>{{ $c->q4 }}</div>
<div class="q"><span>5. Schéma toxique</span>{{ $c->q5 }}</div>
<div class="q"><span>6. Réaction quand blessé</span>{{ $c->q6 }}</div>
<div class="q"><span>7. Cherche quoi</span>{{ $c->q7 }}</div>
<div class="q"><span>8. Fantasme secret</span>{{ $c->q8 }}</div>
<div class="q"><span>9. Objectif</span>{{ $c->q9 }}</div>
<div class="q big"><span>10. MESSAGE DU COEUR ❤️</span>{{ $c->q10 }}</div>

<a class="btn" href="https://wa.me/{{ $c->whatsapp_client }}?text=Salut%2C%20c'est%20le%20Prince%20de%20l'amour%20👑%20J'ai%20lu%20ta%20confession%20avec%20attention..." target="_blank">→ Répondre sur WhatsApp</a>
</div>
@endforeach
</body>
</html>