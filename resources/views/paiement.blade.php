<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Paiement</title>
<style>
body{background:#0a0a0a;color:white;font-family:sans-serif;text-align:center;padding:30px}
.card{background:#1a1a1a;padding:30px;border-radius:20px;max-width:400px;margin:0 auto;border:1px solid hotpink}
input{width:90%;padding:15px;border-radius:10px;border:none;margin:10px 0;font-size:16px}
button{width:95%;padding:16px;border-radius:12px;border:none;font-weight:bold;font-size:18px;cursor:pointer;margin:10px 0}
.mpesa{background:#e40000;color:white}
.airtel{background:#ff0000;color:white}
</style>
</head>
<body>
<div class="card">
<h2>🔒 Dernière étape</h2>
<p>Pour que le Prince lise ton cœur et te réponde, débloque ta réponse perso pour <b>5000 FC</b></p>

<input type="text" id="phone" value="{{ request('phone') }}" placeholder="Ton numéro M-Pesa / Airtel">

<button class="mpesa" onclick="payer('mpesa')">Payer avec M-Pesa</button>
<button class="airtel" onclick="payer('airtelmoney')">Payer avec Airtel Money</button>

<p style="font-size:12px;opacity:0.6;margin-top:20px;">Paiement sécurisé • Reçu instantané</p>
</div>

<script>
function payer(gateway){
  let phone = document.getElementById('phone').value;
  if(!phone){ alert('Mets ton numéro'); return; }
  alert('On va lancer le paiement ' + gateway + ' vers ' + phone + '\n\nOn branche FlexPay maintenant si tu as ta clé API ?');
  // Ici on mettra ton code FlexPay
}
</script>
</body>
</html>