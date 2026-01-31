<?php require_once "../resources/views/includes/Admin_header.php";?>    
    <main class="d-flex flex-column overflow-hidden position-relative w-100">
      <div class="position-absolute top-0 start-0 end-0 bottom-0"></div>
      <header class="p-4 p-lg-5 d-flex flex-wrap align-items-center justify-content-between gap-3 position-relative">
        <div>
          <h2 class="display-6 fw-black mb-1">Gestion des Produits</h2>
          <p class="text-primary opacity-75 mb-0">Gérez votre inventaire de bijoux berbères artisanaux.</p>
        </div>
        <div class="d-flex align-items-center gap-2">
            <a href="/Admin/Products/Create" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
              <span class="material-symbols-outlined">add</span> Nouvelle Produits
            </a>
        </div>
      </header>
      <section class="px-4 px-lg-5 pb-3 d-flex flex-column gap-3 position-relative">
        <div class="d-flex flex-wrap align-items-center gap-3 rounded-xl p-3 border" style="background: color-mix(in srgb, var(--bb-accent-dark) 30%, transparent); border-color: rgba(255,255,255,.05)!important;">
          <div class="">
            <div class="position-relative">
              <span class="material-symbols-outlined position-absolute" style="left:14px;top:50%;transform:translateY(-50%);color: color-mix(in srgb, var(--bb-primary) 50%, white);">search</span>
              <input class="form-control ps-5 py-2 rounded-lg" placeholder="Rechercher par nom, SKU ou artisan..." />
            </div>
          </div>

          <div class="d-flex align-items-center gap-2 overflow-auto custom-scrollbar pb-1">
            <button class="chip active">Tous</button>
            <button class="chip">Colliers</button>
            <button class="chip">Bracelets</button>
            <button class="chip">Boucles</button>
            <button class="chip">Bagues</button>
          </div>

          <button class="btn rounded-lg d-inline-flex align-items-center justify-content-center" style="width:48px;height:48px;background:rgba(255,255,255,.05);color:rgba(255,255,255,.7);border:1px solid rgba(255,255,255,.1);" type="button">
            <span class="material-symbols-outlined">filter_list</span>
          </button>
        </div>
      </section>

      <section class="overflow-auto px-4 px-lg-5 pb-4 position-relative">
        <div class="rounded-xl border overflow-hidden">
          <div class="table-responsive">
            <table class="table table-products align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Produit</th>
                  <th class="px-4 py-3">Catégorie</th>
                  <th class="px-4 py-3 text-end">Prix</th>
                  <th class="px-4 py-3">Stock</th>
                  <th class="px-4 py-3 text-center">Actions</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach ($products as $product)
                  <tr>
                    <td class="px-4 py-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="rounded shadow-soft border"></div>
                        <div>
                          <p class="fw-bold mb-0">{{ $product->name }}</p>
                          <p class="mb-0 text-white-50">SKU: BRB-2024-001</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3"><span class="badge-soft">{{ $product->description }}</span></td>
                    <td class="px-4 py-3 text-end"><span class="fw-bold">{{ $product->price }} DH</span></td>
                    <td class="px-4 py-3">
                      <div class="d-flex align-items-center gap-2">
                        <span class="stock-dot"></span>
                        <span class="text-success small fw-semibold">{{ $product->stock }} en stock</span>
                      </div>
                    </td>
                    <td class="px-4 py-3">
                      <div class="d-flex align-items-center justify-content-center gap-2">
                        <button class="btn btn-sm rounded-lg"><span class="material-symbols-outlined" style="font-size:18px;">edit</span></button>
                        <button class="btn btn-sm rounded-lg"><span class="material-symbols-outlined" style="font-size:18px;">delete</span></button>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="d-flex align-items-center justify-content-between p-3">
            <p class="mb-0 small text-white-50">Affichage de 1 à 4 sur 128 produits</p>
            <div class="d-flex align-items-center gap-2">
              <button class="btn btn-sm rounded-lg px-2" disabled>
                <span class="material-symbols-outlined">chevron_left</span>
              </button>
              <button class="btn btn-sm rounded-lg fw-bold px-0">1</button>
              <button class="btn btn-sm rounded-lg px-0">2</button>
              <button class="btn btn-sm rounded-lg px-0">3</button>
              <span class="text-white-50">...</span>
              <button class="btn btn-sm rounded-lg px-0">12</button>
              <button class="btn btn-sm rounded-lg px-2">
                <span class="material-symbols-outlined">chevron_right</span>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>