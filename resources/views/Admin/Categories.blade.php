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
                  <th class="px-4 py-3">Id</th>
                  <th class="px-4 py-3">Nom</th>
                  <th class="px-4 py-3">Description</th>
                  <th class="px-4 py-3 text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)                  
                <tr>
                  <td class="px-4 py-3">
                    <div class="fw-bold">ID: CAT-{{ $category->id }}</div>
                  </td>
                  <td class="px-4 py-3">
                    <div class="fw-bold">{{ $category->name }}</div>
                  </td>
                  <td class="px-4 py-3 ">{{ $category->description }}</td>
                  <td class="px-4 py-3 text-end">
                    <div class="d-inline-flex align-items-center gap-1">
                      <button class="btn btn-sm text-white-50"><i class="bi bi-pencil text-success fw-bold fs-5"></i></button>
                      <form action="/Admin/Categories/destroy/{{ $category->id }}" method="post">
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