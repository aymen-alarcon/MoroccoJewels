@include("includes.Admin_header")
<main class="d-flex flex-column align-items-center p-5 w-100" style="margin-left: 15em">
  <div>
    <div class="ps-3 ps-sm-4 border-start" style="border-color:var(--bb-primary)!important;">
      <h1 class="display-6 fw-extrabold mb-1">Ajouter un nouvel utilisateur</h1>
      <p class="lead text-faint mb-0">Créez un compte pour un membre de votre équipe avec des accès spécifiques.</p>
    </div>

    <div class="rounded-xl p-4 p-lg-5 shadow-lg mt-4 form-card">
      <form method="POST" action="/Admin/Users/AddUser/store">
        @csrf
        @method("POST")
        <div class="row g-4">
          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">person</span>
              Prénom
            </label>
            <input type="text" name="first_name" class="form-control" placeholder="Ex: Karim Amrani"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">person</span>
              Nom
            </label>
            <input type="text" name="last_name" class="form-control" placeholder="Ex: Karim Amrani"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">mail</span>
              Adresse e‑mail
            </label>
            <input type="email" name="email" class="form-control" placeholder="nom@boutique.ma"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">lock</span>
              Mot de passe
            </label>
            <input type="password" name="password" class="form-control" placeholder="••••••••"/>
            <p class="mt-1 mb-0" style="font-size:10px;color:rgb(255,255,255,.4);"><em>Minimum 8 caractères, incluant un symbole.</em></p>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">shield_person</span>
              Rôle assigné
            </label>

            <div class="position-relative">
              <select class="form-select" name="role_id" >
                <option selected disabled>Choisir un rôle</option>
                @foreach ($roles as $role)                    
                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary rounded-3 float-end">
            Créer l'utilisateur
        </button>
      </form>
    </div>
  </div>
</main>