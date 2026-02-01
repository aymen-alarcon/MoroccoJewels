@include("includes.Admin_header")
    <main class="d-flex flex-column overflow-auto w-100" style="margin-left: 15em;">
      <div class="px-4 px-lg-5 py-4 mx-auto w-100">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
          <div>
            <h2 class="display-6 fw-black mb-1">Ajouter un Rôle</h2>
            <p class="mb-0 text-white-50">Définissez le nom du rôle et ses accès spécifiques au système de gestion de la bijouterie.</p>
          </div>
          <button class="btn btn-outline-light rounded-lg d-inline-flex align-items-center gap-1" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.12);">
            <span class="material-symbols-outlined">arrow_back</span> Retour à la liste
          </button>
        </div>

        <section class="card-dark rounded-xl p-4 p-lg-5 mb-4">
          <h3 class="h5 fw-bold mb-4 d-flex align-items-center gap-2">
            <span class="material-symbols-outlined text-primary">info</span> Informations Générales
          </h3>
          <div class="row g-3">
            <div class="col-12">
              <form action="/Admin/Roles/AddRole/store" method="POST">
                @csrf
                @method("POST")
                <label class="form-label small fw-semibold text-white-75">Nom du rôle</label>
                <input type="text" name="role_name" class="form-control form-control-lg" placeholder="ex: Gestionnaire de Stock"/>
                <label class="form-label small fw-semibold text-white-75">Nom du Permission</label>
                <input type="text" name="permission" class="form-control form-control-lg" placeholder="ex: Gestionnaire de Stock"/>
                <button type="submit">submit</button>
              </form>
            </div>
          </div>
        </section>
      </div>
    </main>
  </div>