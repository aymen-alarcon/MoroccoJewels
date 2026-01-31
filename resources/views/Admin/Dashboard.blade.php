 <?php require_once "../resources/views/includes/Admin_header.php";?>   
    <div class="container-fluid p-4 p-lg-5 d-flex flex-column gap-4 gap-lg-5">
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

      <div class="row g-4">
        <div class="col-12 col-lg-8">
          <div class="d-flex flex-column gap-3 rounded-xl border border-border-gold bg-card-dark p-4 p-lg-5 shadow">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h3 class="fs-5 fw-bold mb-0">Performance des Ventes</h3>
                <p class="text-white-50 small fw-semibold mb-0">Evolution des revenus (7 derniers jours)</p>
              </div>
              <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded border border-border-gold bg-dark">
                <span class="material-symbols-outlined text-primary" style="font-size:18px;">calendar_today</span>
                <span class="small fw-bold">7 derniers jours</span>
              </div>
            </div>

            <div class="mt-2">
              <p class="fs-3 fw-bold mb-1">15,400 MAD</p>
              <div class="d-flex align-items-center gap-2">
                <span class="text-success fw-bold d-inline-flex align-items-center">
                  <span class="material-symbols-outlined" style="font-size:16px;">trending_up</span>
                  5.4%
                </span>
                <span class="text-white-50 small fw-semibold">par rapport à la semaine dernière</span>
              </div>
            </div>

            <div class="d-flex flex-column gap-3 py-2">
              <svg fill="none" height="180" preserveAspectRatio="none" viewBox="-3 0 478 150" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z" fill="url(#paint0_linear)"></path>
                <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25" stroke="#eebd2b" stroke-linecap="round" stroke-width="4"></path>
                <defs>
                  <linearGradient id="paint0_linear" x1="236" x2="236" y1="1" y2="149" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#eebd2b" stop-opacity="0.3"></stop>
                    <stop offset="1" stop-color="#eebd2b" stop-opacity="0"></stop>
                  </linearGradient>
                </defs>
              </svg>

              <div class="d-flex justify-content-between px-2">
                <p class="text-white-50 text-uppercase small fw-bold mb-0">Lun</p>
                <p class="text-white-50 text-uppercase small fw-bold mb-0">Mar</p>
                <p class="text-white-50 text-uppercase small fw-bold mb-0">Mer</p>
                <p class="text-white-50 text-uppercase small fw-bold mb-0">Jeu</p>
                <p class="text-white-50 text-uppercase small fw-bold mb-0">Ven</p>
                <p class="text-white-50 text-uppercase small fw-bold mb-0">Sam</p>
                <p class="text-white-50 text-uppercase small fw-bold mb-0">Dim</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="d-flex flex-column gap-3 rounded-xl border border-border-gold bg-card-dark p-4 p-lg-5 shadow">
            <h3 class="fs-5 fw-bold mb-1">Répartition Stock</h3>

            <div class="d-flex flex-column justify-content-center align-items-center py-4">
              <div class="position-relative" style="width:160px;height:160px;border:16px solid var(--bb-primary);border-left-color:transparent;border-bottom-color:transparent;border-radius:50%;transform:rotate(45deg); display:flex;align-items:center;justify-content:center;">
                <div class="text-center" style="transform:rotate(-45deg);">
                  <p class="fs-2 fw-bold mb-0">450</p>
                  <p class="text-white-50 text-uppercase fw-bold" style="font-size:10px;">Articles</p>
                </div>
              </div>

              <div class="mt-4 w-100 d-flex flex-column gap-2">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <span class="d-inline-block" style="width:12px;height:12px;border-radius:50%;background:var(--bb-primary);"></span>
                    <p class="mb-0 small fw-semibold">Colliers</p>
                  </div>
                  <p class="mb-0 small fw-bold">45%</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <span class="d-inline-block" style="width:12px;height:12px;border-radius:50%;background:color-mix(in srgb, var(--bb-primary) 60%, transparent);"></span>
                    <p class="mb-0 small fw-semibold">Bracelets</p>
                  </div>
                  <p class="mb-0 small fw-bold">30%</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <span class="d-inline-block" style="width:12px;height:12px;border-radius:50%;background:color-mix(in srgb, var(--bb-primary) 30%, transparent);"></span>
                    <p class="mb-0 small fw-semibold">Bagues</p>
                  </div>
                  <p class="mb-0 small fw-bold">25%</p>
                </div>
              </div>
            </div>

            <button class="w-100 py-2 rounded-xl border text-primary fw-bold border-1" style="border-color: color-mix(in srgb, var(--bb-primary) 30%, transparent);" type="button">
              Voir le détail du stock
            </button>
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
          <table class="table table-custom align-middle">
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

        <div class="row g-4">
          <div class="col-12 col-md-6">
            <div class="d-flex align-items-center gap-3 p-4 rounded-xl" style="background:#5a1514;border-left:4px solid #ef4444;">
              <div class="p-2 rounded-circle" style="background:rgba(239,68,68,.2);">
                <span class="material-symbols-outlined text-danger" style="font-size:28px;">warning</span>
              </div>
              <div>
                <h4 class="fs-5 fw-bold mb-1">Alerte de Stock</h4>
                <p class="text-white-50 small mb-2">3 modèles de colliers sont presque en rupture de stock.</p>
                <button class="btn btn-link p-0 text-danger small fw-bold">Gérer l'inventaire maintenant</button>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="d-flex align-items-center gap-3 p-4 rounded-xl" style="background:#5a1514;border-left:4px solid var(--bb-primary);">
              <div class="p-2 rounded-circle" style="background:color-mix(in srgb, var(--bb-primary) 20%, transparent);">
                <span class="material-symbols-outlined text-primary" style="font-size:28px;">celebration</span>
              </div>
              <div>
                <h4 class="fs-5 fw-bold mb-1">Performance de la Semaine</h4>
                <p class="text-white-50 small mb-2">Nouveau record de ventes pour les bijoux émaillés !</p>
                <button class="btn btn-link p-0 text-primary small fw-bold">Consulter le rapport marketing</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require_once "../resources/views/includes/footer.php";?>