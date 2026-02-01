@include("includes.Admin_header")
    <main class="d-flex flex-column w-100" style="margin-left: 15em;">
      <div class="p-4 p-lg-5 pb-2">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3">
          <div>
            <h2 class="display-6 fw-black mb-1">Gestion des Roles</h2>
            <p class="mb-0 text-white-50">Administrez les accès et les rôles de votre boutique de bijoux berbères.</p>
          </div>
            <a href="/Admin/Roles/AddRole" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
              <span class="material-symbols-outlined">add</span> Ajouter un role
            </a>
        </div>
      </div>
      <div class="p-4 p-lg-5 container-fluid">
        <div class="row g-4">
          <div class="col-12 col-md-4">
            <div class="card-dark rounded-xl p-4">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="small text-white-50 fw-semibold mb-1">Total Rôles</p>
                  <h3 class="display-6 fs-2 fw-bold mb-0">8</h3>
                </div>
                <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:color-mix(in srgb, var(--bb-primary) 20%, transparent);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-3">shield_person</span>
                </div>
              </div>
              <div class="mt-3 d-flex align-items-center gap-1 text-success small"><span class="material-symbols-outlined" style="font-size:18px;">trending_up</span> +1 ce mois-ci</div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card-dark rounded-xl p-4">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="small text-white-50 fw-semibold mb-1">Utilisateurs Actifs</p>
                  <h3 class="display-6 fs-2 fw-bold mb-0">24</h3>
                </div>
                <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:color-mix(in srgb, var(--bb-primary) 20%, transparent);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-3">person_check</span>
                </div>
              </div>
              <div class="mt-3 d-flex align-items-center gap-1 text-success small"><span class="material-symbols-outlined" style="font-size:18px;">trending_up</span> 92% du personnel</div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card-dark rounded-xl p-4">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="small text-white-50 fw-semibold mb-1">Permissions Globales</p>
                  <h3 class="display-6 fs-2 fw-bold mb-0">156</h3>
                </div>
                <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:color-mix(in srgb, var(--bb-primary) 20%, transparent);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-3">key</span>
                </div>
              </div>
              <div class="mt-3 d-flex align-items-center gap-1 text-white-50 small"><span class="material-symbols-outlined" style="font-size:18px;">info</span> Réparties sur 12 modules</div>
            </div>
          </div>
        </div>
        <div class="card-dark rounded-xl mt-4 overflow-hidden">
          <div class="d-flex align-items-center justify-content-between px-4 py-3 border-bottom" style="border-color:var(--bb-border-dark)!important;">
            <h4 class="fw-bold mb-0">Liste des Rôles Système</h4>
          </div>
          <div class="table-responsive">
            <table class="table table-roles align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Nom du Rôle</th>
                  <th class="px-4 py-3">Permission</th>
                  <th class="px-4 py-3">Date de Création</th>
                  <th class="px-4 py-3 text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($roles as $role)
                  <tr>
                    <td class="px-4 py-3">
                      <div class="d-flex align-items-center gap-2">
                        <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:32px;height:32px;background:color-mix(in srgb, var(--bb-primary) 10%, transparent);color:var(--bb-primary);">
                          <span class="material-symbols-outlined">verified_user</span>
                        </div>
                        <span class="fw-semibold">{{ $role->role_name }}</span>
                      </div>
                    </td>
                    <td class="px-4 py-3 small">{{ $role->permission }}</td>
                    <td class="px-4 py-3 small">{{ $role->created_at }}</td>
                    <td class="px-4 py-3 text-end">
                      <div class="d-inline-flex align-items-center gap-1">
                        <button class="btn btn-sm text-white-50"><i class="bi bi-pencil text-success fw-bold fs-5"></i></button>
                        <form action="/Admin/Roles/AddRole/destroy/{{ $role->id }}" method="post">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-sm text-danger"><i class="bi bi-trash3 fw-bold fs-5"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="d-flex align-items-center justify-content-between px-4 py-3 border-top" style="background: rgba(0,0,0,.10); border-color:var(--bb-border-dark)!important;">
            <span class="small text-white-50">Affichage de 1-4 sur 8 rôles</span>
            <div class="d-flex align-items-center gap-2">
              <button class="btn btn-sm rounded px-3 py-1 text-white-50 border-dark-1" disabled>Précédent</button>
              <button class="btn btn-sm rounded px-3 py-1 text-white-75 border-dark-1">Suivant</button>
            </div>
          </div>
        </div>
    </main>