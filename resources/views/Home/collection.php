<?php include "../includes/header.php"?>
            <main class="container mx-auto px-4 px-sm-5 px-lg-6 py-4">
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-wrap gap-2 font-body">
                        <a class="text-background-light-70 hover-text-accent fs-6 fw-medium breadcrumb-link" href="#">
                            Accueil
                        </a>
                        <span class="text-background-light-70 fs-6 fw-medium">/</span>
                        <span class="text-background-light fs-6 fw-medium">
                            Collections
                        </span>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between gap-3">
                        <div class="d-flex flex-column gap-1">
                            <h1 class="font-display text-accent fs-2 fs-md-1 fw-bold tracking-tight">
                                Nos Collections
                            </h1>
                            <p class="text-background-light-80 fs-6 fw-normal">
                                Explorez l'authenticité et la beauté de nos bijoux berbères
                                faits à la main.
                            </p>
                        </div>
                    </div>
                    
                    <div class="row d-flex flex-column flex-lg-row gap-5">
                        <aside class="col-md-3 col-lg-3 col-xl-2-5 shrink-0">
                            <div class="sticky-sidebar">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="fs-5 fw-bold font-display text-accent">
                                        Filtres
                                    </h3>
                                    <button class="btn btn-link p-0 text-decoration-none fs-6 fw-medium text-accent-80 hover-underline reset-filter">
                                        Réinitialiser
                                    </button>
                                </div>
                                
                                <div class="mb-4 pt-4 border-top border-accent-20">
                                    <h4 class="fw-semibold text-accent-90 mb-3">Type de Bijou</h4>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="colliers">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="colliers">
                                                Colliers
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="bracelets">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="bracelets">
                                                Bracelets
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="bagues">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="bagues">
                                                Bagues
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-4 pt-4 border-top border-accent-20">
                                    <h4 class="fw-semibold text-accent-90 mb-3">Matériau</h4>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="argent">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="argent">
                                                stancia
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="corail">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="corail">
                                                caper
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="ambre">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="ambre">
                                                argent plaqué
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="ambre">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="ambre">
                                                 argent vintage
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="ambre">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="ambre">
                                                 pierres
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input custom-checkbox" type="checkbox" id="ambre">
                                            <label class="form-check-label text-background-light-80 cursor-pointer" for="ambre">
                                                 filigrane
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        
                        <div class="flex-1">
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-6 text-background-light-70 mb-0">
                                        Affichage de 8 sur 32 bijoux
                                    </p>
                                    <div class="dropdown">
                                        <button class="btn sort-dropdown d-flex align-items-center justify-content-center gap-2" type="button" data-bs-toggle="dropdown">
                                            <span class="text-white fs-6 fw-medium">
                                                Trier par : Les plus populaires
                                            </span>
                                            <i class="bi bi-chevron-down text-background-light"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Les plus récents</a></li>
                                            <li><a class="dropdown-item" href="#">Prix croissant</a></li>
                                            <li><a class="dropdown-item" href="#">Prix décroissant</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="row g-3 g-md-4">
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Fibule Tiznit
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Collier en argent traditionnel
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Bague Touareg
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Bague en argent et ébène
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Collier d'Ambre
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Ambre et perles d'argent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Main de Fatma
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Pendentif protecteur en argent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Boucles d'Oreilles Atlas
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Argent ciselé et corail
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Bracelet Manchette
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Bracelet rigide en argent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Pendentif du Sud
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Inspiration saharienne
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product-card group h-100">
                                            <div class="product-image-container">
                                                <div class="product-image bg-image-1"></div>
                                                <button class="product-detail-btn">
                                                    Voir les détails
                                                </button>
                                            </div>
                                            <div class="product-info mt-3">
                                                <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                    Parure de Fête
                                                </p>
                                                <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                    Ensemble collier et boucles
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt-4 mt-2 border-top border-accent-20 d-flex align-items-center justify-content-center">
                                    <nav class="d-flex align-items-center gap-2">
                                        <button class="pagination-btn">
                                            <i class="bi bi-chevron-left"></i>
                                        </button>
                                        <button class="pagination-btn active">
                                            1
                                        </button>
                                        <button class="pagination-btn">
                                            2
                                        </button>
                                        <button class="pagination-btn">
                                            3
                                        </button>
                                        <button class="pagination-btn">
                                            4
                                        </button>
                                        <button class="pagination-btn">
                                            <i class="bi bi-chevron-right"></i>
                                        </button>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </main>
<?php include "../includes/footer.php";?>