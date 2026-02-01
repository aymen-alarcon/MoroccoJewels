@include("includes.Admin_header")
  <main class="container-fluid" style="max-width:1280px;">
    <div class="d-flex flex-wrap align-items-center gap-2 text-nowrap mt-4 mb-3 px-3">
      <a class="text-decoration-none fw-semibold" style="color:#c39998;" href="#">Accueil</a>
      <span class="text-white-50">/</span>
      <a class="text-decoration-none fw-semibold" style="color:#c39998;" href="#">Commandes</a>
      <span class="text-white-50">/</span>
      <span class="small fw-bold">Détails Commande #ORD-5821</span>
    </div>
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 px-3 mb-4">
      <div>
        <div class="d-flex align-items-center gap-2">
          <h1 class="h2 fw-black mb-0">Commande #ORD-5821</h1>
          <span class="badge-status">En cours</span>
        </div>
        <p class="mb-0" style="color:#c39998;">Passée le 24 Mai 2024 à 14:30 par virement bancaire</p>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-sm rounded-lg d-inline-flex align-items-center gap-1" style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);color:#fff;">
          <span class="material-symbols-outlined">print</span> Facture PDF
        </button>
        <button class="btn btn-sm rounded-lg d-inline-flex align-items-center gap-1 fw-bold" style="background:var(--bb-primary);color:#fff;">
          <span class="material-symbols-outlined">save</span> Enregistrer
        </button>
      </div>
    </div>

    <div class="row g-4 px-3">
      <div class="col-12 col-lg-8 d-flex flex-column gap-3">
        <div class="segmented p-1">
          <div class="btn-group d-flex" role="group">
            <button type="button" class="btn">En attente</button>
            <button type="button" class="btn active">Traitement</button>
            <button type="button" class="btn">Expédiée</button>
            <button type="button" class="btn">Livrée</button>
          </div>
        </div>

        <div class="card-soft rounded-xl overflow-hidden">
          <div class="d-flex align-items-center justify-content-between px-4 py-3" style="border-bottom:1px solid rgba(255,255,255,.06);">
            <h2 class="h6 fw-bold mb-0">Articles de la commande</h2>
            <button class="btn btn-link text-decoration-none fw-bold p-0 d-inline-flex align-items-center gap-1" style="color:#c39998;">
              <span class="material-symbols-outlined">add_circle</span> Ajouter un produit
            </button>
          </div>

          <div class="table-responsive">
            <table class="table table-items align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Produit</th>
                  <th class="px-4 py-3">SKU</th>
                  <th class="px-4 py-3">Prix Unitaire</th>
                  <th class="px-4 py-3">Qté</th>
                  <th class="px-4 py-3">Total</th>
                  <th class="px-4 py-3">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="img-56" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAkZEv5r7ligRNv4c0aP9WpH5DAbrtC166lyH7fml8xXrqom1mO09BKiijv5Z8ieOSWe0I6eqCXRzSzGL7vfN3UbI4kzQ36aczzY0eKABZcwKLo3XwJ16QuViMAMEj7U9hp5_Ybi8Rcszztor1iE8MmRowYRoAPmtiQ2rCtYWnt0mNKgHpp-FzgiL6woEKvRk31k2JENwsLQmMb-B5FCangK5bzeSmEEmaVeN4JH-bxyhn6oCo-5ZdcLu_vJMbWVx9o3DG-s4CAbzo')"></div>
                      <div>
                        <p class="mb-0 fw-bold small">Collier "Tiznit" Argent</p>
                        <p class="mb-0 small" style="color:#c39998;">Fait main, Argent 925</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 small" style="color:#c39998;">JW-TZ-001</td>
                  <td class="px-4 py-3 small">1,250.00 DH</td>
                  <td class="px-4 py-3">
                    <input type="number" class="form-control form-control-sm text-center"
                           style="width:64px;background:#fff;border:1px solid rgba(255,255,255,.1);" value="1"/>
                  </td>
                  <td class="px-4 py-3 small fw-bold">1,250.00 DH</td>
                  <td class="px-4 py-3">
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>

                <tr>
                  <td class="px-4 py-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="img-56" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtYmPyGKybIosbvSXgQS5KVcAnZPaLtIlS8R7L5jNgRv38HN-vOn6ZY32PMR5a6VO9Hlj67XoEeNB-_NGTN8vTd8IQBEpJbQymF7yMfXzUp4n0_8ad436QPOJ9DkoCdfrocjDe6xuNcmUsrfXvpWxBz9Z8SSRYA7U0ySXnbAfXCghmKYv9aEJJ9SRGQXnNHfYy-7jsz2U0Q-jBuV4MblRwv1XpZZgSjoh5_5XF01MrTX1cUaTC72oNpmKScj8nUOzGoNuh9JQbGZs')"></div>
                      <div>
                        <p class="mb-0 fw-bold small">Bracelet Émaillé Kabyle</p>
                        <p class="mb-0 small" style="color:#c39998;">Email bleu et corail</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 small" style="color:#c39998;">JW-BK-045</td>
                  <td class="px-4 py-3 small">850.00 DH</td>
                  <td class="px-4 py-3">
                    <input type="number" class="form-control form-control-sm text-center"
                           style="width:64px;background:#fff;border:1px solid rgba(255,255,255,.1);" value="2"/>
                  </td>
                  <td class="px-4 py-3 small fw-bold">1,700.00 DH</td>
                  <td class="px-4 py-3">
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

        <div class="card-soft rounded-xl p-4">
          <h2 class="h6 fw-bold mb-3">Notes du client</h2>
          <div class="note-box rounded p-3">
            “C'est un cadeau d'anniversaire, merci d'inclure un emballage cadeau raffiné si possible.
            Livraison avant le 30 mai souhaitée.”
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 d-flex flex-column gap-3">
        <div class="card-soft rounded-xl overflow-hidden">
          <div class="px-4 py-3" style="background:rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06);">
            <h2 class="h6 fw-bold mb-0">Client</h2>
          </div>
          <div class="p-4 d-flex flex-column gap-3">
            <div class="d-flex align-items-center gap-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:56px;height:56px;background:rgba(67,15,14,.2);color:#c39998;">
                <span class="material-symbols-outlined fs-2">account_circle</span>
              </div>
              <div>
                <p class="mb-0 fw-bold">Yasmine Benjelloun</p>
                <p class="mb-0 small" style="color:#c39998;">Client depuis 2022</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-2">
              <span class="material-symbols-outlined" style="color:#c39998;">mail</span>
              <p class="mb-0 small">yasmine.b@example.com</p>
            </div>
            <div class="d-flex align-items-start gap-2">
              <span class="material-symbols-outlined" style="color:#c39998;">phone</span>
              <p class="mb-0 small">+212 661 234 567</p>
            </div>
            <div class="d-flex align-items-start gap-2">
              <span class="material-symbols-outlined" style="color:#c39998;">location_on</span>
              <div class="small">
                <p class="fw-bold mb-0">Adresse de livraison</p>
                <p class="mb-0">42 Rue des Oliviers, Maârif</p>
                <p class="mb-0">20100 Casablanca, Maroc</p>
              </div>
            </div>
          </div>
        </div>

        <div class="finance p-4 rounded-xl shadow">
          <h2 class="h6 fw-bold mb-3 position-relative">Résumé financier</h2>
          <div class="d-flex flex-column gap-2 position-relative">
            <div class="d-flex justify-content-between text-white-75 small">
              <span>Sous-total</span><span>2,950.00 DH</span>
            </div>
            <div class="d-flex justify-content-between text-white-75 small">
              <span>Frais de port (Express)</span><span>50.00 DH</span>
            </div>
            <div class="d-flex justify-content-between text-white-75 small">
              <span>TVA (20%)</span><span>590.00 DH</span>
            </div>
            <div class="my-2" style="height:1px;background:rgba(255,255,255,.2);"></div>
            <div class="d-flex justify-content-between fs-4 fw-black">
              <span>TOTAL</span><span>3,590.00 DH</span>
            </div>
          </div>
        </div>

        <div class="card-soft rounded-xl p-4">
          <h2 class="h6 fw-bold mb-3">Expédition</h2>
          <div class="mb-3">
            <label class="form-label small fw-bold" style="color:#c39998;">Transporteur</label>
            <select class="form-select form-select-sm" style="background:rgba(255,255,255,.06);color:#fff;border:1px solid rgba(255,255,255,.1);">
              <option>Aramex Maroc</option>
              <option>DHL International</option>
              <option>Amana Express</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label small fw-bold" style="color:#c39998;">Numéro de suivi</label>
            <input type="text" class="form-control form-control-sm"
                   value="ARX-9982310-MA" style="background:rgba(255,255,255,.06);color:#fff;border:1px solid rgba(255,255,255,.1);" />
          </div>
          <button class="btn btn-sm w-100 rounded-lg fw-bold text-uppercase"
                  style="letter-spacing:.12em;background:rgba(255,255,255,.06);color:#fff;border:1px solid rgba(255,255,255,.15);">
            Mettre à jour le suivi
          </button>
        </div>
      </div>
    </div>