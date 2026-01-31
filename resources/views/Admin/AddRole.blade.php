<?php require_once "../resources/views/includes/Admin_header.php";?>
    <main class="d-flex flex-column overflow-auto w-100">
      <div class="px-4 px-lg-5 py-4 mx-auto w-100">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
          <div>
            <h2 class="display-6 fw-black mb-1">Ajouter un Rôle</h2>
            <p class="mb-0 text-white-50">Définissez le nom du rôle et ses accès spécifiques au système de gestion de la bijouterie.</p>
          </div>
          <button class="btn btn-outline-light rounded-lg d-inline-flex align-items-center gap-1" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.12);">
            <span class="material-symbols-outlined">arrow_back</span> Retour à la liste
          </button>
        </div>

        <section class="card-dark rounded-xl p-4 p-lg-5 mb-4">
          <h3 class="h5 fw-bold mb-4 d-flex align-items-center gap-2">
            <span class="material-symbols-outlined text-primary">info</span> Informations Générales
          </h3>
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-semibold text-white-75">Nom du rôle</label>
              <input type="text" class="form-control form-control-lg" placeholder="ex: Gestionnaire de Stock"/>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-semibold text-white-75">Code technique (optionnel)</label>
              <input type="text" class="form-control form-control-lg" placeholder="STOCK_MANAGER"/>
            </div>
            <div class="col-12">
              <label class="form-label small fw-semibold text-white-75">Description du rôle</label>
              <textarea rows="3" class="form-control" placeholder="Décrivez les responsabilités de ce rôle..."></textarea>
            </div>
          </div>
        </section>

        <section class="card-dark rounded-xl overflow-hidden">
          <div class="d-flex align-items-center justify-content-between px-4 px-lg-5 py-3 section-head">
            <h3 class="h5 fw-bold mb-0 d-flex align-items-center gap-2"><span class="material-symbols-outlined text-primary">security</span> Gestion des Permissions</h3>
            <div class="d-flex align-items-center gap-3">
              <button class="btn btn-link text-decoration-underline text-white-50 p-0">Tout cocher</button>
              <button class="btn btn-link text-decoration-underline text-white-50 p-0">Tout décocher</button>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-perms align-middle mb-0">
              <thead>
                <tr>
                  <th class="px-4 py-3" style="width:33%">Module du Système</th>
                  <th class="px-4 py-3 text-center">Voir</th>
                  <th class="px-4 py-3 text-center">Créer</th>
                  <th class="px-4 py-3 text-center">Modifier</th>
                  <th class="px-4 py-3 text-center">Supprimer</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:32px;height:32px;background:rgba(19,127,236,.1);color:var(--bb-primary);">
                        <span class="material-symbols-outlined">dashboard</span>
                      </div>
                      <div>
                        <div class="fw-bold small">Tableau de Bord</div>
                        <div class="small text-white-50">Statistiques et aperçus globaux</div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center"><input class="form-check-input" type="checkbox" checked></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox" disabled></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox" disabled></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox" disabled></td>
                </tr>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:32px;height:32px;background:rgba(19,127,236,.1);color:var(--bb-primary);">
                        <span class="material-symbols-outlined">diamond</span>
                      </div>
                      <div>
                        <div class="fw-bold small">Catalogue & Produits</div>
                        <div class="small text-white-50">Bijoux, métaux et catégories</div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                </tr>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:32px;height:32px;background:rgba(19,127,236,.1);color:var(--bb-primary);">
                        <span class="material-symbols-outlined">shopping_bag</span>
                      </div>
                      <div>
                        <div class="fw-bold small">Commandes & Ventes</div>
                        <div class="small text-white-50">Suivi des achats et facturation</div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                </tr>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-2">
                      <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:32px;height:32px;background:rgba(19,127,236,.1);color:var(--bb-primary);">
                        <span class="material-symbols-outlined">person</span>
                      </div>
                      <div>
                        <div class="fw-bold small">Gestion Clients</div>
                        <div class="small text-white-50">Données clients et fidélité</div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                  <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </main>
  </div>