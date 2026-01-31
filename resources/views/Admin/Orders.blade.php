<?php require_once "../resources/views/includes/Admin_header.php";?>    
    <main class="d-flex flex-column overflow-hidden w-100">
      <div class="overflow-auto p-4 p-lg-5">
        <div class="container-fluid" style="max-width:1080px;">
          <div class="d-flex align-items-end justify-content-between mb-3">
            <div>
              <h3 class="fs-4 fw-bold mb-1">Liste des Commandes</h3>
              <p class="text-white-50 small mb-0">Visualisez et gérez toutes les transactions de la boutique.</p>
            </div>
          </div>

          <div class="surface rounded-xl p-3 d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
            <div class="d-flex align-items-center gap-2">
              <button class="chip chip-active">Tous</button>
              <button class="chip chip-ghost">En attente</button>
              <button class="chip chip-ghost">En cours</button>
              <button class="chip chip-ghost">Expédiées</button>
            </div>
            <div class="d-flex align-items-center gap-2">
              <button class="btn btn-sm rounded-lg d-inline-flex align-items-center gap-1 chip-ghost">
                <span class="material-symbols-outlined" style="font-size:18px;">filter_list</span> Plus de Filtres
              </button>
              <button class="btn btn-sm rounded-lg d-inline-flex align-items-center gap-1 chip-ghost">
                <span class="material-symbols-outlined" style="font-size:18px;">calendar_today</span> Derniers 30 jours
              </button>
            </div>
          </div>

          <div class="rounded-xl overflow-hidden">
            <div class="table-responsive">
              <table class="table table-orders table-divider align-middle mb-0" style="background-color: #5A1A19">
                <thead>
                  <tr>
                    <th class="px-4 py-3">ID Commande</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Montant</th>
                    <th class="px-4 py-3">Statut</th>
                    <th class="px-4 py-3 text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                    <tr>
                      <td class="px-4 py-3 small fw-semibold text-white">#CMD-{{ $order->id }}</td>
                      <td class="px-4 py-3 small text-white-75">{{ $order->created_at }}</td>
                      <td class="px-4 py-3">
                        <div class="d-flex align-items-center gap-2">
                          <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:32px;height:32px;background:rgba(19,127,236,.2);color:var(--bb-primary);font-size:12px;">YM</div>
                          <span class="small fw-semibold">Yasmine Mansouri</span>
                        </div>
                      </td>
                      <td class="px-4 py-3 small fw-bold">{{ $order->total_price }} MAD</td>
                      <td class="px-4 py-3"><span class="pill pill-wait">{{ $order->status }}</span></td>
                      <td class="px-4 py-3 text-end">
                        <a href="/Admin/OrderItems" class="btn btn-sm rounded-lg"><span class="material-symbols-outlined" style="font-size:18px;">visibility</span></a>
                        <button class="btn btn-sm rounded-lg"><span class="material-symbols-outlined" style="font-size:18px;">edit</span></button>
                        <button class="btn btn-sm rounded-lg"><span class="material-symbols-outlined" style="font-size:18px;">delete</span></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="d-flex align-items-center justify-content-between p-3">
              <p class="mb-0 small text-white-50">Affichage de 1 à 5 sur 124 commandes</p>
              <div class="d-flex align-items-center gap-2">
                <button class="btn btn-sm rounded-lg px-2" disabled
                        style="width:40px;height:40px;background:rgba(255,255,255,.05);color:rgba(255,255,255,.4);border:1px solid rgba(255,255,255,.1);">
                  <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="btn btn-sm rounded-lg fw-bold px-0" style="width:40px;height:40px;background:var(--bb-primary);color:#fff;">1</button>
                <button class="btn btn-sm rounded-lg px-0" style="width:40px;height:40px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.7);">2</button>
                <button class="btn btn-sm rounded-lg px-0" style="width:40px;height:40px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.7);">3</button>
                <span class="text-white-50">...</span>
                <button class="btn btn-sm rounded-lg px-0" style="width:40px;height:40px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.7);">25</button>
                <button class="btn btn-sm rounded-lg px-2"
                        style="width:40px;height:40px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.7);">
                  <span class="material-symbols-outlined">chevron_right</span>
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>