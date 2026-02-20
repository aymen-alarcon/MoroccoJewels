@include("includes.header")
  <main class="position-relative d-flex align-items-center justify-content-center py-5">
    <div class="moroccan-pattern"></div>
    <div class="container position-relative z-1  form-card" style="max-width:640px;">
      <div class="glass rounded shadow-2xl p-4 p-lg-5">
        <div class="text-center mb-3">
          <h1 class="h3 fw-bold mb-1">Créer un Compte</h1>
          <p class="text-white-50 mb-0">Rejoignez l'héritage des bijoux artisanaux</p>
        </div>

        <form class="d-flex flex-column gap-3" action="/Auth/Register/invoke" method="POST">
          @csrf
          @method("POST")

          <div class="row g-3">
            <div class="col-12 col-md-6">
              <label class="form-label small text-white-75 fw-semibold">Prénom</label>
              <input type="text" name="first_name" class="form-control" placeholder="Entrez votre prénom"/>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small text-white-75 fw-semibold">Nom</label>
              <input type="text" name="last_name" class="form-control" placeholder="Entrez votre nom"/>
            </div>
          </div>

          <div>
            <label class="form-label small text-white-75 fw-semibold">Adresse e‑mail</label>
            <input type="email" name="email" class="form-control" placeholder="exemple@mail.com"/>
          </div>

          <div>
            <label class="form-label small text-white-75 fw-semibold">Mot de passe</label>
            <div class="input-group">
              <input type="password" name="password" class="form-control" placeholder="Votre mot de passe"/>
              <button class="btn btn-outline-light" type="button" style="border-color:rgba(255,255,255,.2);"><i class="bi bi-eye"></i></button>
            </div>
          </div>

          <div>
            <label class="form-label small text-white-75 fw-semibold">Confirmer le mot de passe</label>
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Répétez votre mot de passe"/>
              <button class="btn btn-outline-light" type="button" style="border-color:rgba(255,255,255,.2);"><i class="bi bi-eye"></i></button>
            </div>
          </div>

          <label class="form-label small text-white-75 fw-semibold">Veuillez choisir un role</label>
          <select class="form-control text-white">
            @if (count($roles) > 0)              
              @foreach ($roles as $role)
                <option value="{{ $role->id }}" class="text-dark">{{ $role->role_name }}</option>
              @endforeach
            @endif
          </select>

          <div class="pt-2">
            <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold rounded-lg">Créer un compte</button>
          </div>

          <div class="text-center pt-1">
            <p class="small text-white-50 mb-0">Déjà un compte ?
              <a href="/Auth/Login" class="text-warning fw-bold text-decoration-none ms-1">Connectez‑vous</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </main>
@include("includes.footer")