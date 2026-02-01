@include("includes.Admin_header")
    <main class="d-flex flex-column overflow-hidden">
            <span class="material-symbols-outlined position-absolute" style="left:10px;top:50%;transform:translateY(-50%);color:#94a3b8;">search</span>
            <input class="form-control ps-5 py-2 rounded-lg"
                   style="background:rgba(255,255,255,.06);border:0;color:#fff;"
                   placeholder="Rechercher une catégorie..."/>
          </div>
        </div>

        <div class="d-flex align-items-center gap-3 ms-3">
          <button class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1"
                  style="background:var(--bb-primary);color:#2b1600;">
            <span class="material-symbols-outlined">add</span> Ajouter une catégorie
          </button>
          <div class="vr" style="height:32px;background:#5a1a19;"></div>
          <button class="btn btn-sm rounded-circle position-relative" style="width:40px;height:40px;color:#cbd5e1;background:transparent;">
            <span class="material-symbols-outlined">notifications</span>
            <span class="position-absolute top-0 end-0 translate-middle p-1 bg-danger border border-white rounded-circle"></span>
          </button>
          <button class="btn btn-sm rounded-pill d-flex align-items-center gap-1" style="background:transparent;">
            <div class="rounded-circle d-inline-flex align-items-center justify-content-center border" style="width:32px;height:32px;background:rgba(244,157,37,.2);color:var(--bb-primary);border-color:rgba(244,157,37,.3);">
              https://lh3.googleusercontent.com/aida-public/AB6AXuCddMIcn4iOnGYjVjbPJ4UrkxkErs9w_BJLhhf31BAuVP_lVi8O4e5gr84emgnbLcuELMt-Cx5kfxP3Iq6DH64WW06xrokwbcgHqSpn4wKxTPVg_mGIq5-DcZucitaSXmcwkIZq--dypRWx1K1bR69OeF9JEOTW3ryC2_9itOFWgwk8CbYryrXnqdkOAlS9zY-5nEPo9TxOMFTNU4PrylTLwuHiPOJp61bDKt7WXuRDPlm0QCrtUiVl-2o1S-YmDvKP4aICBYH_RHw
            </div>
          </button>
        </div>
      </header>

      <div class="overflow-auto p-4 p-lg-5">
        <nav class="d-flex align-items-center gap-2 small mb-3">
          #Accueil</a>
          <span class="material-symbols-outlined" style="color:#94a3b8;font-size:18px;">chevron_right</span>
          <span class="fw-semibold">Catégories</span>
        </nav>

        <div class="row g-3 mb-4">
          <div class="col-12 col-md-4">
            <div class="card-surface rounded-xl p-4 d-flex align-items-center gap-3">
              <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(244,157,37,.15);color:var(--bb-primary);">
                <span class="material-symbols-outlined fs-3">category</span>
              </div>
              <div>
                <p class="mb-0 small text-white-50 fw-semibold">Total Catégories</p>
                <p class="mb-0 fs-4 fw-bold">12</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card-surface rounded-xl p-4 d-flex align-items-center gap-3">
              <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(16,185,129,.15);color:#10b981;">
                <span class="material-symbols-outlined fs-3">inventory</span>
              </div>
              <div>
                <p class="mb-0 small text-white-50 fw-semibold">Produits Associés</p>
                <p class="mb-0 fs-4 fw-bold">458</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card-surface rounded-xl p-4 d-flex align-items-center gap-3">
              <div class="d-inline-flex align-items-center justify-content-center rounded" style="width:48px;height:48px;background:rgba(59,130,246,.15);color:#3b82f6;">
                <span class="material-symbols-outlined fs-3">visibility</span>
              </div>
              <div>
                <p class="mb-0 small text-white-50 fw-semibold">Vues Mensuelles</p>
                <p class="mb-0 fs-4 fw-bold">3.8k</p>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-xl overflow-hidden card-surface mb-3">
          <div class="d-flex align-items-center justify-content-between px-4 py-3" style="border-bottom:1px solid #5a1a19;">
            <h3 class="h6 fw-bold mb-0">Liste des catégories</h3>
            <div class="d-flex gap-2">
              <button class="btn btn-sm rounded-lg text-white-50"><span class="material-symbols-outlined">filter_list</span></button>
              <button class="btn btn-sm rounded-lg text-white-50"><span class="material-symbols-outlined">sort_by_alpha</span></button>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-cats align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Aperçu</th>
                  <th class="px-4 py-3">Nom</th>
                  <th class="px-4 py-3">Description</th>
                  <th class="px-4 py-3">Produits</th>
                  <th class="px-4 py-3 text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-3">
                    <div class="rounded" style="width:48px;height:48px;background:#5a1a19;overflow:hidden;">
                      https://lh3.googleusercontent.com/aida-public/AB6AXuCleD7MsCOP0mb_laT81I582IeR58qU_i5-YdU-efwQaQ7GP3h0zYnWg3-rHgRpItuBxve4xLkF-d5FTrW46PKAqirJS2evCyZ3EywtuBDIOvPTlvFcTHw27RWsmvpVk5cpZgH43AdzZIUULhMUSgPt5rmtEFT7Ye4PwZlPEpiOXl5WA-sMenGAGFUv4__-urPGkdvs48Gnihfwl2GG6V15inUg_Mcum91mBBetWsfX7MDlgcwQGiseYMS8_EiFecjmalUbszirJwPE
                    </div>
                  </td>
                  <td class="px-4 py-3">
                    <div class="fw-bold">Colliers en Argent</div>
                    <div class="small" style="color:color-mix(in srgb, var(--bb-primary) 60%, white);">ID: CAT-001</div>
                  </td>
                  <td class="px-4 py-3 small text-white-50" style="max-width:280px;">Bijoux traditionnels du Sud du Maroc, artisanat de Tiznit.</td>
                  <td class="px-4 py-3"><span class="count-pill">156 produits</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>

                <tr>
                  <td class="px-4 py-3">
                    <div class="rounded" style="width:48px;height:48px;background:#5a1a19;overflow:hidden;">
                      https://lh3.googleusercontent.com/aida-public/AB6AXuD2lx-j9rNbT1A40HarCNVZ5JddFDCSran2-Gkn0jgje6lJe6kjJm5HX81pK_iD6OK_nCFyPSZvZ17fn4FD3PMHqBLiTQjeMHg1VG5bv3kdfS1UxY6LKkCO3mmAjT99raVCVYOh_GC4f6C--4Qjk63GX4o96JHrMI1rmNG6mfKfUM5dm4PoZW0SIWEvfKWxdJb2o_hmwfhRZcO3xghsDiqfoRFzMYHETa7m1WMq40wCKOqyjttSBtIHhjWcH3-wJPqx_SB3VHDyVxQ
                    </div>
                  </td>
                  <td class="px-4 py-3">
                    <div class="fw-bold">Bracelets Touareg</div>
                    <div class="small" style="color:color-mix(in srgb, var(--bb-primary) 60%, white);">ID: CAT-002</div>
                  </td>
                  <td class="px-4 py-3 small text-white-50" style="max-width:280px;">Artisanat nomade authentique gravé à la main.</td>
                  <td class="px-4 py-3"><span class="count-pill">84 produits</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>

                <tr>
                  <td class="px-4 py-3">
                    <div class="rounded" style="width:48px;height:48px;background:#5a1a19;overflow:hidden;">
                      https://lh3.googleusercontent.com/aida-public/AB6AXuCtMmwLyOo0Day_Q31rGx8GWtjBx8T4YXZubAzQikd3f4VXcPmDRkPzsPtptXUyNgue99X77pUm67ZAbmqK3OwUpoqaNfqG_dfnyn5UQr13aNiuJsLt7A2AyZKMpnYkyHn7GThH5CGZPTj28Kz_OtfTci-FbbJv1qOn3bOabb2GshJrGyUizZsF-T2HvCeMfC_cre93B6-EXmxMHK7HqChKwzrRuvf4uYto-1nGrkivQmDrtEjPlIx7uVSYMq1lqJjTStzDAKyUnSY
                    </div>
                  </td>
                  <td class="px-4 py-3">
                    <div class="fw-bold">Fibules Royales</div>
                    <div class="small" style="color:color-mix(in srgb, var(--bb-primary) 60%, white);">ID: CAT-003</div>
                  </td>
                  <td class="px-4 py-3 small text-white-50" style="max-width:280px;">Attaches traditionnelles émaillées et serties de pierres.</td>
                  <td class="px-4 py-3"><span class="count-pill">42 produits</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>

                <tr>
                  <td class="px-4 py-3">
                    <div class="rounded" style="width:48px;height:48px;background:#5a1a19;overflow:hidden;">
                      https://lh3.googleusercontent.com/aida-public/AB6AXuBAOIvEVO--F01UvN8VAN4DCIgUX1nLC32rmc58KJlwZ2OEvBIybmWDsWPxf_saFTZI8KdQKZYoEwlwb7r-vA2CuO4LoaBLJYfjk8H3SS1BObTHQyDN-mvEvO6l4uo7LmBpVDvCw0II1_2DOh-sQB-wT5sBMfJmONuxr--sM8EZqQs08MMR54JkJd_wP0KsFevdqJD7UK4xT2UQOJt3T5InyRIJfJxWS6Rp08Sowa3yFQ4Qgj3yID0IfdrBbhbEP7ITdSCxCKyq7E0
                    </div>
                  </td>
                  <td class="px-4 py-3">
                    <div class="fw-bold">Boucles d'oreilles</div>
                    <div class="small" style="color:color-mix(in srgb, var(--bb-primary) 60%, white);">ID: CAT-004</div>
                  </td>
                  <td class="px-4 py-3 small text-white-50" style="max-width:280px;">Créoles et pendants d'inspiration berbère.</td>
                  <td class="px-4 py-3"><span class="count-pill">67 produits</span></td>
                  <td class="px-4 py-3 text-end">
                    <button class="btn btn-sm text-white-50"><span class="material-symbols-outlined">edit</span></button>
                    <button class="btn btn-sm text-danger"><span class="material-symbols-outlined">delete</span></button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="d-flex align-items-center justify-content-between px-4 py-3" style="border-top:1px solid #5a1a19;">
            <p class="mb-0 small text-white-50">Affichage de 1-4 sur 12 catégories</p>
            <div class="d-flex gap-2">
              <button class="btn btn-sm rounded px-3 py-1 text-white-50 border" style="border-color:#5a1a19;" disabled>Précédent</button>
              <button class="btn btn-sm rounded px-3 py-1" style="background:var(--bb-primary);color:#2b1600;">1</button>
              <button class="btn btn-sm rounded px-3 py-1 text-white-75 border" style="border-color:#5a1a19;">2</button>
              <button class="btn btn-sm rounded px-3 py-1 text-white-75 border" style="border-color:#5a1a19;">3</button>
              <button class="btn btn-sm rounded px-3 py-1 text-white-75 border" style="border-color:#5a1a19;">Suivant</button>
            </div>
          </div>
        </div>
      </div>
    </main>

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
  </div>