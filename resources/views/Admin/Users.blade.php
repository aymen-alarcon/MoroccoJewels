@include("includes.Admin_header")
    <main class=" d-flex flex-column w-100" style="margin-left: 15em;">
      <div class="p-4 p-lg-5 pb-2">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3">
          <div>
            <h2 class="display-6 fw-black mb-1">Gestion des Utilisateurs</h2>
            <p class="mb-0 text-white-50">Administrez les accès et les rôles de votre boutique de bijoux berbères.</p>
          </div>
            <a href="/Admin/Users/Create" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
              <span class="material-symbols-outlined">add</span> Ajouter un utilisateur
            </a>
        </div>
      </div>
      <div class="px-4 px-lg-5 py-3 d-flex flex-wrap gap-3">
        <div class="card-surface rounded-xl p-4 " style="min-width:240px;">
          <div class="d-flex align-items-start justify-content-between">
            <p class="mb-2 small text-uppercase fw-semibold text-white-50">Total Utilisateurs</p>
            <span class="material-symbols-outlined text-primary">groups</span>
          </div>
          <p class="fs-2 fw-bold mb-1">124</p>
          <p class="small fw-bold text-success d-inline-flex align-items-center gap-1 mb-0">
            <span class="material-symbols-outlined" style="font-size:16px;">trending_up</span> +2% ce mois
          </p>
        </div>

        <div class="card-surface rounded-xl p-4 " style="min-width:240px;">
          <div class="d-flex align-items-start justify-content-between">
            <p class="mb-2 small text-uppercase fw-semibold text-white-50">Administrateurs</p>
            <span class="material-symbols-outlined text-primary">admin_panel_settings</span>
          </div>
          <p class="fs-2 fw-bold mb-1">5</p>
          <p class="small text-white-50 mb-0">Stable</p>
        </div>

        <div class="card-surface rounded-xl p-4 " style="min-width:240px;">
          <div class="d-flex align-items-start justify-content-between">
            <p class="mb-2 small text-uppercase fw-semibold text-white-50">Nouveaux ce mois</p>
            <span class="material-symbols-outlined text-primary">person_add</span>
          </div>
          <p class="fs-2 fw-bold mb-1">12</p>
          <p class="small fw-bold text-success d-inline-flex align-items-center gap-1 mb-0">
            <span class="material-symbols-outlined" style="font-size:16px;">trending_up</span> +5% vs mois dernier
          </p>
        </div>
      </div>
      <div class="px-4 px-lg-5">
        <div class="card-surface rounded-xl overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-4 py-3 border-bottom" style="border-color:var(--bb-border-dark)!important;">
              <h4 class="fw-bold mb-0">Liste des Rôles Système</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-roles align-middle mb-0" style="background-color: #5A1A19">
                <thead>
                  <tr>
                    <th class="px-4 py-3">Utilisateur</th>
                    <th class="px-4 py-3">Rôle</th>
                    <th class="px-4 py-3">Date d'inscription</th>
                    <th class="px-4 py-3 text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)                  
                  <tr>
                    <td class="px-4 py-3">
                      <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle border" style="width:40px;height:40px;background:url('https://lh3.googleusercontent.com/aida-public/AB6AXuA-SrzYqcjULv4EbxL9o7Emw9qLszHqqaSvKAZ4uRHjhbtWdXuMY5TWTWind_RR-TRrAXXxG9poJgVral073Vd25VvaW37Os28rhmYnYZ2i7GHXZGxgcs3xsRek34Nc8xCi9EZFl7OlP74nQIa_M8hJxeP322dVAo-cOHHAgzNEH4REGDQMgkzcy7XFRF-gYo5Pc_7rAyRd27uzae7rsjyTmwOJApqij7UlL-DVNH25zkwnSHutRNrdug4wTqlUo2NADnm2IIL2TTI') center/cover no-repeat;border-color:rgba(255,255,255,.2);"></div>
                        <div>
                          <div class="small fw-bold">{{ $user->name }}</div>
                          <div class="small text-white-50">{{ $user->email }}</div>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3"><span class="badge-admin">{{ $user->role_id }}</span></td>
                    <td class="px-4 py-3"><span class="small text-white-75">{{ $user->created_at }}</span></td>
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
            <div class="p-3 d-flex align-items-center justify-content-between border-top border-opacity-25">
              <p class="mb-0 small text-white-50">Affichage de 1 à 3 sur 124 utilisateurs</p>
              <div class="d-flex gap-2">
                <button class="btn btn-sm rounded px-3 py-1 text-white-50 border border-opacity-25" disabled>Précédent</button>
                <button class="btn btn-sm rounded px-3 py-1 text-white-75 border border-opacity-25">Suivant</button>
              </div>
            </div>
        </div>
      </div>
    </main>
  </div>
  <style>
    @keyframes pulse { 0%{opacity:.6} 50%{opacity:1} 100%{opacity:.6} }
  </style>