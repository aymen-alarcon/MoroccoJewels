@include("includes.Admin_header")
    <div class="side-panel">
      <div class="p-4 h-100 d-flex flex-column">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3 class="h5 fw-bold mb-0">Détails de la catégorie</h3>
          <button class="btn btn-sm rounded-circle"><span class="material-symbols-outlined">close</span></button>
        </div>

        <form class="d-flex flex-column gap-3 overflow-auto pe-2">
          <div>
            <label class="form-label small fw-semibold">Nom de la catégorie</label>
            <input class="form-control" style="background:rgba(255,255,255,.06);border:1px solid #5a1a19;color:#fff;" placeholder="Ex: Bagues en ambre"/>
          </div>
          <div>
            <label class="form-label small fw-semibold">Description</label>
            <textarea class="form-control" rows="4" style="background:rgba(255,255,255,.06);border:1px solid #5a1a19;color:#fff;" placeholder="Décrivez l'univers de cette catégorie..."></textarea>
          </div>
          <div>
            <label class="form-label small fw-semibold">Image de couverture</label>
            <div class="border rounded-xl p-4 text-center" style="border-color:#5a1a19; cursor:pointer;">
              <span class="material-symbols-outlined" style="font-size:34px;color:#b6b6b6;">add_photo_alternate</span>
              <p class="mb-0 small text-white-50">Cliquez pour télécharger ou glissez-déposez</p>
              <p class="mb-0" style="font-size:12px; color:#9ca3af;">PNG, JPG jusqu'à 10MB</p>
            </div>
          </div>
          <div class="rounded p-3" style="background:rgba(244,157,37,.10);border:1px solid color-mix(in srgb, var(--bb-primary) 20%, transparent);">
            <p class="mb-0 small d-flex align-items-center gap-1" style="color:var(--bb-primary);">
              <span class="material-symbols-outlined" style="font-size:18px;">info</span>
              Cette catégorie sera immédiatement visible sur le site public une fois enregistrée.
            </p>
          </div>
        </form>

        <div class="pt-3 mt-auto border-top" style="border-color:#5a1a19;">
          <div class="d-flex gap-2">
            <button class="btn flex-fill rounded-lg text-white-75 border" style="border-color:#5a1a19;">Annuler</button>
            <button class="btn flex-fill rounded-lg fw-bold" style="background:var(--bb-primary);color:#2b1600;">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>
