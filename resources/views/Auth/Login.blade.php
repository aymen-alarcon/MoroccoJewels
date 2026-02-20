@include("includes.header")
  <main class="d-flex align-items-center justify-content-center py-5 position-relative z-1">
    <div class="container" style="max-width:520px;">
      <div class="form-card rounded shadow-2xl p-4 p-md-5">
        <div class="text-center mb-4">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width:64px;height:64px;background:rgba(239,193,57,.15);color:var(--bb-primary);">
            <i class="bi bi-person-circle fs-2"></i>
          </div>
          <h1 class="h3 fw-bold mb-1">Connexion</h1>
          <p class="text-white-50 small mb-0">Accédez à votre espace membre Bijoux Berbères</p>
        </div>

        <form class="d-flex flex-column gap-3" action="/Auth/Login/invoke" method="POST">
          @csrf
          @method("POST")
          <div>
            <label class="form-label small fw-semibold">Adresse e‑mail</label>
            <div class="position-relative">
              <input type="email" name="email" class="form-control" placeholder="exemple@bijoux.com"/>
              <button class="btn btn-link position-absolute p-0" type="button"
                      style="right:8px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,.5)">
              <i class="bi bi-envelope" style="right:12px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,.35)"></i>
              </button>
            </div>
          </div>

          <div>
            <div class="d-flex justify-content-between align-items-center">
              <label class="form-label small fw-semibold mb-1">Mot de passe</label>
              <a href="#" class="text-warning text-decoration-none small">Mot de passe oublié ?</a>
            </div>
            <div class="position-relative">
              <input type="password" name="password" class="form-control" placeholder="••••••••"/>
              <button class="btn btn-link position-absolute p-0" type="button"
                      style="right:8px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,.5)">
                <i class="bi bi-eye"></i>
              </button>
            </div>
          </div>

          <button class="btn btn-primary btn-lg rounded-lg fw-bold mt-2" type="submit">Se connecter</button>

          <div class="text-center pt-2">
            <p class="small text-white-50 mb-0">Pas encore de compte ?
              <a href="/Auth/Register" class="text-warning fw-bold text-decoration-none ms-1">Créer un compte</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </main>
@include("includes.footer")