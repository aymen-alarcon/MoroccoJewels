@include("includes.Admin_header")
    <main class="d-flex justify-content-center" style="margin-left: 15em;">
      <div class="w-100" style="max-width:1200px;">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 px-3 px-lg-4 py-4">
          <div>
            <h1 class="display-6 fw-black mb-1">Journaux d'Activité</h1>
            <p class="mb-0" style="color:color-mix(in srgb, var(--bb-primary) 80%, white);">Audit complet des modifications effectuées sur la plateforme.</p>
          </div>
          <button class="btn btn-warning fw-bold rounded-lg d-inline-flex align-items-center gap-1"
                  style="--bs-btn-bg:var(--bb-primary);--bs-btn-border-color:var(--bb-primary);color:#420F0E;">
            <span class="material-symbols-outlined">download</span> Exporter en CSV
          </button>
        </div>

        <div class="border-bottom border-opacity-25">
          <div class="d-flex gap-4 overflow-auto px-3 px-lg-4 pb-2">
            <a class="text-decoration-none fw-bold tab-active pb-2" href="#">Tous les journaux</a>
            <a class="text-decoration-none fw-bold tab pb-2" href="#">Produits</a>
            <a class="text-decoration-none fw-bold tab pb-2" href="#">Utilisateurs</a>
            <a class="text-decoration-none fw-bold tab pb-2" href="#">Système</a>
            <a class="text-decoration-none fw-bold tab pb-2" href="#">Sécurité</a>
          </div>
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 px-3 px-lg-4 pt-3">
          <div class="d-flex flex-wrap align-items-center gap-2">
            <button class="btn btn-sm chip rounded-lg d-inline-flex align-items-center gap-1">
              <span class="material-symbols-outlined">calendar_today</span> Derniers 30 jours
            </button>
            <button class="btn btn-sm chip rounded-lg d-inline-flex align-items-center gap-1">
              <i class="bi bi-person"></i> Filtrer par Utilisateur
            </button>
            <button class="btn btn-sm chip rounded-lg d-inline-flex align-items-center gap-1">
              <span class="material-symbols-outlined">filter_alt</span> Type d'action
            </button>
          </div>
          <div class="text-white-50 text-uppercase small fw-bold">256 entrées trouvées</div>
        </div>

        <div class="mx-3 mx-lg-4 my-3 rounded border border-opacity-25" style="background:rgba(255,255,255,.06);">
          <div class="table-responsive">
            <table class="table table-logs align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-3 py-3" style="width:12rem;">Horodatage</th>
                  <th class="px-3 py-3" style="width:12rem;">Utilisateur</th>
                  <th class="px-3 py-3" style="width:14rem;">Action</th>
                  <th class="px-3 py-3">Description</th>
                  <th class="px-3 py-3 text-center" style="width:6rem;">Détails</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-3 py-3 small text-white-75">
                    <div class="d-flex flex-column"><span>24 Oct 2023</span><span class="opacity-50">14:30:12</span></div>
                  </td>
                  <td class="px-3 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width:32px;height:32px;background:rgba(239,193,57,.2);color:var(--bb-primary);font-size:12px;">YA</div>
                      <span class="small fw-semibold">Youssef Alami</span>
                    </div>
                  </td>
                  <td class="px-3 py-3"><span class="pill pill-blue">Modifier Produit</span></td>
                  <td class="px-3 py-3 small fst-italic text-white-75">Mise à jour du prix du Collier Fibule Argent (+15%)</td>
                  <td class="px-3 py-3 text-center"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                </tr>

                <tr>
                  <td class="px-3 py-3 small text-white-75">
                    <div class="d-flex flex-column"><span>24 Oct 2023</span><span class="opacity-50">11:15:45</span></div>
                  </td>
                  <td class="px-3 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width:32px;height:32px;background:rgba(239,193,57,.2);color:var(--bb-primary);font-size:12px;">SM</div>
                      <span class="small fw-semibold">Sarah Mansour</span>
                    </div>
                  </td>
                  <td class="px-3 py-3"><span class="pill pill-red">Supprimer Catégorie</span></td>
                  <td class="px-3 py-3 small fst-italic text-white-75">Suppression de la catégorie "Anciennes Collections" et archivage des 12 produits associés.</td>
                  <td class="px-3 py-3 text-center"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                </tr>

                <tr>
                  <td class="px-3 py-3 small text-white-75">
                    <div class="d-flex flex-column"><span>23 Oct 2023</span><span class="opacity-50">16:45:00</span></div>
                  </td>
                  <td class="px-3 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width:32px;height:32px;background:rgba(239,193,57,.2);color:var(--bb-primary);font-size:12px;">AS</div>
                      <span class="small fw-semibold">Admin Système</span>
                    </div>
                  </td>
                  <td class="px-3 py-3"><span class="pill pill-purple">Mise à jour Rôle</span></td>
                  <td class="px-3 py-3 small fst-italic text-white-75">Changement des permissions "Éditeur" pour l'utilisateur "Lina K."</td>
                  <td class="px-3 py-3 text-center"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                </tr>

                <tr>
                  <td class="px-3 py-3 small text-white-75">
                    <div class="d-flex flex-column"><span>23 Oct 2023</span><span class="opacity-50">09:20:30</span></div>
                  </td>
                  <td class="px-3 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width:32px;height:32px;background:rgba(239,193,57,.2);color:var(--bb-primary);font-size:12px;">YA</div>
                      <span class="small fw-semibold">Youssef Alami</span>
                    </div>
                  </td>
                  <td class="px-3 py-3"><span class="pill pill-green">Ajouter Stock</span></td>
                  <td class="px-3 py-3 small fst-italic text-white-75">Réception de stock : +20 Bracelets émaillés Tiznit (Série Argent 925)</td>
                  <td class="px-3 py-3 text-center"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                </tr>

                <tr>
                  <td class="px-3 py-3 small text-white-75">
                    <div class="d-flex flex-column"><span>22 Oct 2023</span><span class="opacity-50">18:05:12</span></div>
                  </td>
                  <td class="px-3 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width:32px;height:32px;background:rgba(239,193,57,.2);color:var(--bb-primary);font-size:12px;">SM</div>
                      <span class="small fw-semibold">Sarah Mansour</span>
                    </div>
                  </td>
                  <td class="px-3 py-3"><span class="pill pill-blue">Modifier Produit</span></td>
                  <td class="px-3 py-3 small fst-italic text-white-75">Refonte de la description produit : "Boucles d'oreilles berbères en ambre"</td>
                  <td class="px-3 py-3 text-center"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="d-flex align-items-center justify-content-between px-3 px-lg-4 py-3 text-white-75 small">
            <div>Affichage de 1 à 5 sur 256 entrées</div>
            <div class="d-flex align-items-center gap-2">
              <button class="btn btn-sm rounded px-2" disabled style="width:36px;height:36px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);">
                <span class="material-symbols-outlined">chevron_left</span>
              </button>
              <button class="btn btn-sm rounded px-0 fw-bold" style="width:36px;height:36px;background:var(--bb-primary);color:#420F0E;">1</button>
              <button class="btn btn-sm rounded px-0" style="width:36px;height:36px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);color:#fff;">2</button>
              <button class="btn btn-sm rounded px-0" style="width:36px;height:36px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);color:#fff;">3</button>
              <span>...</span>
              <button class="btn btn-sm rounded px-0" style="width:36px;height:36px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);color:#fff;">52</button>
              <button class="btn btn-sm rounded px-2" style="width:36px;height:36px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);color:#fff;">
                <span class="material-symbols-outlined">chevron_right</span>
              </button>
            </div>
          </div>
        </div>