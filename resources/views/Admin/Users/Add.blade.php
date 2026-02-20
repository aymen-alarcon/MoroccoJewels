@include("includes.Admin_header")
<main class="d-flex flex-column align-items-center p-5 w-100" style="margin-left: 15em">
  <div>
    <div class="ps-3 ps-sm-4 border-start" style="border-color:var(--bb-primary)!important;">
      <h1 class="display-6 fw-extrabold mb-1">Ajouter un nouvel utilisateur</h1>
      <p class="lead text-faint mb-0">Créez un compte pour un membre de votre équipe avec des accès spécifiques.</p>
    </div>

    <div class="rounded p-4 p-lg-5 shadow mt-4 form-card">
      <form method="POST" action="/Admin/Users/AddUser/store" enctype="multipart/form-data">
        @csrf
        @method("POST")
        
        <div class="row g-4">
          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white"><i class="bi bi-file-image" style="font-size:16px;color:var(--bb-primary);"></i>Image principale</label>
            <input type="file" name="profile_picture" class="form-control align-content-center" accept="image/*" required />
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-envelope" style="font-size:16px;color:var(--bb-primary);"></i>
              Adresse e‑mail
            </label>
            <input type="email" name="email" class="form-control" placeholder="nom@boutique.ma"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white"><i class="bi bi-person" style="color:var(--bb-primary);"></i>Prénom</label>
            <input type="text" name="first_name" class="form-control" placeholder="Ex: First Name"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white"><i class="bi bi-person" style="color:var(--bb-primary);"></i>Nom</label>
            <input type="text" name="last_name" class="form-control" placeholder="Ex: Last Name"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-lock" style="font-size:16px;color:var(--bb-primary);"></i>
              Mot de passe
            </label>
            <input type="password" name="password" class="form-control" placeholder="••••••••"/>
            <p class="mt-1 mb-0" style="font-size:10px;color:rgb(255,255,255,.4);"><em>Minimum 8 caractères, incluant un symbole.</em></p>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-telephone" style="font-size:16px;color:var(--bb-primary);"></i>
              Numéro de telephone
            </label>
            <input type="text" name="phone" class="form-control" placeholder="nom@boutique.ma"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-geo-alt" style="font-size:16px;color:var(--bb-primary);"></i>
              Ville
            </label>
            <input type="text" name="city" class="form-control" placeholder="nom@boutique.ma"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-geo-alt" style="font-size:16px;color:var(--bb-primary);"></i>
              Quartiez
            </label>
            <input type="text" name="street" class="form-control" placeholder="nom@boutique.ma"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-geo-alt" style="font-size:16px;color:var(--bb-primary);"></i>
              Paye
            </label>
            <input type="text" name="country" class="form-control" placeholder="nom@boutique.ma"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-geo-alt" style="font-size:16px;color:var(--bb-primary);"></i>
              Zip
            </label>
            <input type="text" name="zip" class="form-control" placeholder="nom@boutique.ma"/>
          </div>

          <div class="col-12 col-md-12">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white"><i class="bi bi-shield-lock" style="color:var(--bb-primary);"></i>Rôle assigné</label>

            <div class="position-relative">
              <select class="form-select" name="role_id" >
                <option selected disabled>Choisir un rôle</option>
                @foreach ($roles as $role)                    
                    <option value="{{ $role->id }}" class="text-dark">{{ $role->role_name }}</option>
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