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
                  <th class="px-3 px-md-4 py-3">Détails de la pièce</th>
                  <th class="px-3 px-md-4 py-3 text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="transition">
                  <td class="px-3 px-md-4 py-4">
                    <div class="d-flex align-items-center gap-3">
                      <div class="thumb-80"
                           style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuCy7jv1wcb837qxJerYEZE5V5Zgu7At8xpyS6aWUj5kC_HTp36TTLQ9n2WUFcyMVog2rGZWL5GDUF2DjbEYy3OGNxUVsMJqs4zrT6kavls4FjbFFg7mUlr5GEjzDKM6yNbhYqp202cMs2EJAns8P6CxdUq_Ha-hxSxCMTuisfEhFVS7gZBw3N3kK8DWXxlvPB3CB7tWBme3GM8i8dqcHH-U-rwMLIeCC_4GXkshUCBtVcSFIwEWNINSWSOYjxddUbxe1GDb-y9UVxc');"></div>
                      <div>
                        <p class="mb-0 fw-bold">Bracelet Tiznit Ciselé</p>
                        <p class="mb-0 small" style="color:color-mix(in srgb, var(--bb-primary) 70%, white);">Argent Artisanal</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 px-md-4 py-4">
                    <div class="small text-white-75">
                      <div><span class="text-white-50">Réf:</span> BB-2024-114</div>
                      <div><span class="text-white-50">Origine:</span> Tiznit</div>
                    </div>
                  </td>
                  <td class="px-3 px-md-4 py-4 text-end">
                    <button class="btn btn-sm d-inline-flex align-items-center gap-1">
                      <i class="bi bi-cart-dash"></i><span class="small d-none d-md-inline fw-bold text-uppercase" style="letter-spacing:.08em;">Retirer</span>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="surface-ghost d-flex align-items-center justify-content-between px-3 px-md-4 py-3">
            <a href="#" class="text-decoration-none fw-bold small d-inline-flex align-items-center gap-1"
               style="color:var(--bb-primary);text-transform:uppercase;letter-spacing:.14em;">
              <span class="material-symbols-outlined">arrow_back</span> Continuer mes découvertes
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="position-sticky" style="top:96px;">
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
          <div class="ghost-card rounded-xl p-4">
            <div class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-geo-alt"></i>
              <span class="small fw-bold text-uppercase" style="letter-spacing:.18em;">Notre Boutique</span>
            </div>
            <div class="cover-16x9 mb-2"
                 style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAlgKyP-sTKwTrcTS5a7lcxCnK_jMohGM1lN4Z0oPqzV8ivYGJyUtx2YWW82iHM0ixQFAnM33liJL_N_4u7EgaBEQeNAfSwsrfr_G8ycodYztIq7znNl8yw4YxZZTVooYUPujOp5iMYS9NCNCeP2zAsEROXrreOkaDE1o8uwciKlNSfDvNbpXu4yn5sMrQWdmb01KuM1y60Hpq06B2o0yT4db1o0Xp4XVePDrN_T_kjRWo4_AGthhpE4Iog3-GUvLzUokZ5n9gS9AY');"></div>
            <p class="small text-white-75 mb-0">12 Rue des Bijoutiers, Médina de Marrakech, Maroc.</p>
          </div>
        </div>
      </div>
    </div>
  </main>
@include("includes.footer")