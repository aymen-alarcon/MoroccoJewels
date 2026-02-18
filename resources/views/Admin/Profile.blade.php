@include("includes.Admin_header")
    <main class=" d-flex flex-column overflow-auto pattern w-100">
      <div class="px-3 px-md-4 pt-3">
        <ul class="nav nav-pills gap-2" role="tablist" id="profileTabs">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-profil" data-target="#section-profil" role="tab" aria-controls="section-profil" aria-selected="true">
              <i class="bi bi-person"></i> Profil
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-securite" data-target="#section-securite" role="tab" aria-controls="section-securite" aria-selected="false">
              <span class="material-symbols-outlined me-1">verified_user</span> Sécurité
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-activite" data-target="#section-activite" role="tab" aria-controls="section-activite" aria-selected="false">
              <span class="material-symbols-outlined me-1">timeline</span> Activité
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-preferences" data-target="#section-preferences" role="tab" aria-controls="section-preferences" aria-selected="false">
              <span class="material-symbols-outlined me-1">tune</span> Préférences
            </button>
          </li>
        </ul>
      </div>

      <div class="container-xxl py-4 d-flex flex-column gap-4" style="max-width:1200px;">
        <section id="section-profil" class="section-panel" role="tabpanel" aria-labelledby="tab-profil">
          <div class="card-surface rounded-xl p-4 p-md-5 shadow-2xl">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-4">
              <div class="d-flex flex-column flex-sm-row align-items-center gap-3 text-center text-sm-start">
                <div class="position-relative">
                  <div class="rounded-circle border" style="width:128px;height:128px;border-color:var(--bb-primary);
                       background:url('https://lh3.googleusercontent.com/aida-public/AB6AXuC76YFcxfv4Fi_nlNCr4msUGryy23oYT99kUgi4S-zknlpmxuVvdeW6ZZIYrj0boCQ7kidMiixE_yp2pPz-XLEk-hMMQelAB-dArVG1vZDM6EAa7g8CeGBVjCJEDebedvJ4Tp_C5PkJai4D5EwHC9o0JlFf8dR1cXHZ-q5qQ_4fkrJAKm7sRIZqtG6Jy7hH_zSuvdFpFnJQPdIRqy-kUXhZq5q2tbzokeezV-KUY4MFADJmxMcjxVxb0C1pta6daLylrdBA3EKrMFY') center/cover no-repeat;">
                  </div>
                  <div class="position-absolute bottom-0 end-0 rounded-circle border" title="En ligne"
                       style="width:24px;height:24px;background:#22c55e;border-color:var(--bb-surface);"></div>
                </div>
                <div>
                  <h3 class="mb-1 fw-extrabold" style="font-size:28px;">Zineb Alami</h3>
                  <div class="mb-2"><span class="badge-pill">Administrateur Principal</span></div>
                  <p class="small text-white-50 mb-0 d-flex align-items-center justify-content-center justify-content-sm-start gap-2">
                    <span class="material-symbols-outlined" style="font-size:18px;">mail</span> zineb.alami@bijouxberberes.ma
                  </p>
                </div>
              </div>
              <div class="d-flex flex-column flex-sm-row gap-2 w-100 w-sm-auto">
                <button class="btn btn-outline-light rounded-lg fw-bold" style="border-color:rgba(255,255,255,.12);">
                  <span class="material-symbols-outlined me-1">edit</span> Modifier le profil
                </button>
                <button class="btn rounded-lg fw-bold" data-target="#section-securite" id="cta-security"
                        style="background:var(--bb-primary);color:#420f0e;">
                  <span class="material-symbols-outlined me-1">lock_reset</span> Sécurité
                </button>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <h2 class="fs-5 fw-bold mb-0">Raccourcis de gestion</h2>
            <div class=" ms-3" style="height:1px;background:linear-gradient(90deg, rgba(250,198,56,.4), transparent)"></div>
          </div>

          <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card-surface rounded-xl p-4 h-100" style="cursor:pointer;">
                <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(250,198,56,.15);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-3">add_circle</span>
                </div>
                <h4 class="h6 fw-bold mt-3 mb-1">Ajouter un Bijou</h4>
                <p class="small text-white-50 mb-0">Référencer une nouvelle pièce artisanale</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card-surface rounded-xl p-4 h-100" style="cursor:pointer;">
                <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(250,198,56,.15);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-3">inventory_2</span>
                </div>
                <h4 class="h6 fw-bold mt-3 mb-1">Gérer le Stock</h4>
                <p class="small text-white-50 mb-0">Vérifier l'inventaire des collections</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card-surface rounded-xl p-4 h-100" style="cursor:pointer;">
                <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(250,198,56,.15);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-3">local_shipping</span>
                </div>
                <h4 class="h6 fw-bold mt-3 mb-1">Expéditions</h4>
                <p class="small text-white-50 mb-0">12 nouvelles commandes prêtes</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card-surface rounded-xl p-4 h-100" style="cursor:pointer;">
                <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(250,198,56,.15);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-3">analytics</span>
                </div>
                <h4 class="h6 fw-bold mt-3 mb-1">Rapports</h4>
                <p class="small text-white-50 mb-0">Consulter les ventes mensuelles</p>
              </div>
            </div>
          </div>
          <div class="row g-4 mt-1">
            <div class="col-12 col-lg-8">
              <div class="card-surface rounded-xl p-4">
                <h3 class="h6 fw-bold d-flex align-items-center gap-2 mb-3">
                  <span class="material-symbols-outlined" style="color:var(--bb-primary);">verified_user</span> Détails du Compte
                </h3>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.12em;color:rgba(255,255,255,.5)">Identifiant Admin</div>
                    <div class="fw-medium">ADMIN-MA-2024-0892</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.12em;color:rgba(255,255,255,.5)">Dernière Connexion</div>
                    <div class="fw-medium">Aujourd'hui, 14:32 (Casablanca)</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.12em;color:rgba(255,255,255,.5)">Membre Depuis</div>
                    <div class="fw-medium">12 Mars 2021</div>
                  </div>
                  <div class="col-sm-6">
                    <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.12em;color:rgba(255,255,255,.5)">Double Authentification</div>
                    <div class="fw-medium text-success d-flex align-items-center gap-1">
                      <span class="material-symbols-outlined" style="font-size:18px;">check_circle</span> Activée
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card-surface rounded-xl p-4">
                <h3 class="h6 fw-bold mb-3">Activité Récente</h3>
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex gap-2">
                    <div class="rounded-circle" style="width:8px;height:8px;background:var(--bb-primary);margin-top:6px;"></div>
                    <div>
                      <p class="small fw-semibold mb-0">Prix modifié : Bracelet Touareg</p>
                      <p class="small text-white-50 mb-0">Il y a 2 heures</p>
                    </div>
                  </div>
                  <div class="d-flex gap-2">
                    <div class="rounded-circle" style="width:8px;height:8px;background:rgba(250,198,56,.5);margin-top:6px;"></div>
                    <div>
                      <p class="small fw-semibold mb-0">Stock mis à jour : Collier Ambre</p>
                      <p class="small text-white-50 mb-0">Hier, 18:10</p>
                    </div>
                  </div>
                  <div class="d-flex gap-2">
                    <div class="rounded-circle" style="width:8px;height:8px;background:rgba(250,198,56,.5);margin-top:6px;"></div>
                    <div>
                      <p class="small fw-semibold mb-0">Connexion réussie</p>
                      <p class="small text-white-50 mb-0">Hier, 09:15</p>
                    </div>
                  </div>
                </div>
                <button class="btn btn-link p-0 mt-3 text-decoration-none text-uppercase fw-bold"
                        style="letter-spacing:.18em;color:var(--bb-primary);" data-target="#section-activite">Voir tout l'historique</button>
              </div>
            </div>
          </div>
        </section>
        <section id="section-securite" class="section-panel is-hidden" role="tabpanel" aria-labelledby="tab-securite">
          <div class="row g-4">
            <div class="col-12 col-lg-6">
              <div class="card-surface rounded-xl p-4 h-100">
                <h3 class="h6 fw-bold d-flex align-items-center gap-2 mb-3">
                  <span class="material-symbols-outlined" style="color:var(--bb-primary);">lock</span> Changer le mot de passe
                </h3>
                <div class="d-flex flex-column gap-2">
                  <label class="small muted">Mot de passe actuel</label>
                  <input type="password" class="form-control" placeholder="••••••••"/>
                  <label class="small muted mt-2">Nouveau mot de passe</label>
                  <input type="password" class="form-control" placeholder="Au moins 8 caractères"/>
                  <label class="small muted mt-2">Confirmer le nouveau mot de passe</label>
                  <input type="password" class="form-control" placeholder="Répéter le mot de passe"/>
                  <button class="btn btn-warning mt-3 fw-bold" style="--bs-btn-bg:var(--bb-primary);--bs-btn-border-color:var(--bb-primary);color:#420f0e;">
                    Mettre à jour
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="card-surface rounded-xl p-4 h-100">
                <h3 class="h6 fw-bold d-flex align-items-center gap-2 mb-3">
                  <span class="material-symbols-outlined" style="color:var(--bb-primary);">verified_user</span> Authentification à deux facteurs
                </h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="small">État actuel : <span class="text-success fw-bold">Activée</span></div>
                  <div class="form-check form-switch m-0">
                    <input class="form-check-input" type="checkbox" checked>
                  </div>
                </div>
                <div class="small text-white-50 mt-2">
                  Renforcez la sécurité de votre compte en exigeant un code additionnel lors de la connexion.
                </div>

                <hr class="border-light border-opacity-25 my-3"/>

                <h4 class="small fw-bold">Sessions actives</h4>
                <div class="table-responsive">
                  <table class="table table-logs align-middle mb-0">
                    <thead><tr><th>Appareil</th><th>Localisation</th><th>Dernière activité</th><th class="text-end">Action</th></tr></thead>
                    <tbody>
                      <tr>
                        <td>Chrome • Windows</td>
                        <td>Casablanca, MA</td>
                        <td>Il y a 2h</td>
                        <td class="text-end"><button class="btn btn-sm btn-outline-light" style="border-color:rgba(255,255,255,.2);">Déconnecter</button></td>
                      </tr>
                      <tr>
                        <td>Safari • iPhone</td>
                        <td>Marrakech, MA</td>
                        <td>Hier 21:10</td>
                        <td class="text-end"><button class="btn btn-sm btn-outline-light" style="border-color:rgba(255,255,255,.2);">Déconnecter</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </section>
        <section id="section-activite" class="section-panel is-hidden" role="tabpanel" aria-labelledby="tab-activite">
          <div class="card-surface rounded-xl p-4">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
              <h3 class="h6 fw-bold d-flex align-items-center gap-2 mb-2 mb-md-0">
                <span class="material-symbols-outlined" style="color:var(--bb-primary);">timeline</span> Journal d’activité
              </h3>
              <div class="d-flex gap-2">
                <select class="form-select form-select-sm">
                  <option>Toutes les actions</option><option>Produits</option><option>Utilisateurs</option><option>Système</option>
                </select>
                <select class="form-select form-select-sm">
                  <option>30 derniers jours</option><option>7 derniers jours</option><option>24 dernières heures</option>
                </select>
              </div>
            </div>

            <div class="table-responsive mt-3">
              <table class="table table-logs align-middle mb-0">
                <thead>
                  <tr>
                    <th>Horodatage</th><th>Action</th><th>Description</th><th class="text-end">Détails</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>31 Jan 2026 · 14:30</td>
                    <td><span class="badge-pill">Produit</span></td>
                    <td class="small">Mise à jour du prix du Collier Fibule Argent (+15%)</td>
                    <td class="text-end"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                  </tr>
                  <tr>
                    <td>31 Jan 2026 · 11:15</td>
                    <td><span class="badge-pill">Catégorie</span></td>
                    <td class="small">Suppression de la catégorie “Anciennes Collections” (12 produits archivés)</td>
                    <td class="text-end"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                  </tr>
                  <tr>
                    <td>30 Jan 2026 · 16:45</td>
                    <td><span class="badge-pill">Rôle</span></td>
                    <td class="small">Changement des permissions “Éditeur” pour l’utilisateur Lina K.</td>
                    <td class="text-end"><button class="btn btn-sm text-white-50"><i class="bi bi-info-circle"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </section>
        <section id="section-preferences" class="section-panel is-hidden" role="tabpanel" aria-labelledby="tab-preferences">
          <div class="row g-4">
            <div class="col-12 col-lg-6">
              <div class="card-surface rounded-xl p-4 h-100">
                <h3 class="h6 fw-bold d-flex align-items-center gap-2 mb-3">
                  <span class="material-symbols-outlined" style="color:var(--bb-primary);">tune</span> Apparence & Langue
                </h3>
                <div class="mb-3">
                  <label class="form-label small muted">Thème</label>
                  <div class="d-flex gap-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="theme" id="themeDark" checked>
                      <label class="form-check-label" for="themeDark">Sombre</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="theme" id="themeLight">
                      <label class="form-check-label" for="themeLight">Clair</label>
                    </div>
                  </div>
                </div>
                <div>
                  <label class="form-label small muted">Langue de l’interface</label>
                  <select class="form-select">
                    <option>Français</option>
                    <option>Arabe</option>
                    <option>Anglais</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="card-surface rounded-xl p-4 h-100">
                <h3 class="h6 fw-bold d-flex align-items-center gap-2 mb-3">
                  <span class="material-symbols-outlined" style="color:var(--bb-primary);">notifications</span> Notifications
                </h3>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="notifOrders" checked>
                  <label class="form-check-label" for="notifOrders">Commandes et paiements</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="notifStock" checked>
                  <label class="form-check-label" for="notifStock">Alerte de stock bas</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="notifSecurity">
                  <label class="form-check-label" for="notifSecurity">Alertes de sécurité</label>
                </div>

                <button class="btn btn-warning mt-3 fw-bold" style="--bs-btn-bg:var(--bb-primary);--bs-btn-border-color:var(--bb-primary);color:#420f0e;">
                  Enregistrer les préférences
                </button>
              </div>
            </div>
          </div>
        </section>

      </div>
    </main>
  </div>
  <script>
    (function(){
      const tabs = document.querySelectorAll('#profileTabs .nav-link');
      const panels = document.querySelectorAll('.section-panel');

      const hideAll = () => panels.forEach(p => p.classList.add('is-hidden'));
      const deactivateAll = () => tabs.forEach(t => {
        t.classList.remove('active');
        t.setAttribute('aria-selected','false');
      });
      const showPanel = (id) => {
        const target = document.querySelector(id);
        if(!target) return;
        hideAll();
        target.classList.remove('is-hidden');
      };
      const activateTab = (btn) => {
        deactivateAll();
        btn.classList.add('active');
        btn.setAttribute('aria-selected','true');
      };
      const setHash = (hash) => { if(history.pushState){ history.replaceState(null,'',hash); } else { location.hash = hash; } };
      const saveLast = (id) => localStorage.setItem('bb_last_profile_section', id);
      const loadLast = () => localStorage.getItem('bb_last_profile_section');

      tabs.forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
          const id = btn.dataset.target;
          if(!id) return;
          activateTab(btn);
          showPanel(id);
          setHash(id);
          saveLast(id);
        });
      });

      document.querySelectorAll('[data-target^="#section-"]').forEach(el => {
        el.addEventListener('click', (e) => {
          const id = el.getAttribute('data-target');
          const relatedTab = document.querySelector(`#profileTabs .nav-link[data-target="${id}"]`);
          if(relatedTab){ relatedTab.click(); }
        });
      });

      const initial = location.hash && document.querySelector(location.hash)
        ? location.hash
        : (loadLast() && document.querySelector(loadLast()) ? loadLast() : '#section-profil');

      const initialTab = document.querySelector(`#profileTabs .nav-link[data-target="${initial}"]`) || document.querySelector('#tab-profil');
      initialTab.click();
    })();
  </script>
</body>
</html>