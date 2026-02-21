@include("includes.Admin_header")
    <main class="d-flex flex-column w-100" style="margin-left: 15em;">
      <div class="overflow-auto p-4 p-lg-5">
        <div class="container-fluid" style="max-width:1080px;">
          <div class="d-flex align-items-end justify-content-between mb-3">
            <div>
              <h3 class="fs-4 fw-bold mb-1">Liste des Commandes</h3>
              <p class="text-white-50 small mb-0">Visualisez et gérez toutes les transactions de la boutique.</p>
            </div>
          </div>

          <div class="surface rounded p-3 d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
            <form action="{{ url()->current() }}" method="get">
              <div class="d-flex align-items-center gap-2">
                <button type="submit" name="status" value="all" class="btn custom-button">Tous</button>
                <button type="submit" name="status" value="pending" class="btn custom-button">pending</button>
                <button type="submit" name="status" value="delivered" class="btn custom-button">Delivered</button>
                <button type="submit" name="status" value="canceled" class="btn custom-button">Canceled</button>
              </div>
            </form>
          </div>

          <div class="rounded">
            <div class="table-responsive">
              <table class="table table-roles table-divider align-middle mb-0" style="background-color: #5A1A19">
                <thead>
                  <tr>
                    <th class="px-4 py-3">ID Commande</th>
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Montant</th>
                    <th class="px-4 py-3">Statut</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3 text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($orders) > 0)
                    @foreach ($orders as $order)
                      <tr>
                        <td class="px-4 py-3 small fw-semibold">#CMD-{{ $order->id }}</td>
                        <td class="px-4 py-3">
                          <div class="d-flex align-items-center gap-2">
                            <span class="small fw-semibold">{{ $order->user->first_name }} {{ $order->user->last_name }}</span>
                          </div>
                        </td>
                        <td class="px-4 py-3 small fw-bold">{{ $order->total_price }} MAD</td>
                        <td class="px-4 py-3"><span class="pill pill-wait">{{ $order->status }}</span></td>
                        <td class="px-4 py-3 small text-white-75">{{ $order->created_at->format("Y-m-d") }}</td>
                        <td class="px-4 py-3 text-end">
                          <form action="/Admin/Orders/update/{{ $order->id }}" method="POST">
                            @csrf
                            @method("put")

                            <div class="btn-group btn-group-sm" role="group" aria-label="Changer le statut">
                              <button type="submit" name="status" value="Canceled" class="btn btn-outline-danger action-btn">
                                <i class="bi bi-x-circle me-1"></i> Canceled
                              </button>
                              <button type="submit" name="status" value="Approved" class="btn btn-outline-warning action-btn">
                                <i class="bi bi-check2-circle me-1"></i> Approve
                              </button>
                              <button type="submit" name="status" value="Delivered" class="btn btn-outline-success action-btn">
                                <i class="bi bi-truck me-1"></i> Delivered
                              </button>
                            </div>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="6" class="text-center py-4">Votre panier est vide.</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>

            <div class="d-flex align-items-center justify-content-between p-3">
              <p class="mb-0 small text-white-50">Affichage de 1 à 5 sur {{ count($orders) }} commandes</p>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>