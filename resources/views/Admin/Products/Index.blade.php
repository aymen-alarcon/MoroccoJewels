@include("includes.Admin_header")
    <main class="d-flex flex-column position-relative w-100" style="margin-left: 15em;">
      <div class="position-absolute top-0 start-0 end-0 bottom-0"></div>
      <header class="p-4 p-lg-5 d-flex flex-wrap align-items-center justify-content-between gap-3 position-relative">
        <div>
          <h2 class="display-6 fw-black mb-1">Gestion des Produits</h2>
          <p class="text-primary opacity-75 mb-0">Gérez votre inventaire de bijoux berbères artisanaux.</p>
        </div>
        <div class="d-flex align-items-center gap-2">
            <a href="/Admin/Products/AddProduct" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
              <i class="bi bi-plus"></i> Nouvelle Produits
            </a>
        </div>
      </header>
      <section class="px-4 px-lg-5 pb-3 d-flex flex-column gap-3 position-relative">
        <div class="d-flex flex-wrap align-items-center gap-3 rounded p-3 border" style="background: color-mix(in srgb, var(--bb-accent-dark) 30%, transparent); border-color: rgba(255,255,255,.05)!important;">
          <div>
            <div class="form-control">
              <i class="bi bi-search" style="color: color-mix(in srgb, var(--bb-primary) 50%, white);"></i>
              <input class="ps-5 py-2 rounded-lg bg-transparent" placeholder="Rechercher par nom" style="border:none; outline: none"/>
            </div>
          </div>

          <div class="d-flex align-items-center gap-2 custom-scrollbar pb-1">
            <button class="btn custom-button active">Tous</button>
            <button class="btn custom-button">Colliers</button>
            <button class="btn custom-button">Bracelets</button>
            <button class="btn custom-button">Boucles</button>
            <button class="btn custom-button">Bagues</button>
          </div>
        </div>
      </section>

      <section class="px-4 px-lg-5 pb-4 position-relative">
        <div class="card-dark rounded mt-4">
          <div class="d-flex align-items-center justify-content-between px-4 py-3 border-bottom" style="border-color: #752A28!important;">
            <h4 class="fw-bold mb-0">Liste des Produits</h4>
          </div>
          <div class="table-responsive">
            <table class="table table-roles align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Picture</th>
                  <th class="px-4 py-3">Produit</th>
                  <th class="px-4 py-3">Catégorie</th>
                  <th class="px-4 py-3 text-end">Prix</th>
                  <th class="px-4 py-3">Stock</th>
                  <th class="px-4 py-3 text-center">Actions</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @if (count($products) > 0)                  
                  @foreach ($products as $product)
                    <tr>
                      <td class="px-4 py-3"><img src="{{ asset('storage/' . $product->main_image) }}" class="rounded-circle" style="height: 5em; width: 5em;"></td>
                      <td class="px-4 py-3">
                        <div class="d-flex align-items-center gap-3">
                          <div class="rounded shadow-soft border"></div>
                          <div>
                            <p class="fw-bold mb-0">{{ $product->name }}</p>
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
                        <div class="d-inline-flex align-items-center gap-1">
                          <a href="/Admin/Products/EditProduct/{{ $product->id }}" class="btn btn-sm text-white-50"><i class="bi bi-pencil text-success fw-bold fs-5"></i></a>
                          <form action="/Admin/Products/destroy/{{ $product->id }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm text-danger"><i class="bi bi-trash3 fw-bold fs-5"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="6" class="text-center py-4">Il n'y a pas encore de produits.</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>

          <div class="d-flex align-items-center justify-content-between p-3">
            <p class="mb-0 small text-white-50">Affichage de 1 à 4 sur 128 produits</p>
            <div class="d-flex align-items-center gap-2">
              <button class="btn btn-sm rounded-lg px-2" disabled>
                <i class="bi bi-arrow-left"></i>
              </button>
              <button class="btn btn-sm rounded-lg fw-bold px-0">1</button>
              <button class="btn btn-sm rounded-lg px-0">2</button>
              <button class="btn btn-sm rounded-lg px-0">3</button>
              <span class="text-white-50">...</span>
              <button class="btn btn-sm rounded-lg px-0">12</button>
              <button class="btn btn-sm rounded-lg px-2">
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>