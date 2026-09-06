<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Le Prince de l'Amour 👑 - Confession Intime</title>

<!-- OG - DYNAMIQUE POUR RENDER & VERCEL -->
<meta property="og:title" content="Le Prince de l'Amour 👑 - Devinette Amoureuse">
<meta property="og:description" content="Ce n'est pas un quiz. C'est un miroir. En 10 questions, je te dis pourquoi ton cœur souffre et comment le guérir.">
<meta property="og:image" content="{{ url('/og-image.jpg') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Le Prince de l'Amour 👑">
<meta name="twitter:description" content="Découvre ce qu'il / elle pense vraiment de toi - Test en 2 min">
<meta name="twitter:image" content="{{ url('/og-image.jpg') }}">

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;600&display=swap');
*{margin:0;padding:0;box-sizing:border-box}
html,body{width:100%;min-height:100dvh;background:#080808;}
body{color:white;font-family:'Inter',sans-serif;overflow-x:hidden;-webkit-text-size-adjust:100%;}
.hero{background: radial-gradient(circle at 50% 0%, #2a0a18 0%, #080808 70%);padding:50px 20px 30px;text-align:center}
.hero h1{font-family:'Playfair Display';font-size:38px;line-height:1.1}
.hero h1 span{background: linear-gradient(90deg,#ff2e7e,#ff8a5c);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero .badge{display:inline-block;margin-top:15px;background:#1c1c1c;border:1px solid #333;padding:6px 14px;border-radius:20px;font-size:12px;color:#ff7aa2}
.hero p{color:#a0a0a0;margin-top:20px;max-width:400px;margin-left:auto;margin-right:auto;font-size:15px;line-height:1.5}
.stats{display:flex;justify-content:center;gap:20px;margin-top:25px}
.stat{text-align:center}
.stat b{font-size:20px;display:block}
.stat span{font-size:11px;color:#666}
.container{max-width:520px;margin:0 auto;padding:0 18px 40px}
.card{background:rgba(255,255,255,0.05);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.08);padding:22px;border-radius:24px;margin-bottom:16px;transition:0.3s}
.card:focus-within{border-color:#ff2e7e;transform:scale(1.02)}
.card label{font-weight:600;font-size:14px;color:#e0e0e0}
.card small{display:block;color:#777;font-size:11px;margin-top:4px;margin-bottom:10px}
input,select,textarea{width:100%;background:#111;border:1px solid #222;color:white;padding:14px;border-radius:12px;margin-top:8px;font-size:16px;outline:none;-webkit-appearance:none}
textarea::placeholder,input::placeholder{color:#555}
.grand{background: linear-gradient(135deg,#ff0f7b 0%,#f89b29 100%);padding:2px;border-radius:26px;margin-top:10px}
.grand-inner{background:#111;border-radius:24px;padding:22px}
.grand label{color:white}
.grand textarea,.grand input{background:white;color:black;border:none;font-size:16px}
.grand small{color:rgba(255,255,255,0.8)}
button{width:100%;margin-top:20px;background:white;color:black;font-weight:800;padding:18px;border-radius:100px;border:none;font-size:16px;letter-spacing:0.5px;cursor:pointer;box-shadow:0 10px 30px rgba(255,47,126,0.3)}
button:hover{background:#ff2e7e;color:white}
.secure{display:flex;align-items:center;justify-content:center;gap:6px;margin-top:15px;color:#555;font-size:11px;text-align:center;padding:0 10px}
.testis{margin-top:30px;display:flex;gap:10px;overflow:auto;scrollbar-width:none}
.testis::-webkit-scrollbar{display:none}
.testi{min-width:200px;background:#151515;padding:12px;border-radius:16px;font-size:12px;color:#999;border:1px solid #222}
</style>
</head>
<body>
<div class="hero">
<h1>Le Prince <br><span>de l'Amour 👑</span></h1>
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
<div class="card" style="border:2px solid #ff4d88;">
<label>Qui es-tu ?</label>
<input type="text" name="name" placeholder="Ton prénom" required>
<div style="display:flex;gap:8px;margin-top:8px;">
  <select name="sexe" required style="width:50%;">
    <option value="">Sexe</option>
    <option value="Femme">Femme</option>
    <option value="Homme">Homme</option>
  </select>
  <input type="number" name="age" placeholder="Âge" required min="13" max="99" style="width:50%;">
</div>
</div>

<div class="card"><label>1. Ton cœur en ce moment ?</label><small>Sois honnête, personne ne voit ça</small><select name="q1" required><option value="">Choisis ton état...</option><option>💔 Célibataire mais j'ai mal</option><option>❤️ En couple mais perdu(e)</option><option>🌀 C'est compliqué</option><option>🌱 En guérison, je me reconstruis</option></select></div>
<div class="card"><label>2. Qu'est-ce qui t'a le plus brisé ?</label><small>Cette blessure qui revient toujours</small><textarea name="q2" rows="2" placeholder="Trahison, mensonge, abandon... dis-le ici"></textarea></div>
<div class="card"><label>3. Ta plus grande peur en amour ?</label><textarea name="q3" rows="2" placeholder="Avoir encore mal ? Qu'on te quitte ?"></textarea></div>
<div class="card"><label>4. Si demain tout était parfait, à quoi ressemblerait ton amour ?</label><textarea name="q4" rows="2" placeholder="Décris-moi ton idéal..."></textarea></div>
<div class="card"><label>5. Tu répètes toujours le même schéma ?</label><select name="q5"><option>Oui, je tombe toujours sur le même genre toxique</option><option>Non, c'est différent à chaque fois</option><option>Je ne sais même plus</option></select></div>
<div class="card"><label>6. Quand on te blesse, tu réagis comment ?</label><select name="q6"><option>😶 Je me tais et je souffre en silence</option><option>💥 J'explose et je dis tout</option><option>🚪 Je fuis / je bloque</option><option>🤡 Je fais comme si tout allait bien</option></select></div>
<div class="card"><label>7. Au fond, tu cherches quoi ?</label><select name="q7"><option>🔥 La passion, le feu</option><option>🤍 La tendresse, qu'on m'écoute vraiment</option><option>🛡️ La sécurité, ne plus avoir peur</option><option>✨ Les 3, je mérite tout</option></select></div>
<div class="card"><label>8. Ton fantasme / secret inavoué ?</label><small>Ici personne ne te juge. C'est entre toi et le Prince</small><textarea name="q8" rows="2" placeholder="Ce que tu n'as jamais osé dire..."></textarea></div>
<div class="card"><label>9. Qu'est-ce que tu veux vraiment maintenant ?</label><select name="q9"><option>Guérir et tourner la page</option><option>Trouver le vrai amour</option><option>Comprendre pourquoi ça bloque chez moi</option><option>Juste me vider le cœur</option></select></div>

<div class="grand">
<div class="grand-inner">
<label>10. Vide ton cœur maintenant ❤️</label><small>C'est le plus important. Dis tout ce que tu as gardé. Je lis chaque mot personnellement.</small>
<textarea name="q10" rows="5" placeholder="Écris ici comme si tu parlais à ton meilleur ami à 2h du matin... Je t'écoute." required></textarea>
<input name="whatsapp" style="margin-top:12px" placeholder="Ton WhatsApp pour ma réponse perso ( +243... )" required>
</div>
</div>

<button type="submit">CONFIER MON CŒUR AU PRINCE 👑</button>
<div class="secure">🔒 Chiffré • Anonyme • Supprimé après lecture • Réponse humaine, pas robot</div>
</form>

<div class="testis">
<div class="testi">“J'ai pleuré en écrivant. Sa réponse m'a guérie” - Sarah, 24 ans</div>
<div class="testi">“Enfin quelqu'un qui comprend sans juger” - Glodi, 27 ans</div>
<div class="testi">“Je pensais que c'était un quiz, c'était une thérapie” - Ines</div>
</div>

</div>
</body>
</html>