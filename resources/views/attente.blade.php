<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Paiement reçu</title>
<style>
body{background:#0f0f1a;color:white;font-family:Arial;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0}
.box{background:#1c1c2e;padding:30px;border-radius:20px;text-align:center;max-width:400px}
.btn{display:inline-block;margin-top:20px;background:#25D366;color:white;padding:15px 20px;border-radius:10px;text-decoration:none;font-weight:bold}
.code{background:#2a2a40;padding:10px;border-radius:8px;margin:15px 0;color:#ff3d8d;font-weight:bold}
</style>
</head>
<body>
<div class="box">
    <h2>✅ Paiement reçu !</h2>
    <p>Ton code :</p>
    <div class="code">{{ $code ?? 'MP12345' }}</div>
    <p>Je vérifie ton paiement de <b>5000 FC</b> en moins de 5 minutes. Reste connecté.</p>
    <p style="opacity:0.7;font-size:13px">Tu as envoyé sur<br>+243 979 675 247 (Airtel) / +243 818 370 493 (M-Pesa)</p>
    <a class="btn" href="https://wa.me/243818370493?text=Bonjour%20Jed,%20j'ai%20payé%205000FC%20code:%20{{ $code }}">Contacter sur WhatsApp</a>
    <p style="margin-top:20px;font-size:12px;opacity:0.5">Après vérification, tu recevras ton résultat complet.</p>
</div>
</body>
</html>