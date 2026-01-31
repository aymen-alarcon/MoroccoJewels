<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Votre Panier — Bijoux Berbères</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

  <style>
    :root{
      --bb-primary:#fac638;
      --bb-bg-dark:#420F0E;
      --bb-text:#ffffff;
      --bb-border:rgba(255,255,255,.10);
    }
    body{ font-family:'Manrope',sans-serif; background:var(--bb-bg-dark); color:#fff; min-height:100vh; }
    .material-symbols-outlined{ font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24; }
    .rounded-xl{ border-radius:.75rem!important; }

    .moroccan-overlay{
      position:fixed; inset:0; pointer-events:none;
      background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuCQGiwA7fiASuyoEsUTbUPsaABVlLkRLMx-g79ShCQc00-QJwCOboetP1YJuPtk4dqY9Eok_mLMVV6KbbFUiMO2nYmUKwvsD7z1QiNcpm8S1Dbrfy-5wBI9RGqgyGjBvrnIZabE6ter8_kOFm0ZRNIvAA25A3o-KYZt6ZRYWbBwOukhcEVdexOI1MdlQJUSA7xEVOgam2OhRyno9EuS8UQK-gi2zFi27VpsV1Rk96-E50yKuFVK1G7OPIbgMTDq2fXxk7pC359eEc4');
      opacity:.05; background-size:cover;
    }

    .topbar{ background:rgba(66,15,14,.80); border-bottom:1px solid var(--bb-border); backdrop-filter:blur(10px); }

    .surface{ background:rgba(255,255,255,.06); border:1px solid var(--bb-border); backdrop-filter:blur(6px); }
    .surface-ghost{ background:rgba(0,0,0,.20); border-top:1px solid var(--bb-border); }

    .table-cart thead th{
      background:rgba(0,0,0,.2);
      color:rgba(255,255,255,.4);
      text-transform:uppercase; letter-spacing:.12em; font-weight:800; font-size:.75rem;
      border-bottom:1px solid var(--bb-border);
    }
    .table-cart tbody tr:hover{ background:rgba(255,255,255,.06); }
    .table-cart td, .table-cart th{ border:none; }
    .table-cart tbody tr+tr{ border-top:1px solid var(--bb-border); }

    /* Cards on the right */
    .info-card{ border:1px solid rgba(250,198,56,.20); background:rgba(250,198,56,.05); }
    .ghost-card{ border:1px solid var(--bb-border); background:rgba(255,255,255,.06); }

    /* Utilities */
    .text-faint{ color:rgba(255,255,255,.6)!important; }
    .btn-primary{
      --bs-btn-bg: var(--bb-primary);
      --bs-btn-border-color: var(--bb-primary);
      --bs-btn-hover-bg: color-mix(in srgb, var(--bb-primary) 90%, black);
      --bs-btn-hover-border-color: color-mix(in srgb, var(--bb-primary) 90%, black);
      --bs-btn-color:#2b1600;
      box-shadow:0 6px 18px rgba(250,198,56,.18);
    }

    .thumb-80{ width:80px; height:80px; border-radius:.6rem; border:1px solid rgba(255,255,255,.12); background-position:center; background-size:cover; }

    .cover-16x9{ position:relative; width:100%; padding-top:56.25%; border:1px solid var(--bb-border); border-radius:.75rem; overflow:hidden;
      filter:grayscale(90%) contrast(1.25);
      background-position:center; background-size:cover;
    }
  </style>
</head>
<body class="position-relative">
  <div class="moroccan-overlay"></div>
  <header class="topbar sticky-top z-3">
    <div class="container-xxl px-3 px-md-5 py-3 d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        <div class="text-warning"><span class="material-symbols-outlined fs-2">diamond</span></div>
        <h2 class="h6 mb-0 fw-bold text-uppercase">Bijoux Berbères</h2>
      </div>

      <nav class="d-none d-md-flex align-items-center gap-4">
        <a href="#" class="small text-white-80 text-decoration-none">Collection</a>
        <a href="#" class="small text-white-80 text-decoration-none">Notre Histoire</a>
        <a href="#" class="small text-white-80 text-decoration-none">Boutique</a>
        <a href="#" class="small text-white-80 text-decoration-none">Contact</a>
      </nav>

      <div class="d-none d-lg-flex align-items-stretch rounded-3" style="height:40px;background:rgba(255,255,255,.08);">
        <div class="d-inline-flex align-items-center justify-content-center ps-3" style="color:color-mix(in srgb, var(--bb-primary) 70%, white);">
          <span class="material-symbols-outlined">search</span>
        </div>
        <input class="form-control border-0 bg-transparent text-white ps-2" placeholder="Rechercher une pièce..." />
      </div>

      <div class="d-flex gap-2 ms-3">
        <button class="btn btn-sm rounded-3" style="width:40px;height:40px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.06);color:#fff;">
          <span class="material-symbols-outlined">shopping_bag</span>
        </button>
        <button class="btn btn-sm rounded-3" style="width:40px;height:40px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.06);color:#fff;">
          <span class="material-symbols-outlined">person</span>
        </button>
      </div>
    </div>
  </header>

  <main class="container-xxl px-3 px-md-5 py-5">
    <div class="row g-4" style="max-width:1200px;margin-inline:auto;">
      <div class="col-12 col-lg-8 d-flex flex-column gap-3">
        <div class="mb-1">
          <h1 class="display-6 fw-black mb-1" style="color:var(--bb-primary);">Votre Sélection</h1>
          <p class="lead text-faint mb-0">Une curation de pièces uniques du patrimoine berbère marocain.</p>
        </div>

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
                           style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuDIwn-f73PmA8L6SrUm5k8jptnkrz5Dmr0OG3DdwLZlKwMe8UqSeOvoC59ohvjXTwzyHU2J2Tj5mh8V0B7TH6_6KvV8pQhfOVU-9TgAKxkmZsdzUOdDmRG9gc1wRPD8MmnA3l-OMdtXmyrZxfssh00sjRF5Hry7NH7NrshNFiXl_UQrjnJ9XLfV53PpU26fxCxj9yEDxOrtMWAmCdXVOcaF6Dtm-VD-AxtREvU6FmxLiJoT0qacNMBzLpMXK22XR0VS8tGsoNcJ8mY');"></div>
                      <div>
                        <p class="mb-0 fw-bold">Collier Fibule d'Ait Ouaouzguite</p>
                        <p class="mb-0 small" style="color:color-mix(in srgb, var(--bb-primary) 70%, white);">Argent Massif & Émail</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 px-md-4 py-4">
                    <div class="small text-white-75">
                      <div><span class="text-white-50">Réf:</span> BB-2024-081</div>
                      <div><span class="text-white-50">Origine:</span> Anti‑Atlas</div>
                    </div>
                  </td>
                  <td class="px-3 px-md-4 py-4 text-end">
                    <button class="btn btn-sm text-white-50 d-inline-flex align-items-center gap-1">
                      <span class="material-symbols-outlined">delete</span><span class="small d-none d-md-inline fw-bold text-uppercase" style="letter-spacing:.08em;">Supprimer</span>
                    </button>
                  </td>
                </tr>

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
                    <button class="btn btn-sm text-white-50 d-inline-flex align-items-center gap-1">
                      <span class="material-symbols-outlined">delete</span><span class="small d-none d-md-inline fw-bold text-uppercase" style="letter-spacing:.08em;">Supprimer</span>
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
            <h2 class="h5 fw-bold mb-1" style="color:var(--bb-primary);">Intéressé par ces pièces ?</h2>
            <p class="small text-white-75 mb-3">
              Ce site est une vitrine exclusive de notre collection privée. Les bijoux berbères authentiques sont des pièces de patrimoine uniques.
            </p>
            <div class="d-flex flex-column gap-2">
              <button class="btn btn-primary fw-bold rounded-lg d-inline-flex align-items-center justify-content-center gap-2">
                <span class="material-symbols-outlined">calendar_month</span> Prendre rendez‑vous
              </button>
              <button class="btn btn-outline-light fw-bold rounded-lg d-inline-flex align-items-center justify-content-center gap-2"
                      style="border-color:rgba(255,255,255,.2);">
                <span class="material-symbols-outlined">mail</span> Demander des infos
              </button>
            </div>
            <p class="mt-2 mb-0 text-center" style="font-size:10px;letter-spacing:.22em;color:rgba(255,255,255,.6);text-transform:uppercase;">
              Réponse sous 24h par nos experts
            </p>
          </div>
          <div class="ghost-card rounded-xl p-4">
            <div class="d-flex align-items-center gap-2 mb-2">
              <span class="material-symbols-outlined" style="color:var(--bb-primary);">location_on</span>
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
  <footer class="mt-5 pt-5 border-top" style="border-color:var(--bb-border)!important;background:rgba(0,0,0,.4);">
    <div class="container-xxl px-3 px-md-5">
      <div class="row g-4" style="max-width:1200px;margin-inline:auto;">
        <div class="col-12 col-md-6">
          <div class="d-flex align-items-center gap-2 text-warning mb-2">
            <span class="material-symbols-outlined">diamond</span>
            <h2 class="h6 text-uppercase mb-0">Bijoux Berbères</h2>
          </div>
          <p class="small text-white-50 mb-3" style="max-width:460px;">
            Gardiens du savoir‑faire ancestral des tribus du Sud Marocain. Chaque pièce raconte une histoire, chaque motif une protection.
          </p>
          <div class="d-flex gap-2">
            <a href="#" class="btn btn-sm rounded-circle" style="width:40px;height:40px;border:1px solid var(--bb-border);color:rgba(255,255,255,.6);">
              <span class="material-symbols-outlined">public</span>
            </a>
            <a href="#" class="btn btn-sm rounded-circle" style="width:40px;height:40px;border:1px solid var(--bb-border);color:rgba(255,255,255,.6);">
              <span class="material-symbols-outlined">camera</span>
            </a>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <h3 class="h6 fw-bold mb-3">Navigation</h3>
          <ul class="list-unstyled small d-grid gap-2 mb-0 text-white-50">
            <li><a class="text-decoration-none text-white-50" href="#">Collection Royale</a></li>
            <li><a class="text-decoration-none text-white-50" href="#">Le Travail de l'Argent</a></li>
            <li><a class="text-decoration-none text-white-50" href="#">Authenticité</a></li>
            <li><a class="text-decoration-none text-white-50" href="#">Mentions Légales</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-3">
          <h3 class="h6 fw-bold mb-3">Contact</h3>
          <ul class="list-unstyled small d-grid gap-2 mb-0 text-white-50">
            <li class="d-flex align-items-center gap-1"><span class="material-symbols-outlined" style="color:var(--bb-primary);font-size:18px;">call</span> +212 524‑XXX‑XXX</li>
            <li class="d-flex align-items-center gap-1"><span class="material-symbols-outlined" style="color:var(--bb-primary);font-size:18px;">mail</span> contact@bijouxberberes.ma</li>
            <li class="d-flex align-items-start gap-1"><span class="material-symbols-outlined" style="color:var(--bb-primary);font-size:18px;">pin_drop</span> Marrakech, Médina</li>
          </ul>
        </div>
      </div>

      <div class="text-center small text-white-50 mt-4 pt-3" style="border-top:1px solid var(--bb-border);letter-spacing:.18em;text-transform:uppercase;">
        © 2024 Bijoux Berbères — Patrimoine Vivant du Maroc
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>