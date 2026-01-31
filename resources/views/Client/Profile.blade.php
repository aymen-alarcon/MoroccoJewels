<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Mon Profil Client | Bijoux Berbères</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
  <style>
    :root{
      --bb-primary:#fac638;
      --bb-bg-dark:#420F0E;
      --bb-bg-light:#f8f8f5;
      --bb-text:#ffffff;
      --bb-border:rgba(255,255,255,.10);
    }
    body{ font-family:'Plus Jakarta Sans',sans-serif; background:var(--bb-bg-dark); color:#fff; min-height:100vh; }
    .material-symbols-outlined{ font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24; }
    .rounded-xl{ border-radius:.75rem!important; }

    .moroccan-pattern{ position:absolute; inset:0; pointer-events:none;
      background-image: radial-gradient(var(--bb-primary) .5px, transparent .5px);
      background-size:24px 24px; opacity:.10;
    }

    .topbar{ background:rgba(66,15,14,.95); border-bottom:1px solid var(--bb-border); backdrop-filter:blur(10px); }

    .surface{ background:rgba(255,255,255,.06); border:1px solid var(--bb-border); }
    .surface-primary{ background:rgba(250,198,56,.10); border:1px solid rgba(250,198,56,.20); }

    .searchbox{ background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.12); color:#fff; height:40px; padding-left:36px; }
    .searchbox::placeholder{ color:rgba(255,255,255,.45); }
    .searchbox:focus{ border-color:color-mix(in srgb, var(--bb-primary) 50%, white); box-shadow:0 0 0 .2rem rgba(250,198,56,.18); }

    .btn-primary{
      --bs-btn-bg: var(--bb-primary); --bs-btn-border-color: var(--bb-primary);
      --bs-btn-hover-bg: color-mix(in srgb, var(--bb-primary) 90%, black);
      --bs-btn-hover-border-color: color-mix(in srgb, var(--bb-primary) 90%, black);
      --bs-btn-color:#2b1600; box-shadow:0 6px 18px rgba(250,198,56,.18);
    }
    .btn-ghost{ background:rgba(255,255,255,.10); border:1px solid rgba(255,255,255,.12); color:#fff; }
    .btn-ghost:hover{ background:rgba(255,255,255,.18); }

    .tabs-line a{ color:rgba(255,255,255,.5); border-bottom:2px solid transparent; padding-bottom:12px; text-decoration:none; }
    .tabs-line a:hover{ color:#fff; }
    .tabs-line .active{ color:var(--bb-primary); border-color:var(--bb-primary); }

    .table-inquiries thead th{
      background:rgba(255,255,255,.06);
      color:rgba(255,255,255,.4);
      text-transform:uppercase; letter-spacing:.15em; font-size:.7rem; font-weight:800;
    }
    .table-inquiries tbody tr+tr{ border-top:1px solid rgba(255,255,255,.06); }
    .table-inquiries tbody tr:hover{ background:rgba(255,255,255,.06); }

    .text-faint{ color:rgba(255,255,255,.6)!important; }
    .avatar-96{ width:96px; height:96px; border-radius:999px; background-position:center; background-size:cover; border:2px solid var(--bb-primary); }
    .favorite-card .thumb{ width:33.333%; aspect-ratio:1/1; background-position:center; background-size:cover; }
  </style>
</head>
<body class="d-flex flex-column">

  <header class="topbar sticky-top z-3">
    <div class="container-xxl px-3 px-lg-5 py-3" style="max-width:1200px;">
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-4 gap-lg-5">
          <div class="d-flex align-items-center gap-2">
            <span class="material-symbols-outlined text-warning" style="font-size:32px;">diamond</span>
            <h1 class="h5 fw-extrabold text-uppercase mb-0">Bijoux Berbères</h1>
          </div>

          <nav class="d-none d-md-flex align-items-center gap-3">
            <a href="#" class="small fw-medium text-white text-decoration-none">Collections</a>
            <a href="#" class="small fw-medium text-white text-decoration-none">Héritage</a>
            <a href="#" class="small fw-medium text-white text-decoration-none">Notre Histoire</a>
          </nav>
        </div>

        <div class="d-flex align-items-center gap-3">
          <div class="position-relative d-none d-sm-block" style="width:190px;">
            <span class="material-symbols-outlined position-absolute" style="left:10px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,.4);font-size:18px;">search</span>
            <input class="form-control searchbox" type="text" placeholder="Rechercher..."/>
          </div>
          <button class="btn btn-link p-0 text-decoration-none text-white-50 hover text-warning">
            <span class="material-symbols-outlined">favorite</span>
          </button>
          <button class="btn btn-sm rounded-circle" style="border:1px solid rgba(250,198,56,.5);padding:6px;">
            <span class="material-symbols-outlined" style="color:var(--bb-primary);">person</span>
          </button>
        </div>
      </div>
    </div>
  </header>

  <main class="position-relative">
    <div class="moroccan-pattern"></div>

    <div class="container-xxl px-3 px-lg-5 py-5" style="max-width:1200px; position:relative; z-index:1;">
      <div class="surface rounded-xl p-4 p-md-5 mb-4">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3 gap-md-4">
            <div class="position-relative">
              <div class="avatar-96"
                   style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAGzy1EiC6j0Wu3hcjrCC2MHMHbFgETsiW-oKeQKD0zAXxrBAuPoGqcc4Usf2cZHnyIdyD9sn_CXsTAoLd96CcoyowfCYHQE7mYF9-QshTWY9SxEWW0zwe4ty_4jIFL14M_2WhNtRMiq_OYZEqKcN7pN2FIpi_SPD2LwvTI7yIVmKIiKci-7U5domyK4I5Fc5_RCNt_c7L1lAIVOvTR0sUd5skkwJRhiE3zYcxWHYQ7xIlwKx301-zjYQQFqBEyA2UZA026YXNiKNs');"></div>
              <div class="position-absolute bottom-0 end-0 translate-middle-y rounded-circle border"
                   style="background:var(--bb-primary); color:#2b1600; width:22px; height:22px; display:grid; place-items:center; border-color:var(--bb-bg-dark);">
                <span class="material-symbols-outlined" style="font-size:12px;">verified</span>
              </div>
            </div>
            <div>
              <h2 class="h4 fw-bold mb-1">Bienvenue, Sarah Bensouda</h2>
              <div class="d-flex flex-column gap-1">
                <p class="small text-white-50 mb-0 d-flex align-items-center gap-2">
                  <span class="material-symbols-outlined" style="font-size:16px;">calendar_today</span> Membre depuis Janvier 2024
                </p>
                <p class="small text-white-50 mb-0 d-flex align-items-center gap-2">
                  <span class="material-symbols-outlined" style="font-size:16px;">location_on</span> Casablanca, Maroc
                </p>
              </div>
            </div>
          </div>

          <button class="btn btn-ghost fw-bold rounded-lg d-inline-flex align-items-center gap-1">
            <span class="material-symbols-outlined" style="font-size:18px;">edit</span> Modifier le profil
          </button>
        </div>
      </div>

      <div class="border-bottom mb-4" style="border-color:var(--bb-border)!important;">
        <div class="d-flex tabs-line gap-4 overflow-auto">
          <a href="#" class="active d-flex flex-column align-items-center gap-1 text-decoration-none">
            <span class="material-symbols-outlined">person</span>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Informations</span>
          </a>
          <a href="#" class="d-flex flex-column align-items-center gap-1 text-decoration-none">
            <span class="material-symbols-outlined">favorite</span>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Mes Favoris</span>
          </a>
          <a href="#" class="d-flex flex-column align-items-center gap-1 text-decoration-none">
            <span class="material-symbols-outlined">chat_bubble</span>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Mes Demandes</span>
          </a>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-12 col-lg-4 d-flex flex-column gap-3">
          <div class="surface rounded-xl p-4">
            <h3 class="h6 fw-bold mb-3 d-flex align-items-center gap-2" style="color:var(--bb-primary);">
              <span class="material-symbols-outlined">badge</span> Détails personnels
            </h3>
            <div class="d-flex flex-column gap-3">
              <div class="pb-3" style="border-bottom:1px solid rgba(255,255,255,.06);">
                <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.18em;color:rgba(255,255,255,.4);">Nom Complet</div>
                <div class="small fw-semibold">Sarah Bensouda</div>
              </div>
              <div class="pb-3" style="border-bottom:1px solid rgba(255,255,255,.06);">
                <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.18em;color:rgba(255,255,255,.4);">Adresse E‑mail</div>
                <div class="small fw-semibold">sarah.bensouda@email.com</div>
              </div>
              <div>
                <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.18em;color:rgba(255,255,255,.4);">Téléphone</div>
                <div class="small fw-semibold">+212 6 12 34 56 78</div>
              </div>
            </div>
          </div>

          <div class="surface-primary rounded-xl p-4 position-relative overflow-hidden">
            <div class="position-relative" style="z-index:1;">
              <h4 class="h6 fw-bold mb-1" style="color:var(--bb-primary);">Exclusivité Artisanale</h4>
              <p class="small text-white-75 mb-2">Soyez avertie dès que nos nouveaux bijoux de l'Atlas arrivent en collection.</p>
              <button class="btn btn-link p-0 text-decoration-underline fw-bold" style="color:var(--bb-primary);font-size:12px;">
                S'abonner aux alertes
              </button>
            </div>
            <span class="material-symbols-outlined position-absolute" style="right:-16px;bottom:-10px;font-size:110px;color:rgba(250,198,56,.08);transform:rotate(12deg);">star</span>
          </div>
        </div>

        <div class="col-12 col-lg-8 d-flex flex-column gap-4">
          <section>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3 class="h5 fw-bold mb-0 d-flex align-items-center gap-2">
                Mes Favoris <span class="small fw-normal text-white-50">(3 articles)</span>
              </h3>
              <a href="#" class="small fw-bold text-decoration-underline" style="color:var(--bb-primary);">Voir tout</a>
            </div>

            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <div class="favorite-card surface rounded-3 d-flex overflow-hidden">
                  <div class="thumb" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjpGT-AidvowMnbF4UJdAXjxBKQPpSTXzLpO6ae3pk5PQA91B3grUaHPMtKr96jw9govAK9OT4xKYC9xm1ApNDLwv80d1Z7YBTcEM5jPSZhExK9r5I91OUTLI1K5R2t3dlFMQKNg1Qn6fvD4BNNuDNSKZZ16iPCWGN8KopHWSURlnouusPYs2HrNSIm04GFoKf8OaVXddIYEFzZJHgYgVCyBKxy3M0dH5gmg-X68BBKYsA_OHc1qe3nA6rc44-JzqjS4xkqSZsZV0');"></div>
                  <div class="p-3 d-flex flex-column justify-content-between">
                    <div>
                      <p class="text-uppercase small fw-bold mb-1" style="color:var(--bb-primary);letter-spacing:.12em;">Argent & Émail</p>
                      <h4 class="small fw-bold mb-0">Collier Fibule Tiznit Classique</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                      <button class="btn btn-link p-0 small fw-bold text-decoration-underline">Détails</button>
                      <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined" style="font-size:18px;">delete</span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="favorite-card surface rounded-3 d-flex overflow-hidden">
                  <div class="thumb" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuBMFXISyBn3JP6CY3833sW-KWhVSNp2NsOBClTRNrbSGBFdzSQDo3f6-OPIpE6Ue5SycdVN8VFFzX5RI76wlYNYHYVdgtX-T9wpJNWXOOjDhtAQiY_6_Y-NrnlNMyI9WaqRnGl7GyoofoheWxHs9OCmzDMtwxhO0yC48_TKwSdjIb-mahwCOb9K7CKCTMpO5Rl3w1CjsCgMKfgAJ7SoQNQnyxyOJj3ZWnIRd-iCFFnUOs-0-u9iN4zngyvBITiaLpqO3Hpi1K3yJUY');"></div>
                  <div class="p-3 d-flex flex-column justify-content-between">
                    <div>
                      <p class="text-uppercase small fw-bold mb-1" style="color:var(--bb-primary);letter-spacing:.12em;">Ambre Naturelle</p>
                      <h4 class="small fw-bold mb-0">Bracelet ‘Ziri’ en Argent Ciselé</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                      <button class="btn btn-link p-0 small fw-bold text-decoration-underline">Détails</button>
                      <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined" style="font-size:18px;">delete</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section>
            <h3 class="h5 fw-bold mb-3">Mes Demandes d'Information</h3>
            <div class="surface rounded-xl overflow-hidden">
              <div class="table-responsive">
                <table class="table table-inquiries align-middle mb-0 text-white">
                  <thead>
                    <tr>
                      <th class="px-3 px-md-4 py-3">Article</th>
                      <th class="px-3 px-md-4 py-3">Date</th>
                      <th class="px-3 px-md-4 py-3">Statut</th>
                      <th class="px-3 px-md-4 py-3 text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="px-3 px-md-4 py-3 fw-bold">Paire de Boucles ‘Khmisa’</td>
                      <td class="px-3 px-md-4 py-3 text-white-50">12 Mars 2024</td>
                      <td class="px-3 px-md-4 py-3">
                        <span class="badge rounded-2 fw-bold" style="font-size:.65rem;background:rgba(34,197,94,.10);color:#34d399;border:1px solid rgba(34,197,94,.25);">RÉPONDU</span>
                      </td>
                      <td class="px-3 px-md-4 py-3 text-end">
                        <button class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-3 px-md-4 py-3 fw-bold">Parure Royale Souss</td>
                      <td class="px-3 px-md-4 py-3 text-white-50">05 Janvier 2024</td>
                      <td class="px-3 px-md-4 py-3">
                        <span class="badge rounded-2 fw-bold" style="font-size:.65rem;background:rgba(250,198,56,.10);color:var(--bb-primary);border:1px solid rgba(250,198,56,.25);">EN ATTENTE</span>
                      </td>
                      <td class="px-3 px-md-4 py-3 text-end">
                        <button class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </main>

  <footer class="mt-auto" style="background:rgba(0,0,0,.4);border-top:1px solid var(--bb-border);">
    <div class="container-xxl px-3 px-lg-5 py-5" style="max-width:1200px; position:relative; z-index:1;">
      <div class="row g-4">
        <div class="col-12 col-md-3">
          <div class="d-flex align-items-center gap-2 mb-3">
            <span class="material-symbols-outlined" style="color:var(--bb-primary);">diamond</span>
            <h2 class="h6 text-uppercase mb-0 fw-bold">Bijoux Berbères</h2>
          </div>
          <p class="small text-white-50">
            L'excellence de l'artisanat berbère transmise de génération en génération.
            Des pièces uniques chargées d'histoire.
          </p>
          <div class="d-flex gap-2">
            <a href="#" class="btn btn-sm rounded-circle d-inline-flex align-items-center justify-content-center"
               style="width:32px;height:32px;border:1px solid rgba(255,255,255,.2);color:rgba(255,255,255,.6);">
              <span class="material-symbols-outlined" style="font-size:18px;">share</span>
            </a>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <h4 class="small fw-bold text-uppercase mb-3" style="letter-spacing:.18em;">Explorez</h4>
          <ul class="list-unstyled small text-white-50 d-grid gap-2 mb-0">
            <li><a href="#" class="text-decoration-none text-white-50">Notre Boutique</a></li>
            <li><a href="#" class="text-decoration-none text-white-50">Pièces d'Exception</a></li>
            <li><a href="#" class="text-decoration-none text-white-50">Nos Ateliers</a></li>
            <li><a href="#" class="text-decoration-none text-white-50">Authenticité</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-3">
          <h4 class="small fw-bold text-uppercase mb-3" style="letter-spacing:.18em;">Assistance</h4>
          <ul class="list-unstyled small text-white-50 d-grid gap-2 mb-0">
            <li><a href="#" class="text-decoration-none text-white-50">FAQ</a></li>
            <li><a href="#" class="text-decoration-none text-white-50">Contactez‑nous</a></li>
            <li><a href="#" class="text-decoration-none text-white-50">Livraison & Retours</a></li>
            <li><a href="#" class="text-decoration-none text-white-50">Prendre Rendez‑vous</a></li>
          </ul>
        </div>

        <div class="col-12 col-md-3">
          <h4 class="small fw-bold text-uppercase mb-3" style="letter-spacing:.18em;">Visitez‑nous</h4>
          <div class="small text-white-50 d-grid gap-2">
            <p class="mb-0 d-flex gap-2">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">location_on</span>
              Place Jemaa el‑Fna,<br/>Marrakech 40000, Maroc
            </p>
            <p class="mb-0 d-flex align-items-center gap-2">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">mail</span>
              contact@bijouxberberes.ma
            </p>
          </div>
        </div>
      </div>

      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4 pt-3"
           style="border-top:1px solid rgba(255,255,255,.06);">
        <p class="mb-0 small text-white-50 text-uppercase" style="letter-spacing:.22em;">© 2024 BIJOUX BERBÈRES. TOUS DROITS RÉSERVÉS.</p>
        <div class="d-flex gap-3 small text-white-50 text-uppercase" style="letter-spacing:.18em;">
          <a href="#" class="text-white-50 text-decoration-none">Mentions Légales</a>
          <a href="#" class="text-white-50 text-decoration-none">Confidentialité</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>