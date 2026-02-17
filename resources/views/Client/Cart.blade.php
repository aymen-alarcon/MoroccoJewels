@include("includes.header")
  <main class="container-xxl px-3 px-md-5 py-5">
    <div class="row g-4" style="max-width:1200px;margin-inline:auto;">
      <div class="col-12 col-lg-8 d-flex flex-column gap-3">
        <h1 class="display-6 fw-black mb-1" style="color:var(--bb-primary);">Votre Sélection</h1>
        <div class="rounded-xl overflow-hidden surface">
          <div class="px-3 px-md-4 py-3" style="background:rgba(255,255,255,.06);border-bottom:1px solid var(--bb-border);">
            <h3 class="small fw-bold text-uppercase mb-0" style="letter-spacing:.18em;color:color-mix(in srgb, var(--bb-primary) 80%, white);">Articles sélectionnés</h3>
          </div>

          <div class="table-responsive">
            <table class="table table-cart align-middle mb-0">
              <thead>
                  <tr>
                      <th class="px-3 px-md-4 py-3">Article</th>
                      <th class="px-3 px-md-4 py-3">Prix</th>
                      <th class="px-3 px-md-4 py-3">Quantité</th>
                      <th class="px-3 px-md-4 py-3 text-end">Action</th>
                  </tr>
              </thead>
              <tbody>
                @if(session('cart') && count(session('cart')) > 0)
                  @foreach(session('cart') as $item)
                    <tr class="transition">
                      <td class="px-3 px-md-4 py-4">
                        <div class="d-flex align-items-center gap-3">
                          <p class="mb-0 fw-bold">{{ $item['name'] }}</p>
                        </div>
                      </td>
                      <td class="px-3 px-md-4 py-4">
                        <div class="d-flex align-items-center gap-3">
                          <p class="mb-0 fw-bold">{{ number_format($item['price'], 2) }}</p>
                        </div>
                      </td>
                      <td class="px-3 px-md-4 py-4">
                        <div class="small text-white-75">
                          <div><span class="text-white-50">Quantité:</span> {{ $item['quantity'] }}</div>
                        </div>
                      </td>
                      <td class="px-3 px-md-4 py-4 text-end">
                        <form action="/Client/Cart/Destroy/{{ $item['id'] }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                            <button type="submit" class="btn btn-sm d-inline-flex align-items-center gap-1">
                              <i class="bi bi-cart-dash"></i>
                              <span class="small d-none d-md-inline fw-bold text-uppercase" style="letter-spacing:.08em;">Retirer</span>
                            </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="3" class="text-center py-4">Votre panier est vide.</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
          <div class="surface-ghost d-flex align-items-center justify-content-between px-3 px-md-4 py-3">
            <a href="/Home/Collection" class="text-decoration-none fw-bold small d-inline-flex align-items-center gap-1" style="color:var(--bb-primary);text-transform:uppercase;letter-spacing:.14em;">
              <i class="bi bi-arrow-left"></i> Continuer mes découvertes
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="position-sticky">
          <div class="info-card rounded-xl p-4 mb-3">
            <div class="d-flex flex-column gap-2">
              <button class="btn btn-primary fw-bold rounded-lg d-inline-flex align-items-center justify-content-center gap-2">Prendre rendez‑vous</button>
              <button class="btn btn-outline-light fw-bold rounded-lg d-inline-flex align-items-center justify-content-center gap-2"style="border-color:rgba(255,255,255,.2);">
                <i class="bi bi-envelope"></i> Demander des infos
              </button>
            </div>
            <p class="mt-2 mb-0 text-center" style="font-size:10px;letter-spacing:.22em;color:rgba(255,255,255,.6);text-transform:uppercase;">
              Réponse sous 24h par nos experts
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
@include("includes.footer")