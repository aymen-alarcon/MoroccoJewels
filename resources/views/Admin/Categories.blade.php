@include("includes.Admin_header")
    <main class="d-flex flex-column w-100" style="margin-left: 15em;">
      <div class="overflow-auto p-4 p-lg-5">
        <div class="row g-3 mb-4">
          <div class="col-12 col-md-4">
            <div class="card-surface rounded-xl p-4 d-flex align-items-center gap-3">
              <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(244,157,37,.15);color:var(--bb-primary);">
                <span class="material-symbols-outlined fs-3">category</span>
              </div>
              <div>
                <p class="mb-0 small text-white-50 fw-semibold">Total Catégories</p>
                <p class="mb-0 fs-4 fw-bold">12</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card-surface rounded-xl p-4 d-flex align-items-center gap-3">
              <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(16,185,129,.15);color:#10b981;">
                <span class="material-symbols-outlined fs-3">inventory</span>
              </div>
              <div>
                <p class="mb-0 small text-white-50 fw-semibold">Produits Associés</p>
                <p class="mb-0 fs-4 fw-bold">458</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card-surface rounded-xl p-4 d-flex align-items-center gap-3">
              <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(59,130,246,.15);color:#3b82f6;">
                <span class="material-symbols-outlined fs-3">visibility</span>
              </div>
              <div>
                <p class="mb-0 small text-white-50 fw-semibold">Vues Mensuelles</p>
                <p class="mb-0 fs-4 fw-bold">3.8k</p>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-xl overflow-hidden card-surface mb-3">
          <div class="d-flex align-items-center justify-content-between px-4 py-3" style="border-bottom:1px solid #5a1a19;">
            <h3 class="h6 fw-bold mb-0">Liste des catégories</h3>
            <div class="d-flex gap-2">
              <a href="/Admin/Categories/AddCategory" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
                <span class="material-symbols-outlined">add</span> Ajouter un Category
              </a>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-cats align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Aperçu</th>
                  <th class="px-4 py-3">Nom</th>
                  <th class="px-4 py-3">Description</th>
                  <th class="px-4 py-3">Produits</th>
                  <th class="px-4 py-3 text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-3">
                    <div class="rounded" style="width:48px;height:48px;background:#5a1a19;overflow:hidden;">
                    </div>
                  </td>
                  <td class="px-4 py-3">
                    <div class="fw-bold">Colliers en Argent</div>
                    <div class="small" style="color:color-mix(in srgb, var(--bb-primary) 60%, white);">ID: CAT-001</div>
                  </td>
                  <td class="px-4 py-3 small text-white-50" style="max-width:280px;">Bijoux traditionnels du Sud du Maroc, artisanat de Tiznit.</td>
                  <td class="px-4 py-3"><span class="count-pill">156 produits</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex align-items-center justify-content-between px-4 py-3" style="border-top:1px solid #5a1a19;">
            <p class="mb-0 small text-white-50">Affichage de 1-4 sur 12 catégories</p>
            <div class="d-flex gap-2">
              <button class="btn btn-sm rounded px-3 py-1 text-white-50 border" style="border-color:#5a1a19;" disabled>Précédent</button>
              <button class="btn btn-sm rounded px-3 py-1" style="background:var(--bb-primary);color:#2b1600;">1</button>
              <button class="btn btn-sm rounded px-3 py-1 text-white-75 border" style="border-color:#5a1a19;">2</button>
              <button class="btn btn-sm rounded px-3 py-1 text-white-75 border" style="border-color:#5a1a19;">3</button>
              <button class="btn btn-sm rounded px-3 py-1 text-white-75 border" style="border-color:#5a1a19;">Suivant</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>