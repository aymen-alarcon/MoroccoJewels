@include("includes.Admin_header")
    <main class="d-flex justify-content-center py-4 px-3 px-lg-4 w-100" style="margin-left: 15em;"> 
      <div class="m-5 w-100">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
          <div>
            <h1 class="h3 fw-black mb-1">Ajouter une Catégorie</h1>
            <p class="mb-0 text-faint">Gérez les collections et l'organisation de votre boutique de bijoux.</p>
          </div>
          <button class="btn btn-sm fw-bold rounded-lg d-inline-flex align-items-center gap-1"
                  style="background:rgba(255,255,255,.1);color:#fff;">
            <i class="bi bi-arrow-left"></i> Retour à la liste
          </button>
        </div>

        <form class="row g-3 g-lg-4" method="POST" action="/Admin/Categories/AddCategory/store">
          @csrf
          @method('POST')
          <div class="col-12 d-flex flex-column gap-3">
            <section class="form-card rounded-xl p-4">
              <div class="d-flex align-items-center gap-2 pb-3 mb-3 border-bottom border-opacity-25">
                <i class="bi bi-info-circle"></i>
                <h2 class="h6 fw-bold mb-0">Informations Générales</h2>
              </div>
              <div class="d-flex flex-column gap-3">
                <div>
                  <label class="form-label small fw-bold text-white-75">Nom de la catégorie <span class="text-primary">*</span></label>
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Ex: Colliers en Argent de l'Atlas"/>
                </div>
                <div>
                  <label class="form-label small fw-bold text-white-75">Description</label>
                  <textarea class="form-control" name="description" rows="5" placeholder="Décrivez l'origine et le style de cette collection..."></textarea>
                </div>
              </div>
            </section>
          </div>
          <div class="d-flex align-items-center justify-content-end gap-2 pt-3 mt-3 pb-4">
            <button type="submit" class="btn btn-primary rounded-lg fw-bold shadow d-inline-flex align-items-center gap-1">
              Enregistrer la catégorie
            </button>
          </div>
        </form>
      </div>
    </main>