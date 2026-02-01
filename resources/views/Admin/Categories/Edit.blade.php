@include("includes.Admin_header")
    <div class="side-panel w-100 p-5" style="margin-left: 15em">
      <div class="p-4 h-100 d-flex flex-column">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3 class="h5 fw-bold mb-0">Détails de la catégorie</h3>
          <button class="btn btn-sm rounded-circle"><span class="material-symbols-outlined">close</span></button>
        </div>

        <form class="d-flex flex-column gap-3 overflow-auto pe-2" action="/Admin/Categories/EditCategory/update/{{ $category->id }}" method="POST">
            @csrf
            @method("PUT")
            <div>
                <label class="form-label small fw-semibold">Nom de la catégorie</label>
                <input class="form-control" name="name" style="background:rgba(255,255,255,.06);border:1px solid #5a1a19;color:#fff;" placeholder="Ex: Bagues en ambre" value="{{ $category->name }}"/>
            </div>
            <div>
                <label class="form-label small fw-semibold">Description</label>
                <textarea class="form-control" name="description" rows="4" style="background:rgba(255,255,255,.06);border:1px solid #5a1a19;color:#fff;" placeholder="Décrivez l'univers de cette catégorie...">{{ $category->description }}</textarea>
            </div>
            <div class="pt-3 mt-auto" style="border-color:#5a1a19;">
                <div class="d-flex gap-2">
                    <button type="submit" class="btn flex-fill rounded-lg fw-bold" style="background:var(--bb-primary);color:#2b1600;">Enregistrer</button>
                </div>
            </div>
        </form>
      </div>
    </div>
