<?php require_once "../includes/Admin_header.php";?>
    <main class="flex-grow-1 d-flex justify-content-center py-4 px-3 px-lg-4">
      <div class="w-100" style="max-width:1000px;">
        <div class="d-flex flex-wrap align-items-center gap-2 small mb-3">
          #
            <span class="material-symbols-outlined" style="font-size:18px;">home</span> Tableau de bord
          </a>
          <span class="text-white-50">/</span>
          #Catégories</a>
          <span class="text-white-50">/</span>
          <span>Ajouter une catégorie</span>
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
          <div>
            <h1 class="h3 fw-black mb-1">Ajouter / Modifier une Catégorie</h1>
            <p class="mb-0 text-faint">Gérez les collections et l'organisation de votre boutique de bijoux.</p>
          </div>
          <button class="btn btn-sm fw-bold rounded-lg d-inline-flex align-items-center gap-1"
                  style="background:rgba(255,255,255,.1);color:#fff;">
            <span class="material-symbols-outlined">arrow_back</span> Retour à la liste
          </button>
        </div>

        <form class="row g-3 g-lg-4">
          <div class="col-12 col-lg-8 d-flex flex-column gap-3">
            <section class="form-card rounded-xl p-4">
              <div class="d-flex align-items-center gap-2 pb-3 mb-3 border-bottom border-opacity-25">
                <span class="material-symbols-outlined text-primary">info</span>
                <h2 class="h6 fw-bold mb-0">Informations Générales</h2>
              </div>
              <div class="d-flex flex-column gap-3">
                <div>
                  <label class="form-label small fw-bold text-white-75">Nom de la catégorie <span class="text-primary">*</span></label>
                  <input type="text" class="form-control form-control-lg" placeholder="Ex: Colliers en Argent de l'Atlas"/>
                </div>
                <div>
                  <label class="form-label small fw-bold text-white-75">Description</label>
                  <textarea class="form-control" rows="5" placeholder="Décrivez l'origine et le style de cette collection..."></textarea>
                </div>
              </div>
            </section>

            <section class="form-card rounded-xl p-4">
              <div class="d-flex align-items-center gap-2 pb-3 mb-3 border-bottom border-opacity-25">
                <span class="material-symbols-outlined text-primary">image</span>
                <h2 class="h6 fw-bold mb-0">Visuel de la catégorie</h2>
              </div>

              <div class="drop-zone rounded-xl p-4 text-center">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-2"
                     style="width:64px;height:64px;background:rgba(19,127,236,.2);color:var(--bb-primary);">
                  <span class="material-symbols-outlined fs-2">cloud_upload</span>
                </div>
                <p class="fw-bold mb-1">Cliquez ou glissez une image ici</p>
                <p class="text-white-50 small mb-2">PNG, JPG jusqu'à 5MB (Recommandé: 1200×400px)</p>
                <button type="button" class="btn btn-primary btn-sm fw-bold rounded-lg">Sélectionner un fichier</button>
              </div>
            </section>

            <section class="form-card rounded-xl p-4">
              <div class="d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom border-opacity-25">
                <div class="d-flex align-items-center gap-2">
                  <span class="material-symbols-outlined text-primary">search_check</span>
                  <h2 class="h6 fw-bold mb-0">Référencement (SEO)</h2>
                </div>
                <span class="material-symbols-outlined text-white-50">expand_more</span>
              </div>

              <div class="d-flex flex-column gap-3">
                <div>
                  <label class="form-label small fw-bold text-white-75">Titre SEO (Meta Title)</label>
                  <input type="text" class="form-control form-control-lg"
                         placeholder="Bijoux Berbères Authentiques - Collection Atlas"/>
                </div>

                <div>
                  <label class="form-label small fw-bold text-white-75">URL Simplifiée (Slug)</label>
                  <div class="input-group">
                    <span class="input-group-text">bijoux-berberes.com/cat/</span>
                    <input type="text" class="form-control" placeholder="colliers-argent-atlas"/>
                  </div>
                </div>

                <div>
                  <label class="form-label small fw-bold text-white-75">Meta Description</label>
                  <textarea rows="3" class="form-control small"
                            placeholder="Découvrez notre sélection exclusive de bijoux artisanaux faits main..."></textarea>
                </div>
              </div>
            </section>
          </div>

          <div class="col-12 col-lg-4 d-flex flex-column gap-3">
            <section class="form-card rounded-xl p-4">
              <div class="d-flex align-items-center gap-2 pb-3 mb-3 border-bottom border-opacity-25">
                <span class="material-symbols-outlined text-primary">visibility</span>
                <h2 class="h6 fw-bold mb-0">Visibilité</h2>
              </div>

              <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="small fw-semibold">Statut de la catégorie</span>
                <div class="form-check form-switch m-0">
                  <input class="form-check-input" type="checkbox" checked>
                </div>
              </div>

              <div class="d-flex align-items-start gap-2 p-2 rounded"
                   style="background:rgba(19,127,236,.12); border:1px solid rgba(19,127,236,.2);">
                <span class="material-symbols-outlined text-primary" style="font-size:18px;">info</span>
                <p class="mb-0 small" style="color:var(--bb-primary);">Cette catégorie sera visible par tous les clients sur la boutique.</p>
              </div>
            </section>

            <section class="form-card rounded-xl p-4">
              <div class="d-flex align-items-center gap-2 pb-3 mb-3 border-bottom border-opacity-25">
                <span class="material-symbols-outlined text-primary">account_tree</span>
                <h2 class="h6 fw-bold mb-0">Organisation</h2>
              </div>

              <div class="mb-3">
                <label class="form-label small fw-bold text-white-75">Catégorie Parente</label>
                <select class="form-select form-select-lg">
                  <option value="none">Aucune (Catégorie racine)</option>
                  <option value="1">Bijoux Femme</option>
                  <option value="2">Bijoux Homme</option>
                  <option value="3">Accessoires Traditionnels</option>
                </select>
              </div>

              <div>
                <label class="form-label small fw-bold text-white-75">Ordre d'affichage</label>
                <input type="number" class="form-control form-control-lg" value="0"/>
                <p class="mb-0 mt-1" style="font-size:10px;color:rgba(255,255,255,.6);">Détermine la position dans le menu.</p>
              </div>
            </section>

            <section class="form-card rounded-xl overflow-hidden">
              <div class="hero-preview">
                <div class="hero-overlay">
                  <span class="fw-bold">Aperçu Boutique</span>
                </div>
              </div>
              <div class="p-3" style="background:rgba(255,255,255,.05);">
                <div class="rounded mb-2" style="height:16px;background:rgba(255,255,255,.2);width:75%;"></div>
                <div class="rounded" style="height:12px;background:rgba(255,255,255,.1);width:50%;"></div>
              </div>
            </section>
          </div>
        </form>
        <div class="d-flex align-items-center justify-content-end gap-2 pt-3 mt-3 border-top border-opacity-25 pb-4">
          <button class="btn btn-outline-light rounded-lg fw-bold">Annuler</button>
          <button class="btn btn-primary rounded-lg fw-bold shadow d-inline-flex align-items-center gap-1">
            <span class="material-symbols-outlined">save</span> Enregistrer la catégorie
          </button>
        </div>
      </div>
    </main>
<?php require_once "../includes/footer.php";?>