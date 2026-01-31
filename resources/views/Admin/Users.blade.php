    <?php require_once "../resources/views/includes/Admin_header.php";?>
    <main class=" d-flex flex-column">
      <div class="p-4 p-lg-5 pb-2">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3">
          <div>
            <h2 class="display-6 fw-black mb-1">Gestion des Utilisateurs</h2>
            <p class="mb-0 text-white-50">Administrez les accès et les rôles de votre boutique de bijoux berbères.</p>
          </div>
          <button class="btn btn-primary rounded-lg fw-bold shadow d-inline-flex align-items-center gap-1">
            <span class="material-symbols-outlined">person_add</span> Ajouter un utilisateur
          </button>
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
          <div class="p-4 border-bottom border-opacity-25">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center gap-3">
              <div class=" w-100">
                <div class="input-group" style="height:48px;">
                  <span class="input-group-text border-0" style="background:rgba(255,255,255,.08);color:rgba(255,255,255,.6);"><span class="material-symbols-outlined">search</span></span>
                  <input class="form-control border-0" style="background:rgba(255,255,255,.08);color:#fff;" placeholder="Rechercher un utilisateur par nom ou email..."/>
                </div>
              </div>
              <div class="d-inline-flex gap-1 rounded" style="background:rgba(255,255,255,.08);padding:4px;">
                <a class="btn btn-sm fw-bold rounded" style="background:var(--bb-primary);color:#fff;">Tous</a>
                <a class="btn btn-sm fw-bold text-white-50 rounded">Admins</a>
                <a class="btn btn-sm fw-bold text-white-50 rounded">Gestionnaires</a>
                <a class="btn btn-sm fw-bold text-white-50 rounded">Éditeurs</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-users align-middle mb-0">
              <thead>
                <tr>
                  <th class="px-4 py-3">Utilisateur</th>
                  <th class="px-4 py-3">Rôle</th>
                  <th class="px-4 py-3">Statut</th>
                  <th class="px-4 py-3">Date d'inscription</th>
                  <th class="px-4 py-3 text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle border" style="width:40px;height:40px;background:url('https://lh3.googleusercontent.com/aida-public/AB6AXuA-SrzYqcjULv4EbxL9o7Emw9qLszHqqaSvKAZ4uRHjhbtWdXuMY5TWTWind_RR-TRrAXXxG9poJgVral073Vd25VvaW37Os28rhmYnYZ2i7GHXZGxgcs3xsRek34Nc8xCi9EZFl7OlP74nQIa_M8hJxeP322dVAo-cOHHAgzNEH4REGDQMgkzcy7XFRF-gYo5Pc_7rAyRd27uzae7rsjyTmwOJApqij7UlL-DVNH25zkwnSHutRNrdug4wTqlUo2NADnm2IIL2TTI') center/cover no-repeat;border-color:rgba(255,255,255,.2);"></div>
                      <div>
                        <div class="small fw-bold">Sarah Amzigh</div>
                        <div class="small text-white-50">sarah@boutique-berbere.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="badge-admin">Administrateur</span></td>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <span class="rounded-circle" style="width:8px;height:8px;background:#0bda5b;animation:pulse 1.6s infinite;"></span>
                      <span class="small">Actif</span>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="small text-white-75">12 Oct 2023</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle border" style="width:40px;height:40px;background:url('https://lh3.googleusercontent.com/aida-public/AB6AXuB0VegaKzYRyv4xSKhiYMhu16x8bXTWdqNK6Z_rTIEBWLBIzSwdcuscCHG2EVUJQZ9ud9dS9ABymbm9DqBnwkAGy2b8ex3QU07tLJofEy6qr7ktKIBYzI7yH-bQt6zDzEyeSN7cCdrX1sb42u45SCdv6iYASSmYiXViXATxx3T0aAskalMNB880tstyuNT0hoSmzMKNDtu9i-cGbwdlqL03-vOWuYO3uQ3IXAxcSB5W2HlHcDdfCZ2r2eLxdeWxfDyRa_UM6LSsc8E') center/cover no-repeat;border-color:rgba(255,255,255,.2);"></div>
                      <div>
                        <div class="small fw-bold">Youssef Benani</div>
                        <div class="small text-white-50">youssef@boutique-berbere.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="badge-manager">Gestionnaire</span></td>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <span class="rounded-circle" style="width:8px;height:8px;background:#0bda5b;"></span>
                      <span class="small">Actif</span>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="small text-white-75">05 Nov 2023</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle border" style="width:40px;height:40px;background:url('https://lh3.googleusercontent.com/aida-public/AB6AXuDWO4aOndKc343eaYUeaL6FTCYwOHCm972UItWxbs3LxXqShqyc9Njv8AfenexiUhlDexTXiOOFvDNum-pnpF3XD7aehdVi_rCaxYKISjYGeDbBx7Mrt55N8s7kdTaRXCjQMpgEUmJ7_ghMHzd_1iy824bwAavuuUHsia3MSiwF59T9ivJwAqwSHAZ-ZHBZ8IY7mPYXquMjNo993QL0QhEnI5BvTVH2zhNEDed4dGigQXz_X6VZ8z4h5lnzWzGf4bwqdUl2cNHUIf8') center/cover no-repeat;border-color:rgba(255,255,255,.2);"></div>
                      <div>
                        <div class="small fw-bold">Sofia Tazi</div>
                        <div class="small text-white-50">sofia.t@boutique-berbere.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="badge-editor">Éditeur</span></td>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2 text-white-50">
                      <span class="rounded-circle" style="width:8px;height:8px;background:rgba(255,255,255,.4);"></span>
                      <span class="small">Inactif</span>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="small text-white-75">20 Dec 2023</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>

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
<?php require_once "../resources/views/includes/Admin_header.php";?>