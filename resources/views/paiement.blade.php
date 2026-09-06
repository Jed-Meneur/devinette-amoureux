<div style="min-height:100vh;background:#0a0a0a;display:flex;align-items:center;justify-content:center;padding:15px;font-family:'Segoe UI',sans-serif">
<div style="max-width:420px;width:100%;background:#151515;border:1px solid #222;border-radius:24px;overflow:hidden">

  {{-- HEADER --}}
  <div style="background:linear-gradient(135deg,#ff2e7e 0%,#ff6a00 100%);padding:22px;text-align:center;color:white">
    <div style="background:rgba(255,255,255,0.2);width:50px;height:50px;border-radius:50%;margin:0 auto 10px;display:flex;align-items:center;justify-content:center;font-size:24px">🔒</div>
    <h2 style="margin:0;font-size:22px">Résultat prêt à 87%</h2>
    <p style="margin:5px 0 0;opacity:0.9;font-size:13px">Débloque ton analyse amoureuse complète</p>
  </div>

  <div style="padding:24px;color:white">
    
    {{-- PRIX --}}
    <div style="display:flex;justify-content:space-between;align-items:center;background:#1e1e1e;border:1px dashed #333;padding:14px;border-radius:14px">
      <div>
        <small style="color:#888;text-decoration:line-through">10.000 FC</small><br>
        <b style="font-size:26px">5.000 FC</b> <span style="background:#ff2e7e;padding:2px 8px;border-radius:20px;font-size:11px;margin-left:6px">-50% AUJOURD'HUI</span>
        <div style="font-size:11px;color:#888;margin-top:2px">Soit 2$ USD • Accès à vie</div>
      </div>
      <div style="text-align:right">
        <div style="color:#25D366;font-size:12px">✓ Paiement sécurisé</div>
        <div style="color:#25D366;font-size:12px">✓ Déblocage instantané</div>
      </div>
    </div>

    {{-- SOCIAL PROOF --}}
    <div style="margin:18px 0;background:#0f0f0f;padding:12px;border-radius:12px;display:flex;align-items:center;gap:10px;font-size:12px;color:#aaa">
      <span style="font-size:18px">🔥</span> <span><b style="color:white">1.247 personnes</b> ont débloqué leur résultat cette semaine à Kinshasa</span>
    </div>

    {{-- ETAPES --}}
    <p style="font-weight:bold;margin:0 0 10px;font-size:14px">Comment payer en 30 sec :</p>
    <div style="background:#000;border-radius:14px;padding:16px;border:1px solid #1a1a1a">
      <div style="display:flex;gap:12px;margin-bottom:12px">
        <span style="background:#222;min-width:26px;height:26px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px">1</span>
        <span style="font-size:13px;line-height:1.4">Envoie <b style="color:#ff2e7e">5.000 FC</b> sur un des numéros officiels ci-dessous</span>
      </div>
      <div style="background:#111;padding:12px;border-radius:10px;margin-left:38px;margin-bottom:14px;line-height:1.9;font-size:14px">
        <div style="display:flex;justify-content:space-between"><span>🔴 Airtel Money</span><b onclick="navigator.clipboard.writeText('0979675247')" style="cursor:pointer;color:#ff2e7e">+243 979 675 247 📋</b></div>
        <div style="display:flex;justify-content:space-between"><span>🔵 M-Pesa</span><b onclick="navigator.clipboard.writeText('0818370493')" style="cursor:pointer;color:#ff2e7e">+243 818 370 493 📋</b></div>
        <div style="font-size:11px;color:#666;margin-top:6px">Nom: Jed Makambo • Clique sur le numéro pour copier</div>
      </div>
      <div style="display:flex;gap:12px">
        <span style="background:#222;min-width:26px;height:26px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px">2</span>
        <span style="font-size:13px">Copie le <b>CODE SMS</b> reçu et colle-le ci-dessous</span>
      </div>
    </div>

    {{-- FORM --}}
    <form action="/verifier-paiement" method="POST" style="margin-top:20px">
      @csrf
      <input type="text" name="code_transaction" placeholder="Ex: MP240906.1234.A12345" required style="width:100%;padding:16px;border-radius:12px;border:1px solid #333;background:#0a0a0a;color:white;box-sizing:border-box;font-size:14px;outline:none">
      <button style="width:100%;padding:17px;background:linear-gradient(135deg,#ff2e7e,#ff6a00);color:white;border:none;margin-top:12px;border-radius:14px;font-weight:bold;font-size:16px;cursor:pointer;box-shadow:0 8px 20px rgba(255,46,126,0.3)">DÉBLOQUER MON RÉSULTAT MAINTENANT 💖</button>
    </form>

    {{-- CONFIANCE --}}
    <div style="display:flex;gap:8px;justify-content:center;margin-top:16px;flex-wrap:wrap">
      <span style="background:#1a1a1a;border-radius:20px;padding:5px 10px;font-size:11px;color:#888">🔐 100% Sécurisé</span>
      <span style="background:#1a1a1a;border-radius:20px;padding:5px 10px;font-size:11px;color:#888">⚡ Vérif en 2 min</span>
      <span style="background:#1a1a1a;border-radius:20px;padding:5px 10px;font-size:11px;color:#888">💬 Support WhatsApp</span>
    </div>

    <a href="https://wa.me/243818370493?text=Salut%20Jed%20j'ai%20un%20souci%20avec%20paiement%205000FC" style="display:block;text-align:center;margin-top:16px;color:#555;text-decoration:none;font-size:12px">Un problème ? Contacte-nous sur WhatsApp</a>

  </div>
</div>
</div>