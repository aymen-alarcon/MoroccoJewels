@include('includes.Admin_header')
<main class="container-fluid w-100 p-5" style="margin-left: 15em;">
  <form method="POST" action="/Admin/Products/AddProduct/store" enctype="multipart/form-data">
    @csrf
    @method("POST")
      <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 py-3">
        <div>
          <h1 class="display-6 fw-black mb-1">Ajouter un Produit</h1>
          <p class="mb-0 text-white-50">Créez une nouvelle fiche pour vos bijoux artisanaux d'exception.</p>
        </div>
        <div class="d-flex gap-2">
          <a href="{{ url()->previous() }}" class="btn btn-sm fw-bold rounded-lg" style="background:rgba(255,255,255,.12);color:#fff;">Annuler</a>
          <button type="submit" class="btn btn-sm fw-bold rounded-lg shadow" style="background:var(--bb-primary);color:#2b1600;">Enregistrer le produit</button>
        </div>
      </div>

      <div class="row g-4 mt-2 form-card">
        <div class="col-12 col-lg-8 d-flex flex-column gap-3">
          <section class="surface rounded-xl p-4">
            <h2 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
              <span class="material-symbols-outlined" style="color:var(--bb-primary);">info</span>
              Informations Générales
            </h2>
            <div class="d-flex flex-column gap-3">
              <div>
                <label class="form-label small fw-bold">Nom du produit</label>
                <input name="name" class="form-control form-control-lg" placeholder="ex: Collier Fibule en Argent Massif" required />
              </div>
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <label class="form-label small fw-bold">Catégorie</label>
                  <select name="category_id" class="form-select form-select-lg" required>
                    <option value="" class="text-dark" disabled>
                      Sélectionner une catégorie
                    </option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" name="category_id" class="text-dark">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label small fw-bold">Prix (MAD)</label>
                  <div class="input-group input-group-lg">
                    <input type="number" name="price" class="form-control" placeholder="2500" min="0" step="0.01" required />
                    <span class="input-group-text fw-bold">DH</span>
                  </div>
                </div>
              </div>
              <div>
                <label class="form-label small fw-bold">Description détaillée</label>
                <textarea name="description" class="form-control" rows="6" placeholder="Décrivez l'histoire, la provenance et les détails techniques de ce bijou berbère..." required></textarea>
              </div>
            </div>
            <div class="row g-3 mt-2">
              <div class="col-12">
                <label class="form-label small fw-bold">Quantité en stock</label>
                <input type="number" name="stock" class="form-control form-control-lg" placeholder="0" min="0" required />
              </div>
            </div>
          </section>
        </div>
        <div class="col-12 col-lg-4 d-flex flex-column gap-3">
          <section class="surface rounded-xl p-4 h-100">
            <h2 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
              <span class="material-symbols-outlined" style="color:var(--bb-primary);">image</span>
              Galerie Médias
            </h2>
            <div class="mb-3">
              <label class="form-label small fw-bold">Image principale</label>
              <input type="file" name="main_image" class="form-control" accept="image/*" required />
            </div>
          </section>
        </div>
      </div>
      <div class="d-md-none position-fixed bottom-0 start-0 end-0 p-3 brandbar" style="backdrop-filter:blur(8px);">
        <div class="d-flex gap-2">
          <a href="{{ url()->previous() }}" class="btn btn-sm rounded-lg w-100" style="background:rgba(255,255,255,.12);color:#fff;">Annuler</a>
          <button type="submit" class="btn btn-sm rounded-lg w-100 fw-bold" style="background:var(--bb-primary);color:#2b1600;">Enregistrer</button>
        </div>
      </div>
  </form>
</main>