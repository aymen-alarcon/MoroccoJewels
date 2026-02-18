@include("includes.header")
            <main class="container mx-auto px-4 px-sm-5 px-lg-6 py-4">
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-wrap justify-content-between gap-3">
                        <div class="d-flex flex-column gap-1">
                            <h1 class="font-display text-accent fs-2 fs-md-1 fw-bold tracking-tight">Nos Collections</h1>
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
                                <form method="GET" action="{{ url()->current() }}" id="filterForm">
                                    <div class="mb-4 pt-4 border-top border-accent-20">
                                        <h4 class="fw-semibold text-accent-90 mb-3">Type de Bijou</h4>
                                        @foreach ($categories as $category)
                                            <div class="form-check">
                                                <input class="form-check-input filter-input custom-checkbox" type="checkbox" name="categories[]"
                                                    value="{{ $category->id }}" id="cat{{ $category->id }}"
                                                    {{ in_array($category->id, request('categories', [])) ? 'checked' : ''}}>
                                                <label class="form-check-label" for="cat{{ $category->id }}">{{ $category->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>
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
                                        Affichage de 8 sur {{ count($products) }} bijoux
                                    </p>
                                    <div class="dropdown">
                                        <select name="sort" form="filterForm" class="form-select filter-input">
                                            <option value="" selected>Trier par</option>
                                            <option value="latest">Les plus récents</option>
                                            <option value="price_asc">Prix croissant</option>
                                            <option value="price_desc">Prix décroissant</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 g-md-4">
                                    @if (count($products) > 0)                                        
                                        @foreach ($products as $product)                                        
                                            <div class="col-6 col-md-4 col-xl-3">
                                                <div class="product-card group h-100">
                                                    <div class="product-image-container">
                                                        @if (isset($product->main_image))
                                                            <div class="product-image" style="background-image: url({{ asset("storage/" . $product->main_image) }})"></div>
                                                        @else
                                                            <div class="product-image bg-image-1"></div>
                                                        @endif
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            @auth                                                                
                                                                <a href="/Client/Cart/addToCart/{{ $product->id }}" class="text-decoration-none product-detail-btn">Ajoutez au panier</a>
                                                                <a href="/Client/Cart/addToFavorites/{{ $product->id }}" class="text-decoration-none product-detail-btn">Ajoutez au Favoris</a>
                                                            @endauth
                                                            <a href="/Client/Collection/Details/{{ $product->id }}" class="text-decoration-none product-detail-btn">Voir les détails</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info mt-3">
                                                        <p class="text-background-light fs-6 fw-medium leading-normal mb-1">
                                                            {{ $product->name }}
                                                        </p>
                                                        <p class="text-background-light-70 fs-6 fw-normal leading-normal mb-0">
                                                            {{ $product->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <div class="product-card p-3">
                                            <span>There are no Products Yet in this Platform</span>
                                            </div>
                                        </div>
                                    @endif
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
@include("includes.footer")