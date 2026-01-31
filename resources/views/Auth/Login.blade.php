<?php require_once "../resources/views/includes/header.php"?>
  <main class="d-flex align-items-center justify-content-center py-5 position-relative z-1">
    <div class="container" style="max-width:520px;">
      <div class="form-card rounded-xl shadow-2xl p-4 p-md-5">
        <div class="text-center mb-4">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
               style="width:64px;height:64px;background:rgba(239,193,57,.15);color:var(--bb-primary);">
            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">shield_person</span>
          </div>
          <h1 class="h3 fw-bold mb-1">Connexion</h1>
          <p class="text-white-50 small mb-0">Accédez à votre espace membre Bijoux Berbères</p>
        </div>

        <form class="d-flex flex-column gap-3">
          <div>
            <label class="form-label small fw-semibold">Adresse e‑mail</label>
            <div class="position-relative">
              <input type="email" class="form-control" placeholder="exemple@bijoux.com"/>
              <span class="material-symbols-outlined position-absolute" style="right:12px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,.35)">mail</span>
            </div>
          </div>

          <div>
            <div class="d-flex justify-content-between align-items-center">
              <label class="form-label small fw-semibold mb-1">Mot de passe</label>
              <a href="#" class="text-warning text-decoration-none small">Mot de passe oublié ?</a>
            </div>
            <div class="position-relative">
              <input type="password" class="form-control" placeholder="••••••••"/>
              <button class="btn btn-link position-absolute p-0" type="button"
                      style="right:8px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,.5)">
                <span class="material-symbols-outlined">visibility</span>
              </button>
            </div>
          </div>

          <button class="btn btn-primary btn-lg rounded-lg fw-bold mt-2" type="submit">Se connecter</button>

          <div class="text-center pt-2">
            <p class="small text-white-50 mb-0">Pas encore de compte ?
              <a href="#" class="text-warning fw-bold text-decoration-none ms-1">Créer un compte</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="footerbar mt-auto">
    <div class="container-xxl py-4">
      <div class="row g-4">
        <div class="col-md-5">
          <div class="d-flex align-items-center gap-2 text-white mb-2">
            <span class="material-symbols-outlined text-warning">diamond</span>
            <span class="fw-bold">Bijoux Berbères</span>
          </div>
          <p class="text-white-50 small mb-0">
            L’artisanat ancestral marocain revisité. Des pièces uniques forgées par l'histoire et la tradition.
          </p>
        </div>
        <div class="col-6 col-md-3">
          <h6 class="fw-bold small mb-2">Boutique</h6>
          <ul class="list-unstyled small mb-0">
            <li><a href="#" class="text-white-50 text-decoration-none">Colliers</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none">Bracelets</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none">Bagues</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4">
          <h6 class="fw-bold small mb-2">Assistance</h6>
          <ul class="list-unstyled small mb-0 d-grid gap-1">
            <li><a href="#" class="text-white-50 text-decoration-none">Livraison</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none">Retours</a></li>
            <li><a href="#" class="text-white-50 text-decoration-none">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="pt-3 mt-3 border-top border-light-subtle text-center small text-white-50">
        © 2024 Bijoux Berbères. Tous droits réservés.
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>