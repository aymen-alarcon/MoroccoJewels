@include("includes.header")
            <section class="bg-black-20 py-4 py-sm-5 py-lg-6">
                <div class="w-100 container-xl mx-auto px-4 px-sm-5 px-lg-6 row g-5 align-items-center">
                    <div class="col-md-6 d-flex flex-column gap-4">
                        <h2 class="fs-2 font-display text-accent">
                            {{ $product->name }}
                        </h2>
                        <p class="fs-5 text-text-dark-80">à un prix de {{ $product->price }} DH on a {{ $product->stock }} Produit dans le stock ce produit apartient au categorie {{ $product->category->name }} on a aussi complié une petite description {{ $product->description }} </p>
                        @auth                            
                            <div class="mt-3">
                                <a href="/Client/Cart/addToCart/{{ $product->id }}" class="btn custom-button">
                                    <span class="text-truncate">Ajouter Aux Panier</span>
                                </a>
                            </div>
                        @endauth
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset("storage/" . $product->main_image) }}" class="rounded h-50 w-75" alt="">
                    </div>
                </div>
            </section>
            @if (isset($product->history))                
                <section class="py-4 py-sm-5 py-lg-6">
                    <div class="w-100 container-xl mx-auto px-4 px-sm-5 px-lg-6">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-12 order-md-2">
                                <div class="prose-content max-w-none text-text-dark-80">
                                    <h2 class="fs-2 font-display text-accent mb-4">
                                        Signification Historique
                                    </h2>
                                    <p class="fs-5 mb-3">{{ $product->history }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <section class="py-4 py-sm-5 py-lg-6 bg-black-20">
                <div class="w-100 container-xl mx-auto px-4 px-sm-5 px-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="fs-2 font-display text-accent">
                            Matériel
                        </h2>
                        <p class="mx-auto fs-5 text-text-dark-80 mt-3">
                            Un héritage transmis à travers les âges, au cœur des montagnes
                            de l'Atlas.
                        </p>
                    </div>
                    <div class="row g-4 text-text-dark-80">
                        @foreach ($product->materiels as $materiel)                            
                            <div class="col-md-4">
                                <div class="feature-card-2 h-100 d-flex flex-column align-items-center text-center p-4">
                                    <h3 class="font-display fs-3 text-accent mb-3">{{ $materiel->name }}</h3>
                                    <p class="mb-0">{{ $materiel->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
    </main>
@include("includes.footer")