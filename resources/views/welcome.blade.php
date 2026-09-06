<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Le Prince de l'Amour 👑 - Confession Intime</title>

<meta property="og:title" content="Le Prince de l'Amour 👑 - Devinette Amoureuse">
<meta property="og:description" content="Ce n'est pas un quiz. C'est un miroir. En 10 questions, je te dis pourquoi ton cœur souffre.">
<meta property="og:image" content="{{ url('/og-image.jpg') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="{{ url('/og-image.jpg') }}">

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Inter:wght@400;600;800&display=swap');
*{margin:0;padding:0;box-sizing:border-box}
html,body{width:100%;min-height:100dvh;background:#050505;overflow-x:hidden}
body{color:white;font-family:'Inter',sans-serif;position:relative}

/* FOND MAGIQUE COMME TON IMAGE */
body::before{
 content:'';position:fixed;inset:0;
 background: 
  radial-gradient(ellipse at 20% 20%, rgba(255,46,126,0.25) 0%, transparent 50%),
  radial-gradient(ellipse at 80% 10%, rgba(248,155,41,0.20) 0%, transparent 50%),
  radial-gradient(ellipse at 50% 100%, rgba(255,46,126,0.15) 0%, transparent 60%);
 pointer-events:none;z-index:0;
}
.stars::before{
 content:'✦ ✧ ❤ ✦ ✧ ❤';position:fixed;top:0;left:0;right:0;bottom:0;
 font-size:10px;letter-spacing:30px;line-height:80px;color:rgba(255,255,255,0.15);
 white-space:pre-wrap;pointer-events:none;z-index:0;animation:twinkle 4s infinite alternate;
}
@keyframes twinkle{0%{opacity:0.3}100%{opacity:0.8}}

.hero{position:relative;z-index:1;text-align:center;padding:60px 20px 35px}
.hero h1{font-family:'Playfair Display';font-size:52px;line-height:0.95;font-weight:800;letter-spacing:-1px;text-shadow:0 0 40px rgba(255,46,126,0.5)}
.hero h1 span{background: linear-gradient(90deg,#ff2e7e,#ff8a5c,#ff2e7e);background-size:200%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:grad 3s linear infinite}
@keyframes grad{to{background-position:200% 0}}
.badge{display:inline-flex;align-items:center;gap:6px;margin-top:18px;background:rgba(255,46,126,0.1);border:1px solid rgba(255,46,126,0.3);padding:8px 16px;border-radius:100px;font-size:12px;color:#ff7aa2;backdrop-filter:blur(10px);box-shadow:0 0 20px rgba(255,46,126,0.2)}
.hero p{color:#a0a0a0;margin-top:22px;max-width:420px;margin-left:auto;margin-right:auto;font-size:15px;line-height:1.6}
.stats{display:flex;justify-content:center;gap:28px;margin-top:28px}
.stat b{font-size:22px;display:block;background:linear-gradient(90deg,#fff,#ffb3c8);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.stat span{font-size:11px;color:#666;letter-spacing:0.5px}

.container{position:relative;z-index:1;max-width:540px;margin:0 auto;padding:0 18px 50px}

/* CARDS VERRE + GLOW ROSE */
.card{background:linear-gradient(180deg, rgba(255,255,255,0.08), rgba(255,255,255,0.03));backdrop-filter:blur(16px);border:1px solid rgba(255,255,255,0.08);padding:22px;border-radius:24px;margin-bottom:16px;transition:all 0.4s;box-shadow:0 8px 32px rgba(0,0,0,0.4)}
.card:hover{border-color:rgba(255,46,126,0.3);transform:translateY(-2px);box-shadow:0 12px 40px rgba(255,46,126,0.15)}
.card:focus-within{border-color:#ff2e7e;box-shadow:0 0 0 4px rgba(255,46,126,0.15), 0 12px 40px rgba(255,46,126,0.2);transform:scale(1.01)}
.card label{font-weight:700;font-size:14px;color:#fff;letter-spacing:0.2px}
.card small{color:#777;font-size:11.5px;margin-top:5px;display:block}
input,select,textarea{width:100%;background:#0e0e0e;border:1px solid #222;color:white;padding:15px;border-radius:14px;margin-top:10px;font-size:16px;outline:none;transition:0.3s}
input:focus,select:focus,textarea:focus{border-color:#ff2e7e;background:#151515}
.grand{background: linear-gradient(135deg,#ff0f7b 0%,#f89b29 100%);padding:2px;border-radius:26px;margin-top:14px;box-shadow:0 0 40px rgba(255,47,126,0.4);animation:pulse 2.5s infinite}
@keyframes pulse{0%,100%{box-shadow:0 0 30px rgba(255,47,126,0.3)}50%{box-shadow:0 0 60px rgba(255,47,126,0.6)}}
.grand-inner{background:radial-gradient(circle at 50% 0%, #1a0a12, #111);border-radius:24px;padding:24px}
.grand label{color:white;font-size:16px}
.grand textarea,.grand input{background:white;color:black;border:none}
.grand small{color:rgba(255,255,255,0.7)}
button{width:100%;margin-top:24px;background: linear-gradient(90deg,#ff0f7b,#f89b29);color:white;font-weight:800;padding:19px;border-radius:100px;border:none;font-size:16px;letter-spacing:0.8px;cursor:pointer;box-shadow:0 10px 30px rgba(255,47,126,0.4);transition:0.3s;text-transform:uppercase}
button:hover{transform:translateY(-2px);box-shadow:0 15px 40px rgba(255,47,126,0.6)}
.secure{display:flex;align-items:center;justify-content:center;gap:6px;margin-top:16px;color:#555;font-size:11px}
.testis{margin-top:32px;display:flex;gap:12px;overflow:auto;scrollbar-width:none}
.testis::-webkit-scrollbar{display:none}
.testi{min-width:220px;background:rgba(255,255,255,0.04);padding:14px 16px;border-radius:18px;font-size:12.5px;color:#999;border:1px solid rgba(255,255,255,0.06);backdrop-filter:blur(10px)}
</style>
</head>
<body>
<div class="stars"></div>
<div class="hero">
<h1>Le Prince<br><span>de l'Amour 👑</span></h1>
<div class="badge">🔒 Confession 100% anonyme & sécurisée</div>
<p>Ce n'est pas un quiz. C'est un miroir. En 10 questions, je te dis pourquoi ton cœur souffre et comment le guérir.</p>
<div class="stats">
<div class="stat"><b>1.2k+</b><span>confessions</span></div>
<div class="stat"><b>4.9/5</b><span>confiance</span></div>
<div class="stat"><b>24h</b><span>réponse</span></div>
</div>
</div>

<div class="container">
<form action="/submit" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="card" style="border:1.5px solid rgba(255,77,136,0.5);">
<label>Qui es-tu ?</label>
<input type="text" name="name" placeholder="Ton prénom" required>
<div style="display:flex;gap:10px;margin-top:10px;">
  <select name="sexe" required style="width:50%;"><option value="">Sexe</option><option>Femme</option><option>Homme</option></select>
  <input type="number" name="age" placeholder="Âge" required min="13" max="99" style="width:50%;">
</div>
</div>

<div class="card"><label>1. Ton cœur en ce moment ?</label><small>Sois honnête, personne ne voit ça</small><select name="q1" required><option value="">Choisis ton état...</option><option>💔 Célibataire mais j'ai mal</option><option>❤️ En couple mais perdu(e)</option><option>🌀 C'est compliqué</option><option>🌱 En guérison, je me reconstruis</option></select></div>
<div class="card"><label>2. Qu'est-ce qui t'a le plus brisé ?</label><small>Cette blessure qui revient toujours</small><textarea name="q2" rows="2" placeholder="Trahison, mensonge, abandon..."></textarea></div>
<div class="card"><label>3. Ta plus grande peur en amour ?</label><textarea name="q3" rows="2" placeholder="Avoir encore mal ? Qu'on te quitte ?"></textarea></div>
<div class="card"><label>4. Ton amour idéal demain ?</label><textarea name="q4" rows="2" placeholder="Décris-moi ton idéal..."></textarea></div>
<div class="card"><label>5. Tu répètes toujours le même schéma ?</label><select name="q5"><option>Oui, toujours toxique</option><option>Non, différent à chaque fois</option><option>Je ne sais plus</option></select></div>
<div class="card"><label>6. Quand on te blesse, tu réagis comment ?</label><select name="q6"><option>😶 Je me tais</option><option>💥 J'explose</option><option>🚪 Je fuis</option><option>🤡 Je fais semblant</option></select></div>
<div class="card"><label>7. Au fond, tu cherches quoi ?</label><select name="q7"><option>🔥 La passion</option><option>🤍 La tendresse</option><option>🛡️ La sécurité</option><option>✨ Les 3</option></select></div>
<div class="card"><label>8. Ton secret inavoué ?</label><small>Ici personne ne te juge</small><textarea name="q8" rows="2" placeholder="Ce que tu n'as jamais osé dire..."></textarea></div>
<div class="card"><label>9. Tu veux quoi maintenant ?</label><select name="q9"><option>Guérir</option><option>Trouver le vrai amour</option><option>Comprendre mon blocage</option><option>Me vider le cœur</option></select></div>

<div class="grand">
<div class="grand-inner">
<label>10. Vide ton cœur maintenant ❤️</label><small>C'est le plus important. Je lis chaque mot personnellement.</small>
<textarea name="q10" rows="5" placeholder="Écris ici comme à 2h du matin... Je t'écoute." required></textarea>
<input name="whatsapp" style="margin-top:12px" placeholder="Ton WhatsApp (+243...)" required>
</div>
</div>

<button type="submit">Confier mon cœur au Prince 👑</button>
<div class="secure">🔒 Chiffré • Anonyme • Supprimé après lecture • Réponse humaine</div>
</form>

<div class="testis">
<div class="testi">“J'ai pleuré en écrivant. Sa réponse m'a guérie” - Sarah, 24 ans</div>
<div class="testi">“Enfin quelqu'un qui comprend sans juger” - Glodi, 27 ans</div>
<div class="testi">“Je pensais que c'était un quiz, c'était une thérapie” - Ines</div>
</div>
</div>
</body>
</html>