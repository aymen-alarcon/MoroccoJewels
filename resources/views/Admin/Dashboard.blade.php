@include("includes.Admin_header")
    <div class="container-fluid p-4 p-lg-5 d-flex flex-column gap-4 gap-lg-5" style="margin-left: 15em;">
      <div class="row g-3 g-lg-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded p-4 border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 rounded">
                <i class="bi bi-bag-fill text-primary"></i>
              </div>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Total Commandes</p>
              <p class="fs-4 fw-bold mb-0">{{ $ordersCount }}</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded p-4 border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 rounded">
                <i class="bi bi-box-seam text-primary"></i>
              </div>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Produits en Stock</p>
              <p class="fs-4 fw-bold mb-0">{{ $productsCount }}</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded p-4 border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 rounded">
                <i class="bi bi-person-plus-fill text-primary"></i>
              </div>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Nouveaux Clients</p>
              <p class="fs-4 fw-bold mb-0">{{ $usersCount }}</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded p-4 border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 rounded">
                <i class="bi bi-tags-fill text-primary"></i>
              </div>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Total Catégories</p>
              <p class="fs-4 fw-bold mb-0">{{ $categoriesCount }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-column gap-3 rounded border border-border-gold p-4 p-lg-5 shadow">
        <h3 class="fs-4 fw-bold mb-0">Activités Récentes</h3>

        <div class="table-responsive">
          <table class="table table-roles align-middle" style="background-color: #5A1A19">
            <thead>
              <tr>
                <th class="pb-3 ps-2">Commande</th>
                <th class="pb-3">Client</th>
                <th class="pb-3">Montant</th>
                <th class="pb-3">Status</th>
                <th class="pb-3">Date</th>
              </tr>
            </thead>
            <tbody>
              @if ($ordersCount > 0)                
                @foreach ($orders as $order)                
                <tr>
                  <td class="py-3 ps-2 fw-bold small">#ORD-{{ $order->id }}</td>
                  <td class="py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="d-flex align-items-center justify-content-center rounded-circle text-primary fw-bold" style="width:32px;height:32px;background:rgba(238,189,43,.2);font-size:12px;">YM</div>
                      <span class="small fw-semibold">Y{{ $order->user_id }}</span>
                    </div>
                  </td>
                  <td class="py-3 fw-bold small">{{ $order->total_price }} MAD</td>
                  <td class="py-3"><span class="pill pill-green">{{ $order->status }}</span></td>
                  <td class="py-3 small">{{ $order->created_at->format("Y-m-d") }}</td>
                </tr>
                @endforeach
              @else
                <tr>
                  <td>There</td>
                  <td>is</td>
                  <td>no</td>
                  <td>orders</td>
                  <td>Yet!</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>