@include("includes.Admin_header")
<main class="d-flex justify-content-center py-5 px-3 position-relative z-1">
  <div class="w-100" style="max-width:800px;">
    <nav class="d-flex flex-wrap align-items-center gap-2 mb-3 px-3">
      <a href="#" class="text-decoration-none small fw-medium d-inline-flex align-items-center gap-1" style="color:rgba(255,255,255,.6);">
        <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">group</span>
        Utilisateurs
      </a>
      <span class="small" style="color:rgba(255,255,255,.3)">/</span>
      <span class="small fw-semibold text-white">Modifier le profil</span>
    </nav>

    <div class="d-flex flex-column gap-2 px-3">
        <p> les informations d'accès et le rôle administratif.</p>
    </div>

    <div class="surface rounded-xl p-4 p-md-5 shadow-lg">
      <form class="d-flex flex-column gap-4">
        <div class="row g-4">
          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">person</span>
              Nom complet
            </label>
            <input type="text" class="form-control" placeholder="Ex: Fatima Zahra" value="Yassine Alami"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">mail</span>
              Adresse e‑mail
            </label>
            <input type="email" class="form-control" placeholder="nom@exemple.com" value="yassine.alami@berberjewelry.ma"/>
          </div>
        </div>

        <div>
          <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
            <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">shield_person</span>
            Rôle de l'utilisateur
          </label>

          <div class="position-relative">
            <select class="form-select">
              <option value="admin">Administrateur principal</option>
              <option value="editor" selected>Éditeur de contenu</option>
              <option value="manager">Gestionnaire de stock</option>
              <option value="viewer">Consultant (Lecture seule)</option>
            </select>
            <span class="material-symbols-outlined position-absolute end-0 top-50 translate-middle-y pe-3"
                  style="pointer-events:none;color:rgba(255,255,255,.6);">expand_more</span>
          </div>

          <p class="text-white-50 small fst-italic mt-2">
            Le rôle définit les permissions d'accès aux différentes sections de la boutique.
          </p>
        </div>

        <div class="pt-2 d-flex flex-column flex-md-row align-items-center gap-3">
          <button type="submit" class="btn btn-primary fw-bold rounded-lg d-inline-flex align-items-center gap-2 px-4 py-2"
                  style="height:48px;">
            <span class="material-symbols-outlined">save</span>
            Mettre à jour l'utilisateur
          </button>

          #
            <span class="material-symbols-outlined">arrow_back</span>
            Retour à la liste des utilisateurs
          </a>
        </div>
      </form>
    </div>

    <div class="mt-5 d-flex justify-content-center opacity-25">
      <div class="d-flex align-items-center gap-3">
        <div style="height:1px;width:80px;background:var(--bb-primary);"></div>
        <span class="material-symbols-outlined" style="color:var(--bb-primary);">token</span>
        <div style="height:1px;width:80px;background:var(--bb-primary);"></div>
      </div>
    </div>
  </div>
</main>