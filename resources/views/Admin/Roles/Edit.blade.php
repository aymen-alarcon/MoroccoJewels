@include("includes.Admin_header")
<main class="m-5">
    <form class="d-flex flex-column w-100 form-card p-3" style="margin-left: 15em" action="/Admin/Roles/EditRole/update/{{ $role->id }}" method="POST">
        @csrf
        @method("PUT")
    
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 px-4 px-md-5 py-4">
            <div class="d-flex flex-column gap-1">
                <p class="text-white fw-black" style="font-size:2.25rem;letter-spacing:-.03em;line-height:1.1;">
                    Modifier le Rôle Admin
                </p>
                <p class="text-white-50 mb-0">Mettez à jour les permissions et les détails d'accès au système</p>
            </div>
        </div>
    
        <div class="d-flex flex-column gap-4 px-4 px-md-5 pb-5">
            <div class="surface rounded p-4 m-4 w-100">
                <label class="text-white fw-semibold small mb-2 d-block">Nom du rôle</label>
                <input type="text" name="role_name" class="form-control rounded" value="{{ $role->role_name }}">
            </div>
    
            {{-- <div>
                <div class="d-flex align-items-center gap-2 ps-3 border-start" style="border-color:var(--bb-primary)!important;">
                    <h2 class="text-white fw-bold mb-0" style="font-size:1.6rem;letter-spacing:-.015em;">Permissions du Rôle</h2>
                </div>
            </div> --}}
    
            {{-- <div class="row g-4 mt-1">
    
                <div class="col-12 col-md-6">
                <div class="category-card p-4 d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-2 pb-2"
                        style="border-bottom:1px solid rgba(255,255,255,.06);">
                    <span class="material-symbols-outlined" style="color:var(--bb-primary);">inventory_2</span>
                    <h3 class="h6 fw-bold mb-0">Gestion des Produits</h3>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Ajouter de nouveaux produits</span>
                    <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" checked>
                    </div>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Modifier les prix et descriptions</span>
                    <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" checked>
                    </div>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between opacity-75">
                    <span class="text-white-75">Supprimer définitivement</span>
                    <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox">
                    </div>
                    </div>
    
                </div>
                </div>
    
                <div class="col-12 col-md-6">
                <div class="category-card p-4 d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-2 pb-2"
                        style="border-bottom:1px solid rgba(255,255,255,.06);">
                    <i class="bi bi-cart"></i>
                    <h3 class="h6 fw-bold mb-0">Commandes</h3>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Voir l'historique complet</span>
                    <div class="form-check form-switch m-0"><input class="form-check-input" checked type="checkbox"></div>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Modifier le statut d'expédition</span>
                    <div class="form-check form-switch m-0"><input class="form-check-input" checked type="checkbox"></div>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Gérer les remboursements</span>
                    <div class="form-check form-switch m-0"><input class="form-check-input" type="checkbox"></div>
                    </div>
                </div>
                </div>
    
                <div class="col-12 col-md-6">
                <div class="category-card p-4 d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-2 pb-2"
                        style="border-bottom:1px solid rgba(255,255,255,.06);">
                    <i class="bi bi-people"></i>
                    <h3 class="h6 fw-bold mb-0">Utilisateurs &amp; Clients</h3>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Accéder aux fiches clients</span>
                    <div class="form-check form-switch m-0"><input class="form-check-input" checked type="checkbox"></div>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between opacity-75">
                    <span class="text-white-75">Modifier les rôles staff</span>
                    <div class="form-check form-switch m-0"><input class="form-check-input" disabled type="checkbox"></div>
                    </div>
                </div>
                </div>
    
                <div class="col-12 col-md-6">
                <div class="category-card p-4 d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-2 pb-2"
                        style="border-bottom:1px solid rgba(255,255,255,.06);">
                    <span class="material-symbols-outlined" style="color:var(--bb-primary);">campaign</span>
                    <h3 class="h6 fw-bold mb-0">Marketing &amp; Analytics</h3>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Gérer les codes promo</span>
                    <div class="form-check form-switch m-0"><input class="form-check-input" checked type="checkbox"></div>
                    </div>
    
                    <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white-75">Voir les rapports de vente</span>
                    <div class="form-check form-switch m-0"><input class="form-check-input" checked type="checkbox"></div>
                    </div>
    
                </div>
                </div>
    
            </div>  --}}
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary m-2 w-25 rounded px-4 py-2 fw-bold">Sauvegarder les changements</button>
        </div>
    </form>
</main>