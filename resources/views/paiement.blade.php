<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Paiement - 5000 FC</title>
<style>
body{background:#0a0a0a;color:#fff;font-family:sans-serif;text-align:center;padding:20px}
.card{background:#1a1a1a;padding:25px;border-radius:20px;max-width:420px;margin:auto;border:1px solid #ff1493}
input{width:90%;padding:14px;border-radius:10px;border:none;margin:10px 0;font-size:16px}
button{width:95%;padding:15px;border-radius:12px;border:none;font-weight:bold;font-size:17px;cursor:pointer;margin:8px 0}
.mpesa{background:#e40000;color:white}
.airtel{background:#ff0000;color:white}
#status{margin-top:15px;color:#00ff88;font-weight:bold}
</style>
</head>
<body>
<div class="card">
<h2>🔒 Dernière étape</h2>
<p>Pour que le Prince lise ton cœur et te réponde, débloque ta réponse perso pour <b>5000 FC</b></p>
<input type="text" id="phone" value="{{ request('phone', '243979675247') }}" placeholder="Ex: 243979675247">
<button class="mpesa" onclick="pay('mpesa')">Payer avec M-Pesa</button>
<button class="airtel" onclick="pay('airtelmoney')">Payer avec Airtel Money</button>
<p id="status"></p>
<p style="font-size:12px;opacity:0.6;margin-top:20px;">Paiement sécurisé • Reçu instantané</p>
</div>
<script>
async function pay(gateway){
 let phone=document.getElementById('phone').value;
 if(!phone){alert('Mets ton numéro');return;}
 document.getElementById('status').innerText='⏳ Connexion à '+gateway+'... Regarde ton téléphone dans 5 sec !';
 let res=await fetch('/initiate-payment',{
  method:'POST',
  headers:{'Content-Type':'application/json','X-CSRF-TOKEN':'{{ csrf_token() }}'},
  body:JSON.stringify({phone:phone,gateway:gateway,name:'{{ request("name","Client") }}'})
 });
 let data=await res.json();
 console.log(data);
 document.getElementById('status').innerText='✅ Demande envoyée à '+phone+' ! Entre ton code PIN M-Pesa/Airtel pour confirmer les 5000 FC.';
}
</script>
</body>
</html>