@include("includes.Admin_header")
    <div class="container-fluid p-4 p-lg-5 d-flex flex-column gap-4 gap-lg-5" style="margin-left: 15em;">
      <div class="row g-3 g-lg-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded-xl p-4 bg-card-dark border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 bg-primary-10 rounded">
                <span class="material-symbols-outlined text-primary">payments</span>
              </div>
              <span class="pill pill-green">+12.5%</span>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Chiffre d'affaires</p>
              <p class="fs-4 fw-bold mb-0">15,400 MAD</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded-xl p-4 bg-card-dark border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 bg-primary-10 rounded">
                <span class="material-symbols-outlined text-primary">local_mall</span>
              </div>
              <span class="pill pill-green">+8.2%</span>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Total Commandes</p>
              <p class="fs-4 fw-bold mb-0">124</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded-xl p-4 bg-card-dark border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 bg-primary-10 rounded">
                <span class="material-symbols-outlined text-primary">inventory</span>
              </div>
              <span class="pill pill-red">-2.1%</span>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Produits en Stock</p>
              <p class="fs-4 fw-bold mb-0">450</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="d-flex flex-column gap-3 rounded-xl p-4 bg-card-dark border border-border-gold shadow">
            <div class="d-flex justify-content-between align-items-start">
              <div class="p-2 bg-primary-10 rounded">
                <span class="material-symbols-outlined text-primary">person_add</span>
              </div>
              <span class="pill pill-green">+15%</span>
            </div>
            <div>
              <p class="text-white-50 small mb-1 fw-semibold">Nouveaux Clients</p>
              <p class="fs-4 fw-bold mb-0">32</p>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-column gap-3 rounded-xl border border-border-gold bg-card-dark p-4 p-lg-5 shadow">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h3 class="fs-4 fw-bold mb-0">Activités Récentes</h3>
          <button class="btn btn-link p-0 text-primary fw-bold d-inline-flex align-items-center gap-1">
            Tout voir <span class="material-symbols-outlined" style="font-size:18px;">chevron_right</span>
          </button>
        </div>

        <div class="table-responsive">
          <table class="table table-custom align-middle" style="background-color: #5A1A19">
            <thead>
              <tr>
                <th class="pb-3 ps-2">Commande</th>
                <th class="pb-3">Client</th>
                <th class="pb-3">Article</th>
                <th class="pb-3">Date</th>
                <th class="pb-3">Montant</th>
                <th class="pb-3">Statut</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-3 ps-2 fw-bold small">#ORD-1234</td>
                <td class="py-3">
                  <div class="d-flex align-items-center gap-2">
                    <div class="d-flex align-items-center justify-content-center rounded-circle text-primary fw-bold" style="width:32px;height:32px;background:rgba(238,189,43,.2);font-size:12px;">YM</div>
                    <span class="small fw-semibold">Youssef Mansouri</span>
                  </div>
                </td>
                <td class="py-3 small text-white-75">Collier Fibule Argent</td>
                <td class="py-3 small text-white-50">Aujourd'hui, 14:20</td>
                <td class="py-3 fw-bold small">1,250 MAD</td>
                <td class="py-3"><span class="pill pill-green">Livré</span></td>
              </tr>

              <tr>
                <td class="py-3 ps-2 fw-bold small">#ORD-1235</td>
                <td class="py-3">
                  <div class="d-flex align-items-center gap-2">
                    <div class="d-flex align-items-center justify-content-center rounded-circle text-primary fw-bold" style="width:32px;height:32px;background:rgba(238,189,43,.2);font-size:12px;">AB</div>
                    <span class="small fw-semibold">Amine Benali</span>
                  </div>
                </td>
                <td class="py-3 small text-white-75">Bracelet Amazigh Or</td>
                <td class="py-3 small text-white-50">Aujourd'hui, 11:45</td>
                <td class="py-3 fw-bold small">3,400 MAD</td>
                <td class="py-3"><span class="pill pill-amber">En attente</span></td>
              </tr>

              <tr>
                <td class="py-3 ps-2 fw-bold small">#ORD-1236</td>
                <td class="py-3">
                  <div class="d-flex align-items-center gap-2">
                    <div class="d-flex align-items-center justify-content-center rounded-circle text-primary fw-bold" style="width:32px;height:32px;background:rgba(238,189,43,.2);font-size:12px;">SK</div>
                    <span class="small fw-semibold">Sara Karimi</span>
                  </div>
                </td>
                <td class="py-3 small text-white-75">Boucles d'oreilles Email</td>
                <td class="py-3 small text-white-50">Hier, 18:10</td>
                <td class="py-3 fw-bold small">850 MAD</td>
                <td class="py-3"><span class="pill pill-blue">Expédié</span></td>
              </tr>

              <tr>
                <td class="py-3 ps-2 fw-bold small">#ORD-1237</td>
                <td class="py-3">
                  <div class="d-flex align-items-center gap-2">
                    <div class="d-flex align-items-center justify-content-center rounded-circle text-primary fw-bold" style="width:32px;height:32px;background:rgba(238,189,43,.2);font-size:12px;">RM</div>
                    <span class="small fw-semibold">Rachid Mouline</span>
                  </div>
                </td>
                <td class="py-3 small text-white-75">Bague Touareg XL</td>
                <td class="py-3 small text-white-50">Hier, 15:30</td>
                <td class="py-3 fw-bold small">1,100 MAD</td>
                <td class="py-3"><span class="pill pill-red">Annulé</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>